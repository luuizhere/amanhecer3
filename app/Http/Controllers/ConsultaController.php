<?php

namespace App\Http\Controllers;

use App\Nivel;
use App\Consulta;
use App\Habilidade;
use App\Paciente;
use App\Resposta;
use Illuminate\Http\Request;

class ConsultaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consultas = Consulta::limit(5)->where('user_id',auth()->user()->id)->get();
        return view('consulta.index',compact('consultas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $niveis = Nivel::all();
        $respostas = Resposta::all();
        $pacientes = Paciente::all();
        $habilidades = Habilidade::all();
        return view('consulta.create',compact('pacientes','niveis','respostas','habilidades'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $consulta = new Consulta();
        $consulta->data_consulta = $request->data_consulta;
        $consulta->paciente_id = $request->paciente_id;
        $consulta->atividade_id = $request->atividade_id;
        $consulta->resposta_id = $request->resposta_id;
        $consulta->habilidade_id = $request->habilidade_id;
        $consulta->nivel_id = $request->nivel_id;
        $consulta->user_id = $request->dr;
        $consulta->save();
        return redirect('/consulta');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function consultaByPaciente($paciente_id)
    {
        $consultas = Consulta::where('paciente_id',$paciente_id)->orderBy('data_consulta')->get();
        $paciente = Paciente::find($paciente_id);
        return view('consulta.consultabypaciente',compact('consultas','paciente'));
    }
}
