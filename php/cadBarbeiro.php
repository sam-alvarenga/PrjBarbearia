<?php

    /*include = include o conteúdo de um arquivo dentro de outro  */
    include 'conexao.php'

    //if(())

    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $telefone = $_POST['telefone'];
    $aniversario = $_POST['aniversario'];
    $datainicio = $_POST['data'];
 
    $sql = ("INSERT INTO barbeiro (nome,senha,email,cpf,telefone,aniversario,datainicio
    VALUES ('$nome','$senha','$cpf','$telefone','$aniversario','$datainicio')");
    
    $result = mysqli_query($coon, $sql);

    $rows = mysqli_affected_rows($conn)

    if($rows > 0){
        echo"<script>alert('Barbeiro cadastrado');window.location.href='htpp://localhost/barbearia/cadastrar.php'</script>";


    }
    else{
        echo "ERRO AO CADASTRAR BARBEIRO,";
    }