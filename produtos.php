<?php
    session_start();
    require "connect.php";
    if (!empty($_SESSION["user_id"]))
    {
        $iduser = $_SESSION["user_id"];
        $result = mysqli_query($con,"SELECT * FROM registrar WHERE user_id = '$iduser'");
        $row = mysqli_fetch_assoc($result);
    }
    else
    {
        header("Location: login1.php");
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="produtos.css">
    <title>Produtos</title>
</head>
<body style="background-color: lightgreen;">
<?php
    require "connect.php";
    $sqle = "SELECT * FROM produtos;";
    $resultado = $con->query($sqle);
    ?>
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
    <div>
        <div>
            <h1><strong>Produtor</strong> </h1>
        </div>
        <div>
        <button type="button" class="jogo"> <a  href="addprodutos.php" target="" rel="noopener noreferrer" >Novo Produtor</a></button>
        <button type="button" class="jogo" onclick="window.location.reload();">Atualizar</button>
        </div>
    </div>
    <strong>
    <main>
    <table>
            <thead>
                <tr>
                    <td>Codigo Produtor</td>
                    <td>Nome</td>
                    <td>Preço</td>
                    <td>Quantidade</td>
                    <td>Descrição</td>
                    <td>Opções</td>
                </tr>
            </thead>
            <tbody>
            
                <?php
                
                if ($resultado->num_rows > 0) {
                    while ($registo = $resultado->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $registo["prod_id"] . "</td> <td>" . $registo["nome"] . "</td> <td>" . $registo["preco"] . "</td> <td>" . $registo["quantidade"] . "</td> <td>" . $registo["descricao"] . "</td>";
                        echo "<td><button class='btn btn-warning' class='button1'><a href='editarproduto.php?id=" . $registo["prod_id"] . "'><i class='bi bi-pencil-fill'></i>Editar</a></button> <button class='btn btn-success' class='button1'><a href='visualizarprod.php?id=" . $registo["prod_id"] . "'><i class='bi bi-eye-fill'></i>Visualizar</a> </button><button class='btn btn-danger' class='button1'><a href='apagarprod.php?id=" . $registo["prod_id"] . "'><i class='bi bi-trash3'></i>Apagar</a></button></td>";
                        echo "</tr>"; 
                    }
                }
                ?>
               
            </tbody>
        </table>
    </main>
    </strong>
</body>
</html>