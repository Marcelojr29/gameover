<?php
    if(isset($_POST['submit']))
    {
        //print_r('Nome: ' . $_POST['nome']);
        //print_r('<br>');
        //print_r('Email: ' . $_POST['email']);
        //print_r('<br>');
        //print_r('Senha: ' . $_POST['senha']);
        //print_r('<br>');
        //print_r('Sexo: ' . $_POST['genero']);
        //print_r('<br>');
        //print_r('Data de Nascimento: ' . $_POST['dataNasc']);
        //print_r('<br>');
        //print_r('Telefone: ' . $_POST['telefone']);
        //print_r('<br>');
        //print_r('Endereço: ' . $_POST['endereco']);
        //print_r('<br>');
        //print_r('Estado: ' . $_POST['estado']);
        //print_r('<br>');
        //print_r('Cidade: ' . $_POST['cidade']);

        include_once('conexao.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $sexo = $_POST['genero'];
        $dataNasc = $_POST['dataNasc'];
        $telefone = $_POST['telefone'];
        $endereco = $_POST['endereco'];
        $estado = $_POST['estado'];
        $cidade = $_POST['cidade'];

$result = mysqli_query($conexao, "INSERT INTO usuarios (nome, email, senha, sexo, dataNasc, telefone, endereco, estado, cidade) 
VALUES ('$nome', '$email', '$senha', '$sexo', '$dataNasc', '$telefone', '$endereco', '$estado', '$cidade')");
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <title>Formulário</title>
</head>
<body>
    <div class="box">
        <form action="index.php" method="POST">
            <fieldset>
            <legend><b>Cadastro de Clientes</b></legend>  
            <br>
            <div class="inputbox">
                <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome</label>
            </div> 
            <br><br>
            <div class="inputbox">
                <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
            </div>  
            <br><br>
            <div class="inputbox">
                <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
            </div>
            <p>Sexo: </p>
            <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br>
            <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br>
            <input type="radio" id="outro" name="genero" value="outro" required>
                <label for="outro">Outro</label>
                <br><br>
                <label for="dataNasc"><b>Data de Nascimento</b></label>
                <input type="date" name="dataNasc" id="dataNasc" required>
            <br><br><br>
            <div class="inputbox">
                <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput"><b>Telefone</b></label>
            </div>
            <br><br>
            <div class="inputbox">
                <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput"><b>Endereço</b></label>
            </div>
            <br><br>
            <div class="inputbox">
                <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado" class="labelInput"><b>Estado</b></label>
            </div>
            <br><br>
            <div class="inputbox">
                <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="labelInput"><b>Cidade</b></label>
            </div>
            <br><br>
            <input type="submit" name="submit" id="submit">
            <br><br>
            </fieldset>
        </form>
    </div>
</body>
</html>