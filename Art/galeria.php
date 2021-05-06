<?php
    
    $nameObra=(isset($_POST["Obra"])&&$_POST["Obra"]!="")?$_POST["Obra"]:"Inválido";
    $nameAuthor=(isset($_POST["autor"])&&$_POST["autor"]!="")?$_POST["autor"]:"Sin autor";
    $creationYear=(isset($_POST["year"])&&$_POST["year"]!="")?$_POST["year"]:"Sin año";
    $fullUpload=(isset($_FILES["arch"])&&$_FILES["arch"]!="")?$_FILES["arch"]:false;
    
    $files=[];
    $checkForGalery=[];
    $ext="";
    $path="./statics";
    $theresFile=true;
    
    $exists=0;

    $empty=1;

    if($fullUpload)
    {
        $empty=0;
    }

    $folder=opendir($path);
    while($theresFile)
    {
        $file=readdir($folder);
        if($file!==false)
        {
            if($file!="."&&$file!="..")
            {    
                array_push($files, $file);
                //$exists=1;
            }
        }
        else
        {
            $theresFile=false;
        }
    }
    closedir($folder);

    if($empty==0)
    {
        $uploadedFile=$_FILES["arch"]["name"];
        $ext=pathinfo($uploadedFile, PATHINFO_EXTENSION);
        if($ext=="jpg"||$ext=="png"||$ext=="jpeg")
        {
            $tmpLocation=$_FILES["arch"]["tmp_name"];
            rename($tmpLocation, "./statics/".$nameObra.$nameAuthor.$creationYear.".".$ext);
            echo"<h1>Tus archivos se han subido correctamente</h1>";
            echo"
            <br><br>
            <form action='./upload.html' method='POST'>
                <button type='submit'>Registrar otra obra</button>
            </form>";
            echo"
            <form action='./galeria.php' method='POST'>
                <button type='submit'>Ver galería</button>
            </form>";   
        }
        else
        {
            echo "<h1>Archivo inválido...</h1>";

            echo"
            <br><br>
            <form action='./upload.html' method='POST'>
                <button type='submit'>Regresar al registro</button>
            </form>";
    
        }
    }
    else
    {
        $folder=opendir($path);
        while($theresFile)
        {
            $file=readdir($folder);
            if($file!==false)
            {
                if($file!="."&&$file!="..")
                {    
                    array_push($checkForGalery, $file);
                    $exists=1;
                }
            }
            else
            {
                $theresFile=false;
            }
        }
        closedir($folder);
        if($exists==1)
        {
            echo "ojogaleri";
        }
        else
        {
            echo "<h1>Tu galería de arte está vacía):</h1>";
        }
        echo"
        <br><br>
        <form action='./upload.html' method='POST'>
            <button type='submit'>Registrar una obra</button>
        </form>";
    }


?>