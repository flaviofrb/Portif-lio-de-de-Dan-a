<?php

namespace App\Http\Controllers;

use App\SiteFormulario;
use Illuminate\Http\Request;
use App\Mail\SiteBboyIron;
use Illuminate\Support\Facades\Mail;

class FormController extends Controller
{

    public function processarFormulario(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'telefone' => 'required',
            'email' => 'required',
            'mensagem' => 'required',
        ]);

        // Criação do registro no banco de dados
        SiteFormulario::create($request->all());

        // Envio para o email
        Mail::to('flavio.frb.ap@gmail.com')->send(new SiteBboyIron($request->all()));

        // Redirecionamento após o processamento do formulário
        return redirect('/#Contato');
    }
}
