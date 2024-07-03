<h1 >Novo Parasita</h1>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" class="form-control shadow p-3 mb-5 bg-white rounded">
    </div>
    <div class="mb-3">
        <label>Telefone</label>
        <input type="tel" name="telefone" class="form-control shadow p-3 mb-5 bg-white rounded">
    </div>
    <div class="mb-3">
        <label>E-mail</label>
        <input type="email" name="email" class="form-control shadow p-3 mb-5 bg-white rounded">
    </div>
    <div class="mb-3">
        <label>Streaming</label>
        <input type="text" name="streaming" class="form-control shadow p-3 mb-5 bg-white rounded">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary btn-lg btn-block" >Enviar</button>
    </div>
</form>