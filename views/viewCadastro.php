<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="container-cad">
    <h2>Fazer Cadastro</h2>
    <form class="form-cadastro" action="../cadastrarUsuario.php" method="post">
    <?php if(isset($_SESSION['msg'])){
         echo $_SESSION['msg']; 
         unset($_SESSION['msg']);
     } ?>

  
        
     <div class="full-box">
        <label class="inp-lb" for="">Nome: </label>
        <input class="inp-c" type="nome" name="nome" placeholder="Insira o seu nome" value="">
     </div>
    
     <div class="full-box">
        <label class="inp-lb" for="">Email: </label>
        <input class="inp-c" type="email" name="email" placeholder="Insira o seu email" value="">
     </div>

     <div class="full-box">
        <label class="inp-lb" for="">Palavra-passe: </label>
        <input class="inp-c" type="password" name="passe" placeholder="Insira a sua palavra passe">
     </div>

     <div class="full-box">
     <label class="inp-lb" for="">Confirmar Palavra-passe: </label>
        <input class="inp-c" type="password" name="confirmar" placeholder="Confirma palavra passe">
     </div>
     <div class="full-box">
     <input class="inp-c" type="submit" value="Cadastrar">
     </div> 
     <div class="full-box link-login">
    <label for=""><a href="../index.php">Já tenho uma conta?</a></label>
     </div>
    </form> 
    </div>
 

</body>
</html>

