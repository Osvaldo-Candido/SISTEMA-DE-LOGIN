<?php 
session_start();

include 'conexao.php';

$dados = filter_input_array(INPUT_POST,FILTER_DEFAULT);

if(isset($dados))
{
    $login = [
        'email' => trim($dados['email']),
        'passe' => trim($dados['passe'])
    ];

    if(in_array("",$login))
    {
        $_SESSION['msg'] = 'Preencha todos os campos';
        header('Location:index.php');
    }else{
        $query = "SELECT * FROM login WHERE email = :email LIMIT 1";
        $prepare = $conexao->prepare($query);
        $prepare->bindValue(':email', $login['email']);
        $prepare->execute();
        $usuario = $prepare->fetch(PDO::FETCH_ASSOC);
            if($usuario)
            {
               
                if(password_verify($login['passe'],$usuario['passe']))
                {
                    $_SESSION['nome'] = $usuario['nome']; 
                    $_SESSION['email'] = $usuario['email']; 
                    header('Location:views\home.php');
          
                }else{
                    $_SESSION['msg'] = 'Palavra-passe errado'; 
                    
                    header('Location:index.php');
                }
            }else{
                $_SESSION['msg'] = 'Email errado';
                header('Location:index.php');
            }
    }
}