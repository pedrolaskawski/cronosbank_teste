<?php

namespace App\Http\Controllers;
use App\Http\Controllers\SendMailController;

use Illuminate\Http\Request;

class OpportunityController extends Controller
{
    private $estados;
    
    public function __construct()
    {
        $this->estados = [
            'AC' => 'Acre', 'AL' => 'Alagoas', 'AP' => 'Amapá',
            'AM' => 'Amazonas', 'BA' => 'Bahia', 'CE' => 'Ceará',
            'DF' => 'Distrito Federal', 'ES' => 'Espírito Santo', 'GO' => 'Goiás',
            'MA' => 'Maranhão', 'MT' => 'Mato Grosso', 'MS' => 'Mato Grosso do Sul',
            'MG' => 'Minas Gerais', 'PA' => 'Pará', 'PB' => 'Paraíba',
            'PR' => 'Paraná', 'PE' => 'Pernambuco', 'PI' => 'Piauí',
            'RJ' => 'Rio de Janeiro', 'RN' => 'Rio Grande do Norte', 'RS' => 'Rio Grande do Sul',
            'RO' => 'Rondônia', 'RR' => 'Roraima', 'SC' => 'Santa Catarina',
            'SP' => 'São Paulo', 'SE' => 'Sergipe', 'TO' => 'Tocantins',
        ];
    }

    public function index()
    {
        $estados = $this->estados;
        return view('lead', compact('estados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function sendLead(Request $request)
    {
        $data = $request->all();

        //criada outra controller visando boas práticas, cada controller faz seu trabalho pré determinado
        $sendMailController = app()->make(SendMailController::class);

        return $sendMailController->callAction('index',[
            $data
        ]);
    }

   
}
