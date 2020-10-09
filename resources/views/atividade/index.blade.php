@extends('layout.app')
@section('conteudo')
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
@if(count($atividades) > 0)
<h3>Consulta de Atividades</h3>

    <div class="jumbotron">
        <table class="table table-striped" id="tabela">
            <thead>
                <tr>
                    <th style="vertical-align: middle;align-content: center">Filtros</th>
                    <th>Nível
                        <select name="" id="" class="custom-select" >
                            <option default>Selecione</option>
                            @foreach($niveis as $nivel)
                                <option value="{{$nivel->nome}}">{{$nivel->nome}}</option>
                            @endforeach    
                        </select>
                    </th>
                    <th>Habilidades
                        <select name="" id="" class="custom-select" >
                            <option default>Selecione</option>
                            @foreach($habilidades as $habilidade)
                                <option value="{{$habilidade->nome}}">{{$habilidade->nome}}</option>
                            @endforeach    
                        </select>
                    </th>
                </tr>   
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Nível</th>
                <th scope="col">Habilidade</th>
                <th scope="col">Ações</th>
            </tr>
            </thead>
            <tbody>
            @foreach($atividades as $atividade)
                <tr>
                    <td  scope="row">{{$atividade->nome}}</td>
                    <td>{{$atividade->nivel->nome}}</td>
                    <td>{{$atividade->hab->nome}}</td>
                    <td><a href="" class="btn btn-sm btn-warning">Editar</a> <a href="" class="btn btn-sm btn-danger">Deletar</a></td>
                </tr>
            @endforeach

            </tbody>
        </table>
        {{-- <div style="    margin-left: auto;
        margin-right: auto">
            {{ $atividades->links() }}
        </div>
         --}}
    </div>
@else
    Não existem registros para consulta
@endif


<script>
    $(function(){

    $("#tabela select").change(function(){       
        var index = $(this).parent().index();
        var nth = "#tabela td:nth-child("+(index+1).toString()+")";
        var valor = $(this).val().toUpperCase();
        $("#tabela tbody tr").show();
        $(nth).each(function(){
            if($(this).text().toUpperCase().indexOf(valor) < 0){
                $(this).parent().hide();
            }
        });
    });    
 
    $("#tabela select").blur(function(){
        $(this).val("");
    });
});
</script>
@endSection


