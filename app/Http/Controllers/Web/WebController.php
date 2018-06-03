<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class WebController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function policyTerms()
    {
        return view('web.policy.policyTermsPage');
    }
}
