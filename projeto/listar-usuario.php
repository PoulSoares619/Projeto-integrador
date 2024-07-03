<h1>Lista De Parasitas</h1>
<?php
    $sql = "SELECT * FROM usuarios";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if($qtd > 0){
        print"<table class='table table-hover table-striped table-bordered'>";
            print "<tr>";
            print "<th>ID</th>";
            print "<th>Nome</th>";
            print "<th>Telefone</th>";
            print "<th>E-mail</th>";
            print "<th>Streaming</th>";
            print "<th>Editar</th>";
            print "</tr>";

        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->id."</td>";
            print "<td>".$row->nome."</td>";
            print "<td>".$row->telefone."</td>";
            print "<td>".$row->email."</td>";
            print "<td>".$row->streaming."</td>";
            print "<td>
                        <button onclick=\"location.href='?page=editar&id=".$row->id."';\" class ='btn-success btn-block'>Editar</button>
                        <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){
                        location.href='?page=salvar&acao=excluir&id=".$row->id."';
                        }else{false;}\" class ='btn-danger btn-block'>Excluir</button>
                   </td>";
            print "</tr>";
        }
    }else{
        print "<p class='alert alert-danger'>Não Encontrou Resultados!</p>";
    }

?>