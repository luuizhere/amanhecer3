
@extends('layout.app')
@section('conteudo')
    <div class="row">
    <h3>Consultas de {{$paciente->nome}}</h3>
    </div>
    @if(count($consultas) > 0)
    <div class="jumbotron">
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Paciente</th>
                <th scope="col">Habilidade</th>
                <th scope="col">Atividade</th>
                <th scope="col">Resposta</th>
                <th scope="col">Data</th>
                <th scope="col">Dr(a)</th>
                <th scope="col">Ações</th>
            </tr>
            </thead>
            <tbody>
            @foreach($consultas as $consulta)
                <tr>
                    <th scope="row">{{$consulta->id}}</th>
                    <td>{{$consulta->paciente->nome}}</td>
                    <td>{{$consulta->habilidade->nome}} ({{$consulta->nivel->nome}})</td>
                    <td>{{$consulta->atividade->nome}}</td>
                    <td>{{$consulta->resposta->sigla}}</td>
                    <td>{{$consulta->data_consulta}}</td>
                    <td>{{$consulta->dr->name}}</td>
                    <td><a href="" class="btn btn-sm btn-warning">Editar</a> <a href="" class="btn btn-sm btn-danger">Deletar</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@else
    Não existem registros para consulta
@endif
<div class="row">
    <br>
    
</div>
@endsection