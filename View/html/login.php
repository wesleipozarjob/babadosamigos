        <!DOCTYPE html>
        <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            
        
            <link rel="stylesheet" href="../css/login.css">
            
            <title>Login</title>
                
        </head>
        <body>
            
            <main>  
                <section>
                <!-- Parte do formulário -->
                    <img src="../img/logo-baba.png" alt="" >
                    <br><br>
                    <div id="login">
                <h1>LOGIN</h1>
                <!-- ao submitar, a pagina irá verificar os dados no testeLogin -->
                <form action="../configuracao/testeLogin.php" method="POST">
                    <input type="text" name="email" placeholder="Email">
                    <br><br>
                    <input type="password" name="senha" placeholder="Senha">
                    <br><br>
                    <input type="submit" name="submit" value="Enviar" class="butao">
                    <br>   
        </form>
            </div>
        </body>
        <script>
            //erro
        alert("erro: senha ou email incorreto")
        </script>

        </html>
                </section>
                
            </main>
        </body>

        </html>