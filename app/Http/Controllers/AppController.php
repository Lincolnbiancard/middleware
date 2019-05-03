<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function terms(){
        return view('terms');
    }

    public function termsAccept(){
        $usuarioLogado = \Auth::user();

        if(!is_null(\Request::get('acceptterms'))){
            $usuarioLogado->terms = true;
            $usuarioLogado->save();
            return redirect()->home();    
        }
        return redirect()->back()->with('error', 'Favor aceitar os termos de uso!');
    }

}


