<?php
    session_start();

    if($_POST["usu"] == 'davi' AND $_POST["sen"] == '123'){ 
        $_SESSION['Nome'] = $_POST["usu"];
        include('index.php');
        exit;
    }
  
    if($_POST["usu"] == 'raissa' AND $_POST["sen"] == '321'){ 
        $_SESSION['Nome'] = $_POST["usu"];
        include('index.php');
        exit;
    }

    include('principal.html');
?>