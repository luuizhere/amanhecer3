@extends('layout.app')
@section('conteudo')

<h3>Nova Resposta</h3>
<hr>

<form action="/resposta" method="POST">
    <div class="form-row">
        <div class="col-md-12 mb-3">
            @csrf
            <label for="titulo">Titulo</label>
            <input type="text" name="titulo" id="titulo" class="form-control form-control-sm" required>
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-12 mb-3">
            <label for="sigla">Sigla</label>
            <input type="text" name="sigla" id="sigla" class="form-control form-control-sm" required>
        </div>
    </div>

    <button type="submit" class="btn btn-sm btn-success">Cadastrar</button>
</form>
@endsection