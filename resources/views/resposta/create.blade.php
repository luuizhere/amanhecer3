<form action="/resposta" method="POST">
    <div>
        @csrf
        <input type="text" name="titulo" id="titulo">
    </div>
    <div>
        <input type="text" name="sigla" id="sigla">
    </div>

    <button type="submit">Cadastrar</button>
</form>