<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="login1.css">
    <title>Login</title>
</head>
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
                    <li class="nigga">
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
<body>
    <div class="wrapper">
        <form action="login1.php" method="post">
            <h1>Login</h1>
            <div class="input-box">
                <input type="email" name="Email" id="Email" placeholder="Email" required>
            </div>
            <div class="input-box">
                <input type="password" name="password" id="password" placeholder="Password" required>
               <box-icon type='solid' name='lock-alt' class="iconPass"></box-icon>  
            </div>
            <div class="conta-eliminar">
                <a href="eliminar.php">Sair conta?</a>
                <a class="back" href="index.html">Voltar</a>
            </div>
            <button type="submit" class="btn" name="submit" value="Login">Login</button>
            <div class="register-link">
                <p>Não tem conta? <a href="registrar.php">Registrar</a></p>
            </div>
        </form>
        <?php
            if (isset($_POST["submit"])) {
                $email = $_POST["Email"];
                $password = $_POST["password"];
                include ("connect.php");
                $result = mysqli_query($con,"SELECT * FROM registrar WHERE email = '$email' AND password = '$password'");
                $row = mysqli_fetch_assoc($result);
                if (mysqli_num_rows($result) > 0)
                {
                    $_SESSION["user_id"] = $row["user_id"];
                    header("Location: index.html");
                }
                else
                    echo "<div class='erro'>Palavra-chave invalida ou email invalida</div>";
            }
        ?>
    </div>
</body>
</html>
