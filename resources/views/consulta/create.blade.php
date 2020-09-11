
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
              <select name="paciente" id="paciente" class="custom-select" required>
                  <option  value="">Selecione</option>
                  @foreach($pacientes as $paciente)
                      <option value="">{{$paciente->nome}}</option>
                  @endforeach
              </select>
          </div>
        </div>

        <div class="form-row">
          <div class="col-md-12 mb-3">
            <label for="nivel">Nivel</label>
            <select  name="nivel" id="nivel" class="custom-select" required>
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
            <select  name="habilidade" id="habilidade" class="custom-select" required>
            </select>
          </div>
        </div>

        <div class="form-row">
          <div class="col-md-12 mb-3">
            <label for="atividade">Atividade</label>
            <select name="atividade" id="atividade" class="custom-select" required>
                <option value="">Selecione</option>
            </select>
          </div>
        </div>
        <div class="form-row">
          <div class="col-md-12 mb-3">
            <label for="resposta">Resposta</label>
            <select name="resposta" id="resposta" class="custom-select" required>
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
            <input type="date" name="data" id="data" value="{{date('Y-m-d')}}" class="custom-select" required >
          </div>
        </div>

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
            url: '/api/habilidades/'+nivel,
            success: function(result){
              $("#habilidade").html(result);
              console.log(result)
            }
          });
        }
      })

      $('#habilidade').change(function () {
        var habilidade = document.getElementById('habilidade').value
        console.log( habilidade)
        if($(this).val()){
          $.ajax({
            url: '/api/atividades/'+habilidade,
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