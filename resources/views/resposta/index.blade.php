@extends('layout.app')
@section('conteudo')

<h3>Consulta de Respostas</h3>
@if(count($respostas) > 0)
    <div class="jumbotron">
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Titulo</th>
                <th scope="col">Sigla</th>
            </tr>
            </thead>
            <tbody>
            @foreach($respostas as $resposta)
                <tr>
                    {{-- @dump($resposta) --}}
                    <th scope="row">{{$resposta->id}}</th>
                    <td>{{$resposta->titulo}}</td>
                    <td>{{$resposta->sigla}}</td>
                    <td><a href="" class="btn btn-sm btn-warning">Editar</a> <a href="" class="btn btn-sm btn-danger">Deletar</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@else
    Não existem registros para consulta
@endif
@endsection