<?php
    $preco = $_POST["prod"];
    $qtd = $_POST["qtd"];

    $precototal = $preco * $qtd;

    $id = fopen("C:/xampp/htdocs/projeto-site/vendas/registro.txt", "a");
    fwrite($id, "Vendido $precototal reais;");

    include("../final.html");
?>