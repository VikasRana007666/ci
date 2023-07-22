<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // exec('php spark make:controller Adminv3');
        // return command('cache:clear');
        // return command('debugbar:clear');
        return command('logs:clear --force');
        // return command('key:generate');

        // return "jhhgjhgjhgjh";

        // return view('welcome_message');
    }

    public function helloWorld()
    {

        return view('hello_world');
    }
}
