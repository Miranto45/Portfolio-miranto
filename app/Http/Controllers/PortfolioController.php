<?php

namespace App\Http\Controllers;

use App\Mail\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class PortfolioController extends Controller
{
    public function index()
    {
        return view('portfolio', ['p' => config('portfolio')]);
    }

    /** Telechargement du CV en PDF (fonctionne pour tout le monde) */
    public function cv()
    {
        $file = public_path('cv/CV-Miranto.pdf');

        abort_unless(file_exists($file), 404, 'CV introuvable');

        return response()->download($file, 'CV-ANDRIAMAHERISON-Miranto.pdf', [
            'Content-Type' => 'application/pdf',
        ]);
    }

    /** Formulaire de contact : envoie un vrai email */
    public function contact(Request $request)
    {
        $data = $request->validate([
            'name'    => ['required', 'string', 'max:100'],
            'email'   => ['required', 'email', 'max:150'],
            'subject' => ['nullable', 'string', 'max:150'],
            'message' => ['required', 'string', 'max:5000'],
        ]);

        try {
            Mail::to(config('portfolio.mail_to', config('mail.from.address')))
                ->send(new ContactMessage($data));
        } catch (\Throwable $e) {
            Log::error('Echec envoi message contact : '.$e->getMessage());

            return back()
                ->withInput()
                ->with('error', "Le message n'a pas pu etre envoye. Verifie la configuration MAIL dans le fichier .env");
        }

        return back()->with('success', 'Merci ! Ton message a bien ete envoye. Je repondrai rapidement.');
    }
}
