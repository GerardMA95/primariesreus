<?php

namespace App\Http\Controllers\Web\Entity\Email;

use App\DTO\Alert\Alert;
use App\Email;
use App\EmailSend;
use App\EmailType;
use App\Http\Requests\Web\Entity\Email\EmailRequest;
use App\Http\Services\Web\reCaptcha\ReCaptchaValidationService;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('web.contact.contactPage');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  EmailRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmailRequest $request)
    {
        $validated = $request->validated();

        $alertArray = collect();
        $email = new Email();
        $email->fill($validated);

        $reCaptcha = $request->input('g-recaptcha-response');
//        $reCaptchaValidationService = new ReCaptchaValidationService();
//        $reCaptchaValidated = $reCaptchaValidationService->verifyResponse($_SERVER["REMOTE_ADDR"], $reCaptcha);

        //Error timeout recaptcha
        if ($reCaptcha) {
            $email->email_to = Email::EMAIL_INFO_DEFAULTi;
            $email->email_type_id = EmailType::EMAIL_QUESTION;

            if ($email->save()) {
                $emailSend = new EmailSend();
                $emailSend->email_id = $email->id;
                if ($emailSend->save()) {
                    $alert = new Alert();
                    $alert->setSuccessType();
                    $alert->setMessage(trans('form.email_send_success'));
                    $alertArray->push($alert);
                } else {
                    $alert = new Alert();
                    $alert->setDangerType();
                    $alert->setMessage(trans('form.save_danger'));
                    $alertArray->push($alert);
                }
            } else {
                $alert = new Alert();
                $alert->setDangerType();
                $alert->setMessage(trans('form.save_danger'));
                $alertArray->push($alert);
            }
        } else {
            $alert = new Alert();
            $alert->setDangerType();
            $alert->setMessage(trans('form.error_recaptcha'));
            $alertArray->push($alert);
        }

        return back()->with('alertArray', $alertArray);
    }

    public function send()
    {
        $emailsToSend = EmailSend::where('send_date', null)
            ->take(20)
            ->get();
        foreach ($emailsToSend as $emailToSend) {
            $sendEmail = false;
            $email = $emailToSend->email;

            if ($email->emailType->id == EmailType::EMAIL_QUESTION) {

            } else if ($email->emailType->id == EmailType::EMAIL_REGISTER_CONF) {
                $user = User::where('email', $email->email_to)->first();
                if (!$user->active) {
                    $sendEmail = true;
                    $emailTo = $email->email_to;
                    $subject = "Primaries Reus - confirmació d'usuari - " . $user->name;
                    $data = array(
                        'user' => $user,
                    );
                }
            } else if ($email->emailType->id == EmailType::EMAIL_DISABLE_REGISTER_CONF) {

            } else if ($email->emailType->id == EmailType::EMAIL_DELETE_DATA_CONF) {

            }

            if ($sendEmail) {
                Mail::send('emailTemplates.emailConfirmation', $data, function ($message) use ($emailTo, $subject) {
                    $message->from(Email::EMAIL_INFO_DEFAULT, 'Primàries Reus');
                    $message->to($emailTo)->subject($subject);
                });
                $date = new \DateTime();
                $emailToSend->send_date = $date->format('Y-m-d H:i:s');
                $emailToSend->save();
            }
        }
    }
}
