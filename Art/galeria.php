<?php
    
    $nameObra=(isset($_POST["Obra"])&&$_POST["Obra"]!="")?$_POST["Obra"]:"Inválido";
    $nameAuthor=(isset($_POST["autor"])&&$_POST["autor"]!="")?$_POST["autor"]:"SinAutor";
    $creationYear=(isset($_POST["year"])&&$_POST["year"]!="")?$_POST["year"]:"NoYear";
    $fullUpload=(isset($_FILES["arch"])&&$_FILES["arch"]!="")?$_FILES["arch"]:false;
    
    $divide=[];
    $files=[];
    $checkForGalery=[];
    $ext="";
    $path="./statics";
    $theresFile=true;

    $year=[];
    $yearChain="";

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
            rename($tmpLocation, "./statics/".$nameObra."_".$nameAuthor."_".$creationYear.".".$ext);
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
        $theresFile=true;
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
        if($exists==1&&$empty==1)
        {
            echo "
            <table border='1'>
                <thead>
                    <tr>
                        <th colspan='2'>Galería de arte</th>
                    </tr>
                </thead>
                <tbody>";
                    $y=0;
                    foreach($checkForGalery as $key => $value)
                    {
                        if($y % 2===0)
                        {
                            echo "<tr>";
                        }
                        $divide=explode("_", $value);
                        $year=explode(".", $divide[2]);

                        echo "<td><img src='./statics/".$value."' width='250' alt='obra".$y."'>                            
                            <br>
                            <ul>
                                <li><strong>Nombre de la pintura:</strong> ".$divide[0]."</li>
                                <li><strong>Nombre del autor:</strong> ".$divide[1]."</li>
                                <li><strong>Año en que se realizó:</strong> ".$year[0]."</li>
                            </ul>
                            </td>";
                        if($y % 2===0)
                        {
                            echo "</tr>";
                        }
                        $y++;
                    }  
                echo "</tbody>
            </table>";
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