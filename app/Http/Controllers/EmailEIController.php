<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestingEIMail;


class EmailEIController extends Controller
{
    public function send()
    {
        $data = [
            'name' => 'Anil',
            'subject' => 'Refer the email'
        ];

        Mail::to('bhadoriyaanil98@gmail.com') -> send(new TestingEIMail($data));

        return "Email Sent Successfully!";
    }
}