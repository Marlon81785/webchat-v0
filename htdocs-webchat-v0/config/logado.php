<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="../css/logado.css">

<head>
	<title>Chat bosta</title>
</head>
<body>
    <div id='background'>
        <form method='POST' action='logado.php' autocomplete="off">
            <input id="UsrM" placeholder='Digitar nome de usuario' type='text' name='UsrM' id='UsrM'>
            
            <div id="salvar">
                <button value='enviar' type='submit' id="butao">Salvar</button><br>
            </div>
            <br>
            <div id='partephp'>
            <?php
            session_start();
            echo("escolha seu nome de usuario    \n ");
            
            $usr;
            $_SESSION['usr'] = "";
            if(isset($_POST['UsrM'])){
                $usr = ($_POST['UsrM']);
                $_SESSION['usr'] = $usr;
                echo($usr);
                echo'<a href="funcional.php">   pagina do chat</a>';
                
            }else{
                echo("esperando digitar nome de usuario    ");
            }
            
            

            ?>            


            </div>
            
        </form>



    </div>
















</body>
</html>


