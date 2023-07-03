<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raissa's Cosmetics | Compra</title>
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
            height: 100vh;
            background-image: linear-gradient(to top, #FC543F, #D96D36);
            font-family: var(--fonte-titulo);
            position: relative;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.308);
        }
        
        main{
            width: 1000px;
            height: 700px;
            background-color: white;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            border-radius: 40px;
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.267);
        }

        main img{
            height: 90%;
            padding: 35px;
            border-radius: 70px;
        }

        h1{
            margin-left: 15px;
            padding: 20px;
            margin-bottom: 20px;
            margin-top: 10px;
            font-size: 3em;
        }

        form{
            display: block;
            width: 42%;
            float: right;
            margin-top: 450px;
        }

        p{
            font-size: 2em;
            padding: 20px;
            padding-bottom: 10px;
            text-align: right;
        }

        input{
            padding: 10px;
            vertical-align: middle;
            border: 1px solid rgba(128, 128, 128, 0.425);
            border-radius: 10px;
            font-size: 16px;
            transition: background-color 0.5s;
        }

        input:hover{
            background-color:rgba(128, 128, 128, 0.425);
        }

        input:focus{
            outline: 1px solid rgba(128, 128, 128, 0.658);
            background-color:rgba(128, 128, 128, 0.425);
        }

        #botao{
            font-size: 20px;
            font-weight: bold;
            color: rgb(85, 85, 85);
            border: none;
            display: block;
            width: 300px;
            margin: auto;
            border-radius: 40px;
            transition: color 0.5s, background-color 0.5s;
        }

        #botao:hover{
            background-color: rgba(128, 128, 128, 0.678);
            color: white;
        }

        #botao:active{
            outline: 1px solid gray;
        }
    </style>
</head>
<body>
    <main>
        <img src="../imagens/perfume2.jpg" alt="Batom">
        <form action="compra.php" method="post">
            <p>
                <label for="iprod">Preço </label>
                <input type="text" name="prod" id="iprod" value="100">
            </p>
            <p>
                <label for="iqtd">Quantidade </label>
                <input type="number" name="qtd" id="iqtd" required size="14">
            </p>
            <p>
                <input type="submit" value="Comprar" id="botao">
            </p>
        </form>
    </main>
</body>
</html>