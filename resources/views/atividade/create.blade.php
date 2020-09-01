<form action="/atividade" method="post">
    @csrf
    <div>
        <input type="text" name="nome">
    </div>
    <div>
        <select name="habilidade" id="habilidade">
                <option value="">Selecione</option>
            @foreach($habilidades as $habilidade)
                <option value="{{$habilidade->id}}">{{$habilidade->nome}}</option>
            @endforeach
        </select>
    </div>
    <button type="submit">Cadastrar</button>
</form>