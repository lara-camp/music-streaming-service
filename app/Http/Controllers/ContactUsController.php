<?php

namespace App\Http\Controllers;

use Exception;
use Inertia\Inertia;
use App\Mail\SendMail;
use App\Mail\SendMessageToEndUser;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\StoreContactUsRequest;

class ContactUsController extends Controller
{
    public function form()
    {
        return Inertia::render('User/Page/ContactUs');
    }

    public function Sendmail(StoreContactUsRequest $request)
    {
        $name = $request->name;
        $email = $request->email;
        $sub = $request->subject;
        $msg = $request->message;

        $send_mail = config('mail.from.address');
        try {
            Mail::to($send_mail)->send(new SendMail($name, $email, $sub, $msg));
        } catch (Exception $exception) {
            Log::channel('single')->error($exception);
        }

        $mailData = [
            'url' => config('app.url'),
        ];

        $senderMessage = "thanks for your message , we will reply you in later";
        try {
            Mail::to($email)->send(new SendMessageToEndUser($name, $senderMessage, $mailData));
        } catch (Exception $exception) {
            Log::channel('single')->error($exception);
        }

        return Inertia::render('User/Page/ContactUsSuccess');
    }
}
