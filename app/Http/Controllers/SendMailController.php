<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Log;

class SendMailController extends Controller
{
    //
    public function sendMail(Request $request){
        Log::debug("[SendMailController]: hit");

        Log::info(json_encode($request));

        $request->validate([
            'full_name' => 'required|string|max:30',
            'email' => 'required|string|max:30',
            'content' => 'required|string',
        ]);

        Log::debug("[SendMailController]: validated");

        $data = array(
            'full_name' => $request->full_name,
            'email' => $request->email,
            'content' => $request->content
        );

        try {
            //code...
            Log::debug("[SendMessageController]:creating contact mail");

            $email = new ContactMail($data);

            Log::debug('sending mail');


            //send mail to specific email
            Mail::to('clifford@myzeepay.com')->send($email);


            //Log Mail Sent succesfully
            Log::info('Mail sent Succesfully.',['email_data'=> $data]);

            return redirect()->back()->with('success', 'Your message has been sent successfully');

        } catch (\Throwable $th) {
            //throw $th;
            Log::error('Error sending email.', [

                'exception_message' => $th->getMessage(),
                'exception_trace' => $th->getTraceAsString(),
                'email_data' => $data
            ]);

             return redirect("/contact")->with('error', $th->getMessage());
        }
    }

}
