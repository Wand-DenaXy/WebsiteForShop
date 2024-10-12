        <!DOCTYPE html>
        <html lang="pt">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="add.css">
            <title>Document</title>
        </head>
        <body style="background-color: lightgreen;">
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
            <main>
                    <form action="addinserir.php" method="post">



                        <label for="nome">Nome</label>
                        <input type="text" name="nome" id="nome" placeholder="Digite o seu nome">
                    

                
                            <label for="endereco">endereço</label>
                            <input type="text" name="endereco" id="endereco" placeholder="Digite o seu endereço">
                

                
                        <label for="contacto">contacto</label>
                        <input type="text" name="contacto" id="contacto" placeholder="Digite o seu Contacto">
                    

                
                        <label for="email">email</label>
                        <input type="email" name="email" id="email" placeholder="Digite o seu email">
                
                
                        <input type="submit" value="Submeter o seu Produtor">
                
        
            </form>
        </main>
        </body>
        </html>