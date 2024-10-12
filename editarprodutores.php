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
    $idprod = (int)$_REQUEST["id"];
    $sql = "SELECT * from produtores where produtores_id = '$idprod';";
    $resultado = $con->query($sql);
    if ($resultado->num_rows > 0)
        $registo = $resultado->fetch_assoc();
    ?>

    <main>
        <form action="editarprodutores1.php" method="post">
            <input type="hidden" name="id" value="<?= $registo["produtores_id"] ?>">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" value="<?= $registo["nome"] ?>">
            <label for="endereco">Endereço</label>
            <input type="text" name="endereco" id="endereco" value="<?= $registo["endereco"] ?>">
            <label for="contacto">Contacto</label>
            <input type="text" name="contacto" id="contacto" value="<?= $registo["contacto"] ?>">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" value="<?= $registo["email"] ?>">

            <input type="submit" value="Submeter">
        </form>
    </main>
</body>

</html>
