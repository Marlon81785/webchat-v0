<!Doctype HTML>
<HTML>
<HEADER>
    <link rel="stylesheet" type="text/css" href="ferias.css" media="screen" />
    <div id='teste'>

    <?php
    $datatime1 = new DateTime();
    $datatime2 = new DateTime('2019/08/10 15:00:00');

    $data1  = $datatime1->format('Y-m-d H:i:s');
    $data2  = $datatime2->format('Y-m-d H:i:s');

    $diff = $datatime1->diff($datatime2);
    $horas = $diff->h + ($diff->days * 24);
    $days = $horas/24;

    echo "Férias do MARLON\n";
    
    ?>
    <br>
    <?php
    echo $diff->format('%m mês, %d dias, %H horas, %i minutos e %s segundos<br><br><br><br><br><br>');
    echo "<meta HTTP-EQUIV='refresh' CONTENT='5;URL=vbanco.php'>";

    ?>



    </div>

</HEADER>
<BODY>
</BODY>
</HTML>



