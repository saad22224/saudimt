<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ParticipationMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class MailController extends Controller
{
   public function participations(Request $request)
{
    $request->validate([
        'firstName' => 'required',
        'middleName' => 'required',
        'lastName' => 'required',
        'email' => 'required|email',
        'phone' => 'required',
        'country' => 'required',
        'city' => 'required',
        'passport' => 'required',
        'gender' => 'required',
        'organization' => 'required',
        'specialization' => 'required',
        'terms' => 'required',
    ]);

    try {
        Mail::to('admin@saudimt2025.com')->send(new ParticipationMail(
            $request->firstName,
            $request->middleName,
            $request->lastName,
            $request->email,
            $request->phone,
            $request->country,
            $request->city,
            $request->passport,
            $request->gender,
            $request->organization,
            $request->specialization
        ));

        Log::info('Participation mail sent successfully', [
            'to' => 'admin@saudimt2025.com',
            'data' => $request->only([
                'firstName', 'middleName', 'lastName', 'email',
                'phone', 'country', 'city', 'passport',
                'gender', 'organization', 'specialization'
            ])
        ]);

        return redirect()->back()->with('success', 'تم ارسال الطلب بنجاح');

    } catch (\Exception $e) {
        Log::error('Failed to send participation mail', [
            'error' => $e->getMessage(),
            'trace' => $e->getTraceAsString(),
        ]);

        return redirect()->back()->with('error', 'حدث خطأ أثناء إرسال البريد الإلكتروني. برجاء المحاولة لاحقاً.');
    }
}
}
