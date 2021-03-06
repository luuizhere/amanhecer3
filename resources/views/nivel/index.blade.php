@extends('layout.app')
@section('conteudo')

<h3>Consulta de Níveis</h3>
@if(count($niveis) > 0)
    <div class="jumbotron">
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">De</th>
                <th scope="col">Até</th>
                <th scope="col">Ações</th>
            </tr>
            </thead>
            <tbody>
            @foreach($niveis as $nivel)
                <tr>
                    {{-- @dump($nivel) --}}
                    <th scope="row">{{$nivel->id}}</th>
                    <td>{{$nivel->nome}}</td>
                    <td>{{$nivel->regra_de}} anos</td>
                    <td>{{$nivel->regra_ate}} anos</td>
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