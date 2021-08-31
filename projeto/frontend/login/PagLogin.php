<!DOCTYPE html>

<head>
  <title>Aunos e tutores</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="LoginStyle.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>



    <img src="logo.jpg" alt="Imagem_Logo" width="500" height="600">

    <div class="center">
       
        <form method="POST" action="..\..\backend\login\login.php">
            
            <h1><b>Alunos e tutores</b> </h1>
            <br>
            <?php
             session_start();
            if(isset($_SESSION['loginError']))
            {   
                echo $_SESSION['loginError'];
               
                session_destroy();
            }
            ?>
            <br>
            Login
            <input type="text" name="login" id="login"  />
            <br><br>

            Senha
            <input type="password" name="senha" id="senha">
            <br><br>
            <input type="checkbox" name="lembraSenha"> Lembrar minha senha
            <br><br>

            <input type="submit" value="Logar" class="btn-primary" />

            <input type="button" value="Novo usuário? Cadastre-se!" class="btn-default">
            <br><br>
            <a href="url">Esqueceu sua senha?</a>
    </div>


   



<body>
    <script>
        function resizeHeight() {
            var height = window.innerHeight * 0.8;
            console.log(height);
            var sections = document.getElementsByTagName("sections");
            var i;
            for (i = 0; i < sections.length; i++) {
                sections[i].style.height = height;
                console.log("indice: " + i);
            }
        }
        window.addEventListener("resize", resizeHeight);
    </script>

</body>