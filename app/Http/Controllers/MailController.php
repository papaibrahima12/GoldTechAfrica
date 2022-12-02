<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Demandeur;
use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{
    //
    public function store(Request $request){
            $demandeur = new Demandeur();
            $demandeur->nom = $request->nom;
            $demandeur->email = $request->email;
            $demandeur->tel = $request->tel;
            $demandeur->niveau = $request->niveau;
            $demandeur->save();
            Mail::to('papaibrahimasow@esp.sn')->send(new ContactMail($demandeur));
            dd('email sent successfully');
            return redirect('/');
    }
    public function sendmail(Request $request){
        // $demandeur = ['email' => $request->email,
        //              'name' => $request->nom
        //              'tel' => $request->tel,
        //              'niveau'=>$request->niveau
        // ];
        // Mail::to('papaibrahimasow@esp.sn')->send(new ContactMail($demandeur));

        // dd('email sent successfully');
    }
}
