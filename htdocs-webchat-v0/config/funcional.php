<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="../css/funcional.css">
	<title>Chat bosta</title>
</head>
<body>
    <div id='background'>
        <form method='POST' action='funcional.php' autocomplete="off">
            <input id="Usrf" placeholder='Digitar mensagem' type='text' name='Usrf' id='Usrf'>
            
            <div id="salvar">
                <button value='enviar' type='submit' id="butao">Salvar</button><br>
            </div>
            <br>
            

            <div id='blocophp'>
            <?php
            session_start();
            $msn = $_SESSION['usr'];//msn é a variavel usr(nome do usuario) com outro nome
            echo($msn);
            
            //echo $_SESSION['usr'];
            /*if(isset($_POST['Usrf'])){   gravar variavel na sesssao de ambiente para usar em outra pagina
                $msn = ($_POST['Usrf']);
                echo'<br>';
                echo($msn);
            */
                
            $servidor = 'sql313.epizy.com';
            $usuario = 'epiz_23505110';
            $senha = 'Skb4bwy30p'; 
            $banco = 'epiz_23505110_estoque';

            $mysqli = mysqli_connect($servidor, $usuario, $senha, $banco);


            header("Content-type: text/html; charset=utf-8");
            if(isset($_POST['Usrf'])){
                
                require('conBanco.php');
                    
                    if($valida = mysqli_query($mysqli, "INSERT INTO mensage (NomeUsuario, Usrf) VALUES ('$_SESSION[usr]', '$_POST[Usrf]')")){
                        header('Location: funcional.php');
                    }else{
                        echo "Não foi possivel gravar a mensagem...<br><a href='../index.html>Index</a>'";      
                    }
            
            }else{
                echo("");// vazio
            }
            
            // tela do chat

          /*echo("fffffffff");//teste
            mysqli_select_db($mysqli, "mensage");
            $query = ("SELECT * FROM mensage");
            $insertQuery = mysqli_query($mysqli, $query);
            echo"<table>\n";
	        while($line = mysqli_fetch_array($insertQuery,MYSQLI_ASSOC)){
		        echo "\t<tr>\n";
		        foreach($insertQuery as $col_value){
			        $str = implode("\n", $col_value);
			        echo "\t\t<td>$str</td>\n";
			        //echo ($str);
			
			
                }
                echo "\t</tr>\n";
            }
            echo "</table>\n";

            */

            //nova opção de configuração do array
             
            ?>
            

            <?php
            mysqli_select_db($mysqli, "mensage");
            $query = ("SELECT * FROM mensage");
            $insertQuery = mysqli_query($mysqli, $query);
            //while($line = mysqli_fetch_array($insertQuery,MYSQLI_ASSOC)){




            ?>

            <table id=tabela>
                <tr>
                    <td>usuario</td>
                    <td>conteudo</td>
                </tr>
                <?php
                while($line = mysqli_fetch_array($insertQuery,MYSQLI_ASSOC)){  ?>
                
                <tr>
                    <td><?php echo $line["NomeUsuario"]; ?></td>
                    <td><?php echo $line["Usrf"]; ?></td>
                </tr>
                <?php } ?>
            </table>

            
            </div>
            <br>


            
            
        </form>



    </div>
















</body>
</html>


