<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage;
use App\Mail\ContactNotification;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        $contact = ContactMessage::create($validated);

        // Disparo de e-mail (necessita config no .env)
        try {
            Mail::to(env('MAIL_TO_ADDRESS', 'contato@websiteponto.com.br'))->send(new ContactNotification($contact));
        } catch (\Exception $e) {
            // Log do erro se necessário
        }

        return back()->with('success', 'Sua mensagem foi enviada com sucesso! Em breve entraremos em contato.');
    }
}
