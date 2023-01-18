<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <form action="../cadastrarUsuario.php" method="post">
    <?php if(isset($_SESSION['msg'])){
         echo $_SESSION['msg']; 
         unset($_SESSION['msg']);
     } ?>
        <label for="">Nome: </label>
        <input type="nome" name="nome" value="">
        <label for="">Email: </label>
        <input type="email" name="email" value="">
        <label for="">Palavra-passe: </label>
        <input type="password" name="passe">
        <label for="">Confirmar Palavra-passe: </label>
        <input type="password" name="confirmar">
        <input type="submit" value="Cadastrar">
    </form>
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>

