<form action="/nivel" method="post">
    @csrf
    <div>
        <input type="text" name="nome">
    </div>
    
    <div>
        <input type="text" name="regra_de">
    </div>
    <div>
        <input type="text" name="regra_ate">
    </div>

    <button type="submit">Cadastrar</button>
</form>