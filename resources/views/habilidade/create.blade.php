
@extends('layout.app')
@section('conteudo')

<h3>Nova Habilidade</h3>
<hr>

<form action="/habilidade" method="POST">
    @csrf
    <div class="form-row">
        <div class="col-md-12 mb-3">
            <label for="nome">Nome da Habilidade</label>
            <input type="text" name="nome" class="form-control form-control-sm">
        </div>
    </div>

    <button type="submit" class="btn btn-sm btn-success">Cadastrar</button>
</form>
@endsection