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
                        <i class="bi bi-shop"></i> <a class="nav-link" href="index.html">Inicio</a>
                    </li>
                    <li>
                        <a href="contacto.html" class="nav-link">Contacto</a>
                    </li>
                    <li>
                        <a href="produtos.php" class="nav-link">Produtos</a>
                    </li>
                    <li class="linkt">
                        <a href="produtores.php" class="nav-link">Produtores</a> <i class="bi bi-shop"></i>
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
   
        $codprod = (int)$_REQUEST["id"];
        $nome = $_REQUEST["nome"];
        $endereco = $_REQUEST["endereco"];
        $contacto = $_REQUEST["contacto"];
        $email = $_REQUEST["email"];
        
        $sql = "UPDATE produtores SET nome = '$nome', endereco = '$endereco', contacto = '$contacto', email = '$email' WHERE produtores_id = '$codprod'";
        if ($con->query($sql) === TRUE) {
            header("Location: produtores.php");
            echo "Informações do produtor alteradas com sucesso";
        } else {
            echo "Erro ao alterar o registro: " . $con->error;
        }
    ?>

</body>

</html>