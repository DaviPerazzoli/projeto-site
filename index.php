<?php
  if(! session_id()){ 
    include('principal.html');
    exit;
  }
  error_reporting(0);
  include('principal.php')
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raissa's Cosmetics | Home</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&display=swap');

      :root{
        --fonte-titulo: 'Dancing Script', cursive;
      }

      *{
        margin: 0px;
        padding: 0px;
      }

      body{
        font-family: Arial, Helvetica, sans-serif;
        color: white;
        background-image: linear-gradient(to top, #e7dbca, white);
        text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.200);
      }

      header{
        background-image: linear-gradient(to top, #FC543F, #D96D36);
        min-height: 250px;
        text-align: center;
        font-family: var(--fonte-titulo);
        font-size: 2.5em;
      }

      header p{
        padding-bottom: 20px;
      }

      header h1{
        font-size: 100px;
        padding: 30px 30px 10px 30px;
      }

      header h2{
        font-size: 24px;
        position: absolute;
        left: 10px;
        top: 10px;
      }

      header a{
        color: white;
        text-decoration: none;
        transition: text-shadow 0.3s;
      }

      header a:hover{
        text-shadow: 0px 0px 10px rgba(255, 255, 255, 0.788);
      }

      main{
        max-width: 1000px;
        margin:auto;
        background-color: white;
        padding-bottom: 50px;
      }

      main h1{
        font-size: 3em;
        color: black;
        font-family: var(--fonte-titulo);
        padding: 20px 20px 20px 40px;
      }

      section{
        font-family: var(--fonte-titulo);
        /*background-color: gray;*/
        color: black;
        padding: 20px 10px;
        margin-left: 30px;
        margin-right: 30px;
        border-top:1px solid #d96c3679;
        border-bottom:1px solid #d96c3679;
        text-align: center;
        margin-bottom: 50px;
      }

      section div{
        position: relative;
        width: 200px;
        padding: 10px;
        display: inline-block;
        text-align: left;
        color: black;
        text-decoration: none;
      }

      section h2{
        font-size: 2.5em;
        margin-bottom: 20px;
      }

      section div p{
        margin-top: 10px;
        font-size: 24px;
        display: inline-block;
      }

      section div:hover{
        background-color: #fc553f2a;
        color: #ff681c;
        transition: all 0.3s;
      }

      section div:hover p.preco{
        color: black;
      }

      .preco{
        font-size: 1em;
        position: absolute;
        right: 10px;
      }

      footer{
        text-align: center;
        padding: 10px;
        color: white;
        background-image: linear-gradient(to top, #FC543F, #D96D36);
      }

      footer a{
        color: white;
        text-decoration: none;
        font-weight: bold;
      }

      footer a:hover{
        text-decoration: underline;
      }
    </style>
</head>
<body>
    <header>
      <a href="principal.html">
        <h2>Sair para o Login</h2>
      </a>
      <h1>Raissa's Cosmetics</h1>
      <p>A beleza está em você.</p>
    </header>
    <body>
        <main>
          <h1>Nossos produtos</h1>
          
            <section id="batons">
              <h2>Batons</h2>
              <a href="vendas/batom1.php"><div><img src="imagens/batom1.jpg" alt="batom"> <p>Batom 1</p><p class="preco">R$ 30,00</p></div></a>
              <a href="vendas/batom2.php"><div><img src="imagens/batom2.jpg" alt="batom"><p>Batom 2</p><p class="preco">R$ 30,00</p></div></a>
              <a href="vendas/batom3.php"><div><img src="imagens/batom3.jpg" alt="batom"><p>Batom 3</p><p class="preco">R$ 30,00</p></div></a>
              <a href="vendas/batom4.php"><div><img src="imagens/batom4.jpg" alt="batom"><p>Batom 4</p><p class="preco">R$ 30,00</p></div></a>
            </section>

            <section>
              <h2>Perfumes e Maquiagem</h2>
              <a href="vendas/maquiagem.php"><div><img src="imagens/maquiagem.jpg" alt="maquiagem"><p>Maquiagem</p><p class="preco">R$ 100,00</p></div></a>
              <a href="vendas/perfume1.php"><div><img src="imagens/perfume1.jpg" alt="perfume"><p>Perfume 1</p><p class="preco">R$ 100,00</p></div></a>
              <a href="vendas/perfume2.php"><div><img src="imagens/perfume2.jpg" alt="perfume"><p>Perfume 2</p><p class="preco">R$ 100,00</p></div></a><br>
              <a href="vendas/perfume3.php"><div><img src="imagens/perfume3.jpg" alt="perfume"><p>Perfume 3</p><p class="preco">R$ 100,00</p></div></a>
              <a href="vendas/perfume4.php"><div><img src="imagens/perfume4.jpg" alt="perfume"><p>Perfume 4</p><p class="preco">R$ 100,00</p></div></a>
              <a href="vendas/perfume5.php"><div><img src="imagens/perfume5.jpg" alt="perfume"><p>Perfume 5</p><p class="preco">R$ 100,00</p></div></a>
            </section>
        </main>
        <footer><p>Feito por <a href="https://github.com/DaviPerazzoli" target="_blank">Davi Fernando Perazzoli</a></p></footer>
    </body>
</body>
</html>