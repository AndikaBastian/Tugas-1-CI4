<?php

namespace App\Controllers;
use CodeIgniter\Publisher\Exceptions\PublisherException;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    Public function tentang(): string
    {
        return view('tentang.php');
    }
}