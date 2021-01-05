<?php
    if(isset($_POST['login']) && !empty($_POST['login']) && isset($_POST['senha']) && !empty($_POST['senha'])){
        require("conexao.php");

        session_start();
        // RECEBENDO OS DADOS PREENCHIDOS DO FORMULÁRIO !
        $login      = $_POST['login'];          //atribuindo o campo "login" vindo do formulário para a variável $login
        $senha      = $_POST['senha'];          //atribuindo o campo "senha" vindo do formulário para a variável $senha     

        $sql = mysqli_query($conexao, "SELECT login, senha, funcao FROM usuarios WHERE login = '$login' AND senha = MD5('$senha')");

        if (mysqli_num_rows($sql) > 0){
            $_SESSION['login'] = $login;
            $_SESSION['senha'] = $senha;
            setcookie("login", $login);
            header('location: area_restrita.php');
        }

        else{
            unset($_SESSION['login']);
            unset($_SESSION['senha']);
            echo"<script language='javascript' type='text/javascript'>
            alert('Usuário não localizado');window.location.href='index.php';</script>";
        }
    }
?>