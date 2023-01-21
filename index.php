<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
  
 <body>
 
      <form class="form-login" action="login.php" method="post">
        <div class="img-usuario">
          <img src="img/contacts.svg" alt="">
        </div>
        <div class="texto-login">
          <h2>Login</h2>
          <h4>  <?php if(isset($_SESSION['msg'])){
              echo $_SESSION['msg']; 
              unset($_SESSION['msg']);
              } ?></h4>
 
        </div>
        <div class="inf-login">

        </div>
   
        <div class="full-box">
          <label class="lab" for="email">Email:</label>
          <input class="inp-l" type="text" name="email" placeholder="Insira o seu email" value="">
        </div>
        <div class="full-box">
          <label class="lab" for="senha">Palavra-passe:</label>
          <input class="inp-l" type="password" name="passe" placeholder="Insira a sua palavra passe" value="">
        </div>
        
        <div class="full-box">
          <input class="inp-l" type="submit" value="Fazer login">
        </div>
        <div class="full-box link-redes">
          <h4>Entrar com</h4>
          <ul>
            <li><img src="img/facebook.svg" alt=""></li>
            <li><img src="img/linkedin.svg" alt=""></li>
            <li><img src="img/google.svg" alt=""></li>
          </ul>
        </div
        <div class="full-box link-cadastro" >
        <div class="cadastro">Já tem uma conta?</div>
        <div class="cadastro"><a href="views/viewCadastro.php">Criar conta</a> </div>
        </div>
      </form>    

</body>
</html>