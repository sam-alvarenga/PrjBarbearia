<?php     
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $telefone = $_POST['telefone'];
    $aniversario = $_POST['aniversario'];
    $datainicio = $_POST['data'];

     
    $sql = ("INSERT into empresa(nome_adm,senha,email,cpf,telefone,aniversario,datainicio)
    values ('$nome','$senha','$cpf','$telefone','$aniversario','$datainicio')");
    
    $result = mysqli_query($coon, $sql);
    $result = mysqli_affected_rows($conn);

    if($rows > 0){
        echo "<script>alert('Administrador cadastrado');window.location.href='htpp://localhost/barbearia/cadastrar.php'</script>"
    }else{
        echo 'ERRO AO AGENDAR'
    }