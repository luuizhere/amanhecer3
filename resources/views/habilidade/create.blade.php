<form action="/habilidade" method="POST">
    @csrf
    <div>
        <input type="text" name="nome">
    </div>
    <div>
        <select name="nivel" id="nivel">
                <option value="">Selecione</option>
                @foreach($niveis as $nivel)
                    <option value="{{$nivel->id}}">{{$nivel->nome}}</option>
                @endforeach

        </select>
    </div>

    <button type="submit">Cadastrar</button>
</form>