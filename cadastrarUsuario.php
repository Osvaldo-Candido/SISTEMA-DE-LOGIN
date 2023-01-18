<?php 
include 'Conexao.php';

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if(isset($dados))
{
    $usuario = [
        'nome' => trim($dados['nome']),
        'email' => trim($dados['email']),
        'passe' => trim($dados['passe']),
        'confirmar' => trim($dados['confirmar'])
    ];

    if(in_array("",$usuario))
    {
        $_SESSION['msg'] = "Preencha todos campos";
        header('Location:views/viewCadastro.php');
    }else{

        if(!(filter_var($dados['email'],FILTER_SANITIZE_EMAIL)))
        {
            $_SESSION['msg'] = "Campo email mal preenchido";
            header('Location:views/viewCadastro.php');
        }else{
            $passe = password_hash($dados['passe'],PASSWORD_DEFAULT);

            $query = "INSERT INTO login (id, nome, email, passe) VALUES (null, :nome, :email, :passe)";
            $prepare = $conexao->prepare($query);
            $prepare->bindValue(':nome',$dados['nome']);
            $prepare->bindValue(':email',$dados['email']);
            $prepare->bindValue(':passe',$passe);

            if($prepare->execute())
            {
                
                header('Location:views/home.php');
            }
        }


    }
}