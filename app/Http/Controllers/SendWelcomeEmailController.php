<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SendWelcomeEmailController extends Controller
{
    //
    /**
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $data = [];
        return view('sendWelcomeEmail',$data);
    }

    public function send()
    {
        dump('Sending email');
    }

}
