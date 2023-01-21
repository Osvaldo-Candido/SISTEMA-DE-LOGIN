<?php
session_start();
if(isset( $_SESSION['nome'], $_SESSION['email']))
{
?>
<div class="card-visita">
<h1>SEJA BEM VINDO</h1>
<ul>
    <li>Nome: <?= $_SESSION['nome'] ?></li>
    <li>Email: <?= $_SESSION['email'] ?> </li>
    <li><a href="../sair.php">Sair</a></li>
</ul>
</div>

<?php } ?>