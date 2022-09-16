<?php

namespace App\Controllers;

class About extends BaseController
{
    public function index()
    {    $data['title'] = "About Us";
        return view('about_message', $data);
    }
}