<?php
    switch ($_REQUEST["acao"]){
        case 'cadastrar':
            $nome = $_POST["nome"];
            $telefone = $_POST["telefone"];
            $email = $_POST["email"];
            $streaming = $_POST["streaming"];

            $sql = "INSERT INTO usuarios (nome, telefone, email, streaming)
            VALUES ('{$nome}', '{$telefone}', '{$email}', '{$streaming}')";

            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Cadastrado Com Sucesso');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<script>alert('Nao foi possivel cadastrar');</script>";
                print "<script>location.href='?page=listar';</script>";                
            }
            break;
        
        case 'editar':
            $nome = $_POST["nome"];
            $telefone = $_POST["telefone"];
            $email = $_POST["email"];
            $streaming = $_POST["streaming"];

            $sql = "UPDATE usuarios SET
                        nome='{$nome}',
                        telefone='{$telefone}',
                        email='{$email}',
                        streaming='{$streaming}'
                    WHERE
                        id=".$_REQUEST["id"];

            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Editado Com Sucesso');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<script>alert('Nao foi possivel editar');</script>";
                print "<script>location.href='?page=listar';</script>";                
            }


            break;
        
        case 'excluir':
            $sql = "DELETE FROM usuarios WHERE id=".$_REQUEST["id"];

            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Excluido Com Sucesso');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<script>alert('Nao foi possivel Excluir');</script>";
                print "<script>location.href='?page=listar';</script>";                
            }

            break;

    }