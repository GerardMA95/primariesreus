<?php

namespace App\Http\Controllers\Web\Entity\User;

use App\DTO\Alert\Alert;
use App\Email;
use App\EmailSend;
use App\EmailType;
use App\Http\Requests\Web\Entity\User\UserCreateRequest;
use App\Http\Services\Web\reCaptcha\ReCaptchaValidationService;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class UserController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('web.adhesions.adhesionsMainPage');

//        $reCaptcha = $request->input('g-recaptcha-response');
//        $reCaptchaValidationService = new ReCaptchaValidationService();
//        $reCaptchaValidated = $reCaptchaValidationService->verifyResponse($_SERVER["REMOTE_ADDR"], $reCaptcha);
//        if ( $reCaptchaValidated->success ) {
//
//        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  UserCreateRequest $request
     * @return Response
     */
    public function store(UserCreateRequest $request)
    {
        $validated = $request->validated();

        $alertArray = collect();
        $user = new User();
        $user->fill($validated);

        $reCaptcha = $request->input('g-recaptcha-response');
        $reCaptchaValidationService = new ReCaptchaValidationService();
        $reCaptchaValidated = $reCaptchaValidationService->verifyResponse($_SERVER["REMOTE_ADDR"], $reCaptcha);

        if ( $reCaptchaValidated->success ) {
            if (User::where('email', $user->email)->get()->isEmpty()) {
                if ($user->save()) {
                    $email = new Email();
                    $email->email_to = $user->email;
                    $email->email_from = Email::EMAIL_INFO_DEFAULT;
                    $email->email_type_id = EmailType::EMAIL_REGISTER_CONF;
                    $email->text = '';
                    $email->name = $user->name;

                    if ($email->save()) {
                        $emailSend = new EmailSend();
                        $emailSend->email_id = $email->id;
                        if ($emailSend->save()) {
                            $alert = new Alert();
                            $alert->setSuccessType();
                            $alert->setMessage(trans('form.save_success'));
                            $alertArray->push($alert);

                            $alertCheckEmail = new Alert();
                            $alertCheckEmail->setWarningType();
                            $alertCheckEmail->setMessage(trans('form.check_email_confirmation'));
                            $alertArray->push($alertCheckEmail);
                        } else {
                            //Eliminamos el usuario porque ha habido un error y debe volver a intentarlo (Para no quedarnos con sus datos)
                            $user->delete();
                            $alert = new Alert();
                            $alert->setDangerType();
                            $alert->setMessage(trans('form.save_danger'));
                            $alertArray->push($alert);
                        }
                    } else {
                        //Eliminamos el usuario porque ha habido un error y debe volver a intentarlo (Para no quedarnos con sus datos)
                        $user->delete();
                        $alert = new Alert();
                        $alert->setSuccessType();
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
                $alert->setMessage(trans('form.email_exist'));
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

    public function emailConfirmation($userId, $userToken)
    {
        $alertArray = collect();

        $user = User::where(['id' => $userId])->first();
        if($user) {
            if(!$user->active) {
                if($userToken == sha1($user->email)) {
                    $user->active = true;
                    $user->save();

                    $alert = new Alert();
                    $alert->setSuccessType();
                    $alert->setMessage(trans('form.user_confirmation_success'));
                    $alertArray->push($alert);
                } else {
                    $alert = new Alert();
                    $alert->setDangerType();
                    $alert->setMessage(trans('form.user_confirmation_error'));
                    $alertArray->push($alert);
                }
            } else {
                //Si el usuario ya está activado pero el token es incorrecto.
                if($userToken == sha1($user->email)) {
                    $alert = new Alert();
                    $alert->setDangerType();
                    $alert->setMessage(trans('form.user_already_confirmed'));
                    $alertArray->push($alert);
                } else {
                    $alert = new Alert();
                    $alert->setDangerType();
                    $alert->setMessage(trans('form.user_not_found'));
                    $alertArray->push($alert);
                }
            }
        } else {
            $alert = new Alert();
            $alert->setDangerType();
            $alert->setMessage(trans('form.user_not_found'));
            $alertArray->push($alert);
        }

        return redirect()->route('home')->with('alertArray', $alertArray);
    }
}
