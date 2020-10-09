@extends('layout.app')
@section('conteudo')

<h3>Consulta de Pacientes</h3>
@if(count($pacientes) > 0)
    <div class="jumbotron">
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Nivel</th>
                <th scope="col">Idade</th>
                <th scope="col">Ações</th>
            </tr>
            </thead>
            <tbody>
            @foreach($pacientes as $paciente)
                <tr>
                    @php
                        $data = date('Y-m-d');
                        $to = \Carbon\Carbon::createFromFormat('Y-m-d', $data);
                        $diff_in_days = $to->diffInYears($paciente->nascimento);
                    @endphp
                    {{-- @dump($paciente) --}}
                    <th scope="row">{{$paciente->id}}</th>
                    <td>{{$paciente->nome}}</td>
                    <td>{{$paciente->nivel_id}}</td>
                    <td>{{$diff_in_days}}</td>
                    <td><a href="/consultas/{{$paciente->id}}" class="btn btn-sm btn-primary">Consultas</a> <a href="" class="btn btn-sm btn-warning">Editar</a> <a href="" class="btn btn-sm btn-danger">Deletar</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@else
    Não existem registros para consulta
@endif
@endsection