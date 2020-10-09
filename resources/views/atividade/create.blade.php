@extends('layout.app')
@section('conteudo')

<h3>Nova Atividade</h3>
<hr>
<form action="/atividade" method="post">
    @csrf
    <div class="form-row">
        <div class="col-md-12 mb-3">
            <label for="nome">Nome</label>
            <input type="text" name="nome" class="form-control form-control-sm" required>
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-12 mb-3">
            <label for="nivel">Niveis</label>
            <select name="nivel" id="nivel" class="custom-select">
                    <option value="">Selecione</option>
                    @foreach($niveis as $nivel)
                        <option value="{{$nivel->id}}">{{$nivel->nome}}</option>
                    @endforeach

            </select>
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-12 mb-3">
            <label for="habilidade">Habilidade</label>
            <select name="habilidade" id="habilidade"  class="custom-select" required> 
                    <option value="">Selecione</option>
                @foreach($habilidades as $habilidade)
                    <option value="{{$habilidade->id}}">{{$habilidade->nome}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <button type="submit" class="btn btn-sm btn-success">Cadastrar</button>
</form>
@endsection