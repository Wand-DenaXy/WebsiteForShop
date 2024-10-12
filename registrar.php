<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="login1.css">
    <title>Register</title>
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
<body>
    <div class="wrapper">
        <form action="" method="post">
            <h1>Registe-se</h1>
            <div class="input-box">
                <input type="text" name="username" id="username" placeholder="Username" required>
            </div>
            <div class="input-box">
                <input type="text" name="Email" id="Email" placeholder="Email" required>
            </div>
            <div class="input-box">
                <input type="password" name="pass" id="pass" placeholder="Password" required>
            </div>
            <div class="input-box">
                <input type="password" name="confirmPassword" id="confirmPassword" placeholder="Repetir a Password" required>
           </div>
            <div class="conta-eliminar">
                <a class="back" href="login1.php">Voltar</a>
            </div>
            <button type="submit" name="submit" class="btn">Registrar</button>
            <?php
    require "connect.php";
    if(isset($_POST["submit"]))
    {
        $username=$_POST["username"];
        $email=$_POST["Email"];
        $pass=$_POST["pass"];
        $confirmPassword=$_POST["confirmPassword"];
        
        $erros = array();
        if (!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            array_push($erros,"O Email não é valido");
        }
        if (strlen($pass)<8)
        {
            array_push($erros,"Sua palavra pass deve conter mais do 8 caracteres");
        }
        if ($pass !== $confirmPassword)
        {
            array_push($erros,"As palavras pass nao condizem");
        }
        $sqlb = mysqli_query($con,"SELECT * FROM registrar WHERE username = '$username'");
        if (mysqli_num_rows($sqlb) != 0)
        {
            array_push($erros,"Ja existe um username");
        }
        $sql = mysqli_query($con,"SELECT * FROM registrar WHERE email = '$email'");
        if (mysqli_num_rows($sql) != 0)
        {
            array_push($erros,"Ja existe um email");
        }
        if (count($erros)>0)
        {
            foreach($erros as $error)
            {
                echo "<div class='erro'>$error</div>";
            }
        }
        else
        {     
                $sqli = "INSERT INTO registrar VALUES (NULL, '$username', '$email', '$pass');";
                 if ($con->query($sqli)===true)
                    echo "<div class='sucesso'>Registo feito com sucesso!</div>";
                 else
                     echo "<div class='erro'>Registo feito com sucesso!</div>";;
                
        }
    }
    ?>
        </form>
    </div>
</body>
</html>
