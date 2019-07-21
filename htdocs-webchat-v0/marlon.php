<?php

    $servidor = 'sql313.epizy.com';
    $usuario = 'epiz_23505110';
    $senha = 'Skb4bwy30p'; 
    $banco = 'epiz_23505110_estoque';


    $con = mysqli_connect($servidor, $usuario, $senha, $banco);


    if(isset($_POST['username']) && isset($_POST['pass']))
    {
        $queryUser1 =  mysqli_query($con, "SELECT * FROM usuarios WHERE UsrEmail = '$_POST[username]' AND UsrSenha = '$_POST[pass]' LIMIT 1");
        if(mysqli_num_rows($queryUser1) != 0)
        {
            if($queryUser = mysqli_fetch_assoc($queryUser1))
            {
			    //echo $queryUser['UsrNome'].', você conseguiu completar todo o passo a passo do sistema de Login!<br>Parabéns!!!';
                header('Location: config/logado.php');
            }
            else
            {
                //header('Location: index.html');
            }
        }
        else
        {
            //*header('Location: index.html');
        }
        //header('Location: funcional.php');
    }






?>