<?php

namespace App\Http\Controllers;

use App\Mail\TestEmail;
use Illuminate\Http\Request;

class SendMailController extends Controller
{
    public function sendMail(Request $request)
    {
        $valueArray = [
            'name' => 'Devs Code',
        ];

        try {
            \Mail::to('devscode799@gmail.com')->send(new TestEmail($valueArray));
            echo 'Mail send successfully';
        } catch (\Exception $e) {
            echo 'Error - ' . $e;
        }
    }

}
