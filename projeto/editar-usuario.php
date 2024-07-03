<h1>Editar Parasita</h1>
<?php 
    $sql = "SELECT * FROM usuarios WHERE id=".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();

?>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id; ?>">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" value="<?php print $row->nome; ?>" class="form-control shadow p-3 mb-5 bg-white rounded">
    </div>
    <div class="mb-3">
        <label>Telefone</label>
        <input type="tel" name="telefone"  value="<?php print $row->telefone; ?>" class="form-control shadow p-3 mb-5 bg-white rounded">
    </div>
    <div class="mb-3">
        <label>E-mail</label>
        <input type="email" name="email"  value="<?php print $row->email; ?>" class="form-control shadow p-3 mb-5 bg-white rounded">
    </div>
    <div class="mb-3">
        <label>Streaming</label>
        <input type="text" name="streaming"  value="<?php print $row->streaming; ?>" class="form-control shadow p-3 mb-5 bg-white rounded">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary btn-lg btn-block">Enviar</button>
    </div>
</form>