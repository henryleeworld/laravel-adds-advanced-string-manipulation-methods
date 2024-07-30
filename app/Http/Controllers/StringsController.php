<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;

class StringsController extends Controller
{
    public function manipulate() 
    {
        echo __('Generates a random, secure 32-character password: ') . Str::advPassword(32) . PHP_EOL;
        $email = 'henry@hlcorps.com.tw';
        echo __('Extracts the domain part of :email, including subdomains: ', ['email' => $email]) . Str::emailDomain($email) . PHP_EOL;
    }
}
