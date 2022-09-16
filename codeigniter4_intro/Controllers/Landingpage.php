<?php

namespace App\Controllers;

class Landingpage extends BaseController
{
    public function index()
    {
         $data['title'] = "Hi! Welcome to National Parks Explorer!";
        return view('landing_message', $data);
    }
}