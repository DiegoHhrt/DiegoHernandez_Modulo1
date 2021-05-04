<?php
    //Integrantes: Diego Hernández, Jazmín Ramírez.
    $notHitImg="./media/NotHit.jpg";
    $hitImg="./media/firehit.jpg";
    $ocean="./media/Ocean.jpg";
    $lifes="./media/vida.png";
    $alienConquer="https://i2-prod.mirror.co.uk/incoming/article6455166.ece/ALTERNATES/s1200/Aliens.jpg";
    $shoot=0;
    $vidas=8;
    $results=[];
    $win=0;
    $perder=0;
    $almacenate="";
    $less=0;
    $won="https://img.freepik.com/vector-gratis/ganas-letrero-azul-luces_275806-456.jpg?size=338&ext=jpg";
    
    $lost = (isset ($_POST["loose"]) && $_POST["loose"] !="") ?$_POST["loose"]: 0;

    if($vidas>0&&$win==0&&$lost==0)
    {   
        $col = (isset ($_POST["letra"]) && $_POST["letra"] !="") ?$_POST["letra"]: "0";
        $fila = (isset ($_POST["num"]) && $_POST["num"] !="") ?$_POST["num"]: "0";
        $toPush=(isset ($_POST["stored"]) && $_POST["stored"] !="") ?$_POST["stored"]: "0";
        $letra= strtoupper($col);
        $take=(isset ($_POST["rest"]) && $_POST["rest"] !="") ?$_POST["rest"]: 0;
        $restante=(isset ($_POST["remain"]) && $_POST["remain"] !="") ?$_POST["remain"]: 8;
        $barquitox1=(isset ($_POST["bx1"]) && $_POST["bx1"] !="") ?$_POST["bx1"]: 0;
        $barquitoy1=(isset ($_POST["by1"]) && $_POST["by1"] !="") ?$_POST["by1"]: 0;
        $barquitox2=(isset ($_POST["bx2"]) && $_POST["bx2"] !="") ?$_POST["bx2"]: 0;
        $barquitoy2=(isset ($_POST["by2"]) && $_POST["by2"] !="") ?$_POST["by2"]: 0;
        $barquitox3=(isset ($_POST["bx3"]) && $_POST["bx3"] !="") ?$_POST["bx3"]: 0;
        $barquitoy3=(isset ($_POST["by3"]) && $_POST["by3"] !="") ?$_POST["by3"]: 0;

        $BARCOx1=(isset ($_POST["BX1"]) && $_POST["BX1"] !="") ?$_POST["BX1"]: 0;
        $BARCOy1=(isset ($_POST["BY1"]) && $_POST["BY1"] !="") ?$_POST["BY1"]: 0;
        $BARCOx2=(isset ($_POST["BX2"]) && $_POST["BX2"] !="") ?$_POST["BX2"]: 0;
        $BARCOy2=(isset ($_POST["BY2"]) && $_POST["BY2"] !="") ?$_POST["BY2"]: 0;
        $BARCOx3=(isset ($_POST["BX3"]) && $_POST["BX3"] !="") ?$_POST["BX3"]: 0;
        $BARCOy3=(isset ($_POST["BY3"]) && $_POST["BY3"] !="") ?$_POST["BY3"]: 0;
        $BARCOx4=(isset ($_POST["BX4"]) && $_POST["BX4"] !="") ?$_POST["BX4"]: 0;
        $BARCOy4=(isset ($_POST["BY4"]) && $_POST["BY4"] !="") ?$_POST["BY4"]: 0;
        
        //Genera columna, fila y orientacion para cada barco 
        $ori1=mt_rand(1,2);
        $row1=rand(1,0);
        $column1=rand(1,10);
        $row2=rand(1,10);
        $column2=rand(1,0);
            
        


        //Los siguientes if son condiciones para que los barcos grandes no se salgan del tablero, se almacenan las coordenadas finales en las variables
            if($ori1==1&&($row1<4))
            {
                $barco1=[$column1.$row1, $column1.$row1+1, $column1.$row1+2, $column1.$row1+3];
                $By1=$column1;
                $Bx1=$row1;
                $By2=$column1;
                $Bx2=$row1+1;
                $By3=$column1;
                $Bx3=$row1+2;
                $By4=$column1;
                $Bx4=$row1+3;

            }
            else if($ori1==1&&($row1>7))
            {
                $barco1=[$column1.$row1, $column1.$row1-1, $column1.$row1-2, $column1.$row1-3];
                $By1=$column1;
                $Bx1=$row1;
                $By2=$column1;
                $Bx2=$row1-1;
                $By3=$column1;
                $Bx3=$row1-2;
                $By4=$column1;
                $Bx4=$row1-3;
            }
            else if($ori1==1&&($row1>=4&&$row1<=7))
            {
                $barco1=[$column1.$row1, $column1.$row1+1, $column1.$row1+2, $column1.$row1+3];
                $By1=$column1;
                $Bx1=$row1;
                $By2=$column1;
                $Bx2=$row1+1;
                $By3=$column1;
                $Bx3=$row1+2;
                $By4=$column1;
                $Bx4=$row1+3;
            }
            if($ori1==2&&($column1<4))
            {
                $barco1=[$row1.$column1, $row1.$column1+1, $row1.$column1+2, $row1.$column1+3];
                $By1=$column1;
                $Bx1=$row1;
                $By2=$column1+1;
                $Bx2=$row1;
                $By3=$column1+2;
                $Bx3=$row1;
                $By4=$column1+3;
                $Bx4=$row1;
            }
            else if($ori1==2&&($column1>7))
            {
                $barco1=[$row1.$column1, $row1.$column1-1, $row1.$column1-2, $row1.$column1-3];
                $By1=$column1;
                $Bx1=$row1;
                $By2=$column1-1;
                $Bx2=$row1;
                $By3=$column1-2;
                $Bx3=$row1;
                $By4=$column1-3;
                $Bx4=$row1;
            }
            else if ($ori1==2&&($column1>=4&&$column1<=7))
            {
                $barco1=[$row1.$column1, $row1.$column1+1, $row1.$column1+2, $row1.$column1+3];
                
                $By1=$column1;
                $Bx1=$row1;
                $By2=$column1+1;
                $Bx2=$row1;
                $By3=$column1+2;
                $Bx3=$row1;
                $By4=$column1+3;
                $Bx4=$row1;
            }
                        
            $ori2=rand(1,2);
            //Los siguientes if son condiciones para que los barcos pequeños no se salgan del tablero, se almacenan las coordenadas finales en las variables
            do {
                if($ori2==1&&($row2<3))
                {
                    $barco2=[$column2.$row2, $column2.$row2+1, $column2.$row2+2];
                    $boatx1=$row2;
                    $boaty1=$column2;
                    $boatx2=$row2+1;
                    $boaty2=$column2;
                    $boatx3=$row2+2;
                    $boaty3=$column2;

                }
                else if($ori2==1&&($row2>8))
                {
                    $barco2=[$column2.$row2, $column2.$row2-1, $column2.$row2-2];
                    $boatx1=$row2;
                    $boaty1=$column2;
                    $boatx2=$row2-1;
                    $boaty2=$column2;
                    $boatx3=$row2-2;
                    $boaty3=$column2;
                }
                else if($ori2==1&&($row2>=3&&$row2<=8))
                {
                    $barco2=[$column2.$row2, $column2.$row2+1, $column2.$row2+2];
                    $boatx1=$row2;
                    $boaty1=$column2;
                    $boatx2=$row2+1;
                    $boaty2=$column2;
                    $boatx3=$row2+2;
                    $boaty3=$column2;
                }
                if($ori2==2&&($column2<3))
                {
                    $barco2=[$row2.$column2, $row2.$column2+1, $row2.$column2+2];
                    $boatx1=$row2;
                    $boaty1=$column2;
                    $boatx2=$row2;
                    $boaty2=$column2+1;
                    $boatx3=$row2;
                    $boaty3=$column2+2;
                }
                    
                else if($ori2==2&&($column2>8))
                {
                    $barco2=[$row2.$column2, $row2.$column2-1, $row2.$column2-2];
                    $boatx1=$row2;
                    $boaty1=$column2;
                    $boatx2=$row2;
                    $boaty2=$column2-1;
                    $boatx3=$row2;
                    $boaty3=$column2-2;
                } 
                else if ($ori2==2&&($column2>=3&&$column2<=8))
                {
                    $barco2=[$row2.$column2, $row2.$column2+1, $row2.$column2+2];
                    $boatx1=$row2;
                    $boaty1=$column2;
                    $boatx2=$row2;
                    $boaty2=$column2+1;
                    $boatx3=$row2;
                    $boaty3=$column2+2;
                }
                $encimado=0;

                //recorre ambas cadenas concatenadas que hacen más facil su recorrrido
                for($i=0; $i<4; $i++)
                {
                    for ($j=0; $j<3; $j++)
                    {
                        if($barco1[$i]==$barco2[$j])
                            $encimado++;
                    }
                }
                //Si se encima un barco en otro, se le asignan nuevos valoresa aleatorios al barco
                if($encimado>0)
                {
                    $row2=rand(1,10);
                    $column2=rand(1,10);
                    $ori2=rand(1,2);
                }
            } while ($encimado>0); //El algoritmo se repite hasta que no hayan barcos encimados
        
    
        $newlifes=$restante;
        $vidas=$newlifes;
        //Convierte la letra introducida por el usuario en una coordenada (número) [Toma mayúsculas pues el juego distingue entre mayúsculas y minúsculas]
        switch($letra)
        {
            case ($letra=="A"):
                $columna=1;
                break;
            case ($letra=="B"):
                $columna=2;
                break;
            case ($letra=="C"):
                $columna=3;
                break;
            case ($letra=="D"):
                $columna=4;
                break;
            case ($letra=="E"):
                $columna=5;
                break;
            case ($letra=="F"):
                $columna=6;
                break;
            case ($letra=="G"):
                $columna=7;
                break;
            case ($letra=="H"):
                $columna=8;
                break;
            case ($letra=="I"):
                $columna=9;
                break;
            case ($letra=="J"):
                $columna=10;
                break;
            default:
                $columna=0;
                $fila=0;
                break;
        }
        echo "<h1>Battleship</h1>";
        echo "<h3>Vidas: </h3>";

        for($k=1; $k<=$vidas; $k++)
        {
            echo "<img src=".$lifes." width=\"20\" alt=\"Kokoro for life\">";
        }
        echo "<p>Shoot to the ocean</p>";
        echo "<p>Historial de disparos:</p>";
        $x=0;

        if($toPush!="0")
        {
            array_push($results,$toPush);
        }
        array_push($results, $letra, $fila);

        if($col!="0"&&$fila!="0")
        {        
            
            $almacenate=implode("",$results);

        }
        $x=0;
        //Se asigna el valor de cada disparo a un arreglo que se despliega
        foreach($results as $key => $value)
        {
            if($results[$x!="0"])
            {
                echo $results[$x];
            }
            $x++; 
        }
        
        //Mecanismo que reduce vidas si no has atinado el tiro
        if(($columna!=$BARCOy1&&$fila!=$BARCOx1&&$columna!=$BARCOy2&&$fila!=$BARCOx2&&$columna!=$BARCOy3&&$fila!=$BARCOx3&&$columna!=$BARCOy4&&$fila!=$BARCOx4)&&($columna!=$barquitoy1&&$fila!=$barquitox1&&$columna!=$barquitoy2&&$fila!=$barquitox2&&$columna!=$barquitoy3&&$fila!=$barquitox3))
        {
            $less=1;
            $newlifes-=1;
        }
        
        echo "<table border="."1".">";
            echo"<thead>";
                echo"<tr>";
                    echo"<th></th>";
                    echo"<th>A</th>";
                    echo"<th>B</th>";
                    echo"<th>C</th>";
                    echo"<th>D</th>";
                    echo"<th>E</th>";
                    echo"<th>F</th>";
                    echo"<th>G</th>";
                    echo"<th>H</th>";
                    echo"<th>I</th>";
                    echo"<th>J</th>";
                echo"</tr>";
            echo"</thead>";
            echo"<tbody>";
                //ciclo que establece qué imágenes desplegar
                for ($i=1; $i<=10; $i++)
                {
                    echo "<tr>";
                    echo "<td>$i</td>";
                    for ($j=1; $j<=10; $j++)        
                    {
                        if($columna!=$j&&$fila!=$i)
                        {
                            echo "<td><img src=".$ocean."  width=\"45\" alt=\"Ocean\"></td>";
                        }
                        elseif(((($j==$BARCOy1&&$columna==$BARCOy1)&&($i==$BARCOx1&&$fila==$BARCOx1))||(($j==$BARCOy2&&$columna==$BARCOy2)&&($i==$BARCOx2&&$fila==$BARCOx2))||(($j==$BARCOy3&&$columna==$BARCOy3)&&($i==$BARCOx3&&$fila==$BARCOx3))||(($j==$BARCOy4&&$columna==$BARCOy4)&&($i==$BARCOx4&&$fila==$BARCOx4))||(($j==$barquitoy1&&$columna==$barquitoy1)&&($i==$barquitox1&&$fila==$barquitox1))||(($j==$barquitoy2&&$columna==$barquitoy2)&&($i==$barquitox2&&$fila==$barquitox2))||(($j==$barquitoy3&&$columna==$barquitoy3)&&($i==$barquitox3&&$fila==$barquitox3))))
                        {
                            echo "<td><img src=".$hitImg."  width=\"45\" alt=\"Shot ocean\"></td>";
                        }
                        elseif((($j!=$BARCOy1&&$i!=$BARCOx1)||($j!=$BARCOy2&&$i!=$BARCOx2)||($j!=$BARCOy3&&$i!=$BARCOx3)||($j!=$BARCOy4&&$i!=$BARCOx4)||($j!=$barquitoy1&&$i!=$barquitox1)||($j!=$barquitoy2&&$i!=$barquitox2)||($j!=$barquitoy3&&$i!=$barquitox3)))
                        {
                            echo "<td><img src=".$notHitImg."  width=\"45\" alt=\"Non shot ocean\"></td>";
                        }

                    }
                    echo "<tr>";
                }
                echo "<br><br><br>";


            
        echo"</tbody>";
        echo "</table>";
        echo "<br><br>";
        //Datos que requieren enviarse para continuar el juego
        echo "<form action=\"./Game.php\" method=\"POST\">";
        echo "<label for=\"letra\">Columna(Letra):<input type=\"text\" name=\"letra\" maxlength=\"1\" required></label>";
        echo "<label for=\"num\">Fila(Número):<input type=\"text\" name=\"num\" maxlength=\"1\" required></label>";
        echo "<input type="."hidden"." name="."stored"." value=".$almacenate.">";
        echo "<input type="."hidden"." name="."rest"." value=".$less.">";
        echo "<input type="."hidden"." name="."remain"." value=".$newlifes.">";
        //Coordenadas de las casillas que ocupan los barcos
       echo "<input type=\"hidden\" id=\"filacol\" name=\"bx1;\" value=\"$boatx1;\">";
        echo "<input type=\"hidden\" id=\"filacol\" name=\"by1\" value=\"$boaty1;\">";
        echo "<input type=\"hidden\" id=\"filacol\" name=\"bx2\" value=\"$boatx2;\">";
        echo "<input type=\"hidden\" id=\"filacol\" name=\"by2\" value=\"$boaty2;\">";
        echo "<input type=\"hidden\" id=\"filacol\" name=\"bx3\" value=\"$boatx3;\">";
        echo "<input type=\"hidden\" id=\"filacol\" name=\"by3\" value=\"$boaty3;\">";
        echo "<input type=\"hidden\" id=\"filacol\" name=\"BY1\" value=\"$By1\">";
        echo "<input type=\"hidden\" id=\"filacol\" name=\"BX1\" value=\"$Bx1\">";
        echo "<input type=\"hidden\" id=\"filacol\" name=\"BY2\" value=\"$By2\">";
        echo "<input type=\"hidden\" id=\"filacol\" name=\"BX2\" value=\"$Bx2\">";
        echo "<input type=\"hidden\" id=\"filacol\" name=\"BY3\" value=\"$By3\">";
        echo "<input type=\"hidden\" id=\"filacol\" name=\"BX3\" value=\"$Bx3\">";
        echo "<input type=\"hidden\" id=\"filacol\" name=\"BY4\" value=\"$By4\">";
        echo "<input type=\"hidden\" id=\"filacol\" name=\"BX4\" value=\"$Bx4\">";
        if($vidas==0)
        {
            $perder=1;
            echo "<input type="."hidden"." name="."loose"." value=".$perder.">";
        }
        echo "<button type=\"submit\">¡¡DISPARAR!!</button>";
        echo "</form>";
    }
    elseif($lost==1)
    {
        echo "<h1>Perdiste...</h1>";
        echo "<h2>Te quedaste sin vidas ;(</h2>";
        echo "<img src=".$alienConquer." width=500 alt=lost>";
    }
    elseif($win==1)
    {
        echo "<h1>¡Ganaste!</h1>";
        echo "<h2>Venciste a los aliens</h2>";
        echo "<img src=".$won." width=500 alt=win>";
    }
   
?>                   