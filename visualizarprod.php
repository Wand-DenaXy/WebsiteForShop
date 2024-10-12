<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="editarprodutores.css">
</head>

<body>
<article>
        <header>
            <img class="logo" src="images (1)/frescos.png" alt="">
            <nav>
                <ul>
                    <li>
                        <i class="bi bi-shop"></i> <a class="nav-link"  href="index.html">Inicio</a>
                    </li>
                    <li>
                    <a href="login1.php" class="nav-link" >Login</a>
                </li>
                    <li>
                        <a href="contacto.html" class="nav-link" >Contacto</a>
                    </li>
                    <li>
                        <a href="produtos.php" class="nav-link" >Produtos</a>
                    </li>
                    <li class="linkt">
                        <a href="produtores.php" class="nav-link" >Produtores</a> <i class="bi bi-shop"></i>
                    </li>
                </ul> 
            </nav>
        </header>
        <div class="toldo">
            <img src="images (1)/toldo copiar.png" alt="">
            <img src="images (1)/toldo copiar.png" alt="">
        </div>
    </article>
    <?php
    require "connect.php";
    $idprod = (int)$_REQUEST["id"];
    $sql = "SELECT * from produtos where prod_id = '$idprod';";
    $resultado = $con->query($sql);
    if ($resultado->num_rows > 0)
   
     $registo = $resultado->fetch_assoc();
    ?>


    <main>
        <form action="produtos.php" method="post">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" disabled value="<?= $registo["nome"] ?>">
            <label for="preco">Preço</label>
            <input type="text" name="preco" id="preco" disabled value="<?= $registo["preco"] ?>">
            <label for="contacto">Quantidade</label>
            <input type="text" name="quantidade" id="quantidade" disabled  value="<?= $registo["quantidade"] ?>">
            <label for="descricao">Descrição</label>
            <input type="text" name="descricao" id="descricao"  disabled value="<?= $registo["descricao"] ?>">

            <input type="submit" value="Voltar" name="" id="">
        </form>
    </main>
</body>

</html>