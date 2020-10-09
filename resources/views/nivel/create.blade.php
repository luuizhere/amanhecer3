
@extends('layout.app')
@section('conteudo')

<h3>Novo Nível</h3>
<hr>
    <form action="/nivel" method="post">
        @csrf
        <div class="form-row">
            <div class="col-md-12 mb-3">
                <label for="nome">Nome</label>
                <input type="text" name="nome"  class="form-control form-control-sm" required>
            </div>
        </div>
        
        <div class="form-row">
            <div class="col-md-12 mb-3">
                <label for="de">De</label>
                <input type="text" name="regra_de"  class="form-control form-control-sm" required>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-12 mb-3">
                <label for="ate">Até</label>
                <input type="text" name="regra_ate"  class="form-control form-control-sm" required>
            </div>
        </div>

        <button type="submit" class="btn btn-sm btn-success">Cadastrar</button>
    </form>
@endsection