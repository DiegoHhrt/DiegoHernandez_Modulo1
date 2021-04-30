<?php

    $return="./tabla.html";
    $wrongS=0;
    $wrongM=0;


    $translation=(isset($_POST["translation"])&&$_POST["translation"]!="")?$_POST["translation"]:"Inválido";
    $text=(isset($_POST["text"])&&$_POST["text"]!="")?$_POST["text"]:"Inválido";

    echo "<form action=".$return.">";
        if($translation==="mToS")
        {

        }
        elseif($translation==="sToM")
        {
            

        }

    echo "<button type="."submit".">Regresar</button>";
    echo "</table>";
?>