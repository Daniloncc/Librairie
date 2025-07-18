<?php

namespace App\Providers;

use App\Providers\View;

class Auth
{
    static public function session()
    {
        if (isset($_SESSION['fingerPrint']) and $_SESSION['fingerPrint'] == md5($_SERVER['HTTP_USER_AGENT'] . $_SERVER['REMOTE_ADDR'])) {
            return TRUE;
        } else {
            return view::redirect('auth/index');
        }
    }
}
