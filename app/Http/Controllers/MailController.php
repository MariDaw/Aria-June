<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    // Función para enviar email en la zona de contacto #Error

    public function sendEmail(Request $request)
    {
        $data = [
            'nombre' => $request->input('nombre'),
            'email' => $request->input('email'),
            'mensaje' => $request->input('mensaje')
        ];
        Mail::to('aria.web.plan@gmail.com')->send(new ContactMail($data));
        return redirect()->back()->with('success', 'Email enviado, le contactaremos lo más breve posible.');
    }
}
