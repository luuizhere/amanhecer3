@extends('layout.app')
@section('conteudo')

<h3>Novo Paciente</h3>
<hr>
<form action="/paciente" method="post">
    @csrf
    <div class="form-row">
        <div class="col-md-12 mb-3">
            <label for="nome">Nome</label>
            <input type="text" name="nome" class="form-control form-control-sm" required>
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-12 mb-3">
            <label for="nascimento">Nascimento</label>
            <input type="date" name="nascimento" value="{{date('Y-m-d')}}" class="custom-select" required >
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-12 mb-3">
            <label for="nivel">Nível</label>
            <select name="nivel" id="nivel" class="custom-select" required>
                <option value="">Selecione</option>
                @foreach($niveis as $nivel)
                    <option value="{{$nivel->id}}">{{$nivel->nome}}</option>
                @endforeach
            </select>
        </div>
    </div>

    <button type="submit" class="btn btn-sm btn-success">Cadastrar</button>
</form>
@endsection