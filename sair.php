<?php 

session_start();

if(isset($_SESSION['nome'], $_SESSION['email']))
{
    unset($_SESSION['nome'], $_SESSION['email']);
    header('Location:index.php');
}