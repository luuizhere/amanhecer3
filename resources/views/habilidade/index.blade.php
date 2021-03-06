
@extends('layout.app')
@section('conteudo')

<h3>Consulta de Habilidades</h3>
@if(count($habilidades) > 0)
    <div class="jumbotron">
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Nivel</th>
                <th scope="col">Ações</th>
            </tr>
            </thead>
            <tbody>
            @foreach($habilidades as $habilidade)
                <tr>
                    <th scope="row">{{$habilidade->id}}</th>
                    <td>{{$habilidade->nome}}</td>
                    <td>{{$habilidade->nivel_id}}</td>
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