<?php

namespace App\Http\Controllers;

use App\Console\Commands\SendWelcomeEmail;
use Illuminate\Http\Request;

/**
 * Class SendWelcomeEmailController
 * @package App\Http\Controllers
 */
class SendWelcomeEmailController extends Controller
{

    /**
     * @var SendWelcomeEmail
     */
    public $email;

    /**
     * SendWelcomeEmailController constructor.
     * @param $email
     */
    public function __construct(SendWelcomeEmail $email)
    {
        $this->email = $email;
    }

    //
    /**
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $this->email->send();
    }

}
