
@extends('layout.app')
@section('conteudo')
    <div class="row">
        <h3>Consultas</h3>
    </div>
    @if(count($consultas) > 0)
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
            @foreach($consultas as $consulta)
                <tr>
                    <th scope="row">{{$consulta->id}}</th>
                    <td>{{$consulta->nome}}</td>
                    <td>{{$consulta->nivel_id}}</td>
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