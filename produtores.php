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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="produtos.css">
    <title>Document</title>
</head>
<body style="background-color: lightgreen;">
<?php
    require "connect.php";
    $sqle = "SELECT * FROM produtores;";
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
                        <a href="contacto.html" class="nav-link" >Contacto</a>
                    </li>
                    <li>
                    <a href="login1.php" class="nav-link" >Login</a>
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
            <h1><strong>Produtores</strong> </h1>
        </div>
        <div>
        <button type="button" class="jogo"> <a  href="add.php" target="" rel="noopener noreferrer" >Novo Produtor</a></button>
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
                    <td >Endereco</td>
                    <td >Contacto</td>
                    <td >Email</td>
                    <td >Opções</td>
                </tr>
            </thead>
            <strong>
           
            <tbody>      
                <?php
                
                if ($resultado->num_rows > 0) {
                    while ($registo = $resultado->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $registo["produtores_id"] . "</td> <td>" . $registo["nome"] . "</td> <td>" . $registo["endereco"] . "</td> <td>" . $registo["contacto"] . "</td> <td>" . $registo["email"] . "</td>";
                        echo "<td> <button class='btn btn-warning' class='button1'><a href='editarprodutores.php?id=" . $registo["produtores_id"] . "'><i class='bi bi-pencil-fill'></i>Editar</a></button> <button class='btn btn-success' class='button1'><a href='visualizar.php?id=" . $registo["produtores_id"] . "'><i class='bi bi-eye-fill'></i>Visualizar</a> </button><button class='btn btn-danger' class='button1'><a href='apagar.php?id=" . $registo["produtores_id"] . "'><i class='bi bi-trash3'></i>Apagar</a></button></td>";
                        echo "</tr>"; 
                    }
                }
                ?>
            </tbody>
            </strong>
        </table>
    </main>
    </strong>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>