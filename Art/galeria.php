<?php
    
    $nameObra=(isset($_POST["Obra"])&&$_POST["Obra"]!="")?$_POST["Obra"]:"Inválido";
    $nameAuthor=(isset($_POST["autor"])&&$_POST["autor"]!="")?$_POST["autor"]:"Sin autor";
    $creationYear=(isset($_POST["year"])&&$_POST["year"]!="")?$_POST["year"]:"Sin año";
    //$fullUpload=(isset($_FILES["arch"])&&$_POST["arch"]!="")?$_POST["arch"]:false;
    
    if((isset($_FILES["arch"])))
    {
        $fileName
        $ex=pathinfo();




    }
    else
    {
        echo "<h1>Archivo inválido...</h1>";
    }
?>