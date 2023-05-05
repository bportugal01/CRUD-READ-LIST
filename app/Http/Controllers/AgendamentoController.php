<?php

namespace App\Http\Controllers;

use App\Models\Agendamento;
use GuzzleHttp\Psr7\Query;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Contracts\Service\Attribute\Required;

class AgendamentoController extends Controller
{
    public function list()
    {
        $data = array(
            'list' => DB::table('agendamentos')->get()

        );
        return view('listar-agendamento', $data);
    }
    
    function add(Request $request)
    {
        $request->validate([
            'Nome' => 'required',
            'Telefone' => 'required',
            'Origem' => 'required',
            'DataContato' => 'required',
            'Observacao' => 'required',
        ]);
        $query = DB::table('agendamentos')->insert([
            'Nome' => $request->input('Nome'),
            'Telefone' => $request->input('Telefone'),
            'Origem' => $request->input('Origem'),
            'DataContato' => $request->input('DataContato'),
            'Observacao' => $request->input('Observacao'),
        ]);
        if ($query) {
            return back()->with('success', 'Dados inseridos com sucesso!');
        } else {
            return back()->with('fail', 'Algo deu errado!');
        }

       
    }
   
}
