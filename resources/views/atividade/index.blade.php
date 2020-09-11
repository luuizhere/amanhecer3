@extends('layout.app')
@section('conteudo')
@if(count($atividades) > 0)
<h3>Consulta de Atividades</h3>
    <div class="jumbotron">
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Habilidade</th>
                <th scope="col">Ações</th>
            </tr>
            </thead>
            <tbody>
            @foreach($atividades as $atividade)
                <tr>
                    <th scope="row">{{$atividade->id}}</th>
                    <td>{{$atividade->nome}}</td>
                    <td>{{$atividade->hab->nome}}</td>
                    <td><a href="" class="btn btn-sm btn-warning">Editar</a> <a href="" class="btn btn-sm btn-danger">Deletar</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@else
    Não existem registros para consulta
@endif
@endSection