
@extends('layout.app')
@section('conteudo')
<div id="app">
    <h4>Nova Consulta</h4>
    <br>
    <form action="/consulta" method="post">
        @csrf
        <div class="form-row">
          <div class="col-md-12 mb-3">
            <label for="paciente">Paciente</label>
              <select name="paciente_id" id="paciente_id" class="custom-select" required>
                  <option  value="">Selecione</option>
                  @foreach($pacientes as $paciente)
                      <option value="{{$paciente->id}}">{{$paciente->nome}}</option>
                  @endforeach
              </select>
          </div>
        </div>

        <div class="form-row">
          <div class="col-md-12 mb-3">
            <label for="habilidade">Habilidade</label>
            <select name="habilidade_id" class="custom-select" required>
              <option  value="">Selecione</option>
                @foreach($habilidades as $habilidade)
                  <option value="{{$habilidade->id}}">{{$habilidade->nome}}</option>
                @endforeach
            </select>
          </div>
        </div>

        <div class="form-row">
          <div class="col-md-12 mb-3">
            <label for="nivel">Nivel</label>
            <select  name="nivel_id" id="nivel" class="custom-select" required>
                <option value="">Selecione</option>
                @foreach($niveis as $nivel)
                    <option value="{{$nivel->id}}">{{$nivel->nome}}</option>
                @endforeach
            </select>
          </div>
        </div>
        
        <div class="form-row">
          <div class="col-md-12 mb-3">
            <label for="atividade">Atividade</label>
            <select name="atividade_id" id="atividade" class="custom-select" required>
                <option value="">Selecione</option>
            </select>
          </div>
        </div>
        <div class="form-row">
          <div class="col-md-12 mb-3">
            <label for="resposta">Resposta</label>
            <select name="resposta_id" id="resposta" class="custom-select" required>
                <option value="">Selecione</option>
                @foreach($respostas as $resposta)
                    <option value="{{$resposta->id}}">{{$resposta->sigla}}</option>
                @endforeach
            </select>
          </div>
        </div>
        <div class="form-row">
          <label for="data">Data Consulta</label>
          <div class="input-group date">
            <input type="date" name="data_consulta" id="data_consulta" value="{{date('Y-m-d')}}" class="custom-select" required >
          </div>
        </div>

        <input type="hidden" name="dr" id="dr" value="{{auth()->user()->id}}">
        
        <div class="form-row">
          <button class="btn btn-sm btn-success"> Cadastrar </button>
        </div>
    </form>

    {{ `resultado` }}
</div>

<script>
    
    
    
    
    $(document).ready(function(){
        
      $('#nivel').change(function () {
        var nivel = document.getElementById('nivel').value
        console.log(nivel)
        if($(this).val()){
          $.ajax({
            url: '/api/atividades/'+nivel,
            success: function(result){
              $("#atividade").html(result);
              console.log(result)
            }
          });
        }
      })



    });


</script>

@endsection