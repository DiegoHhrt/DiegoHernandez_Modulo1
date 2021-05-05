<?php

    $button1=(isset ($_POST["Birth"]) && $_POST["Birth"] !="") ?$_POST["Birth"]: false;
    $button2=(isset ($_POST["Hour"]) && $_POST["Hour"] !="") ?$_POST["Hour"]: false;
    
    if($button2)
    {
        $time=(isset ($_POST["localHour"]) && $_POST["localHour"] !="") ?$_POST["localHour"]: false;
        $cities=(isset($_POST["city"])&&$_POST["city"]!=0)? $_POST["city"]:0;
    
        $hours=substr($time, 0, 2);
        $minutes=substr($time, 3, 2);

        $local=0;
        $new=0;
        $definitive=0;

        
        echo "<table border='1'>";
            echo "<thead>";
                echo "<tr>";
                    echo "<th colspan='2'><strong>Reloj mundial</strong></th>";
                echo"</tr>";
            echo "</thead>";
            echo "<tbody>";
                echo "<tr>";  
                date_default_timezone_set("America/Mexico_City"); 
                $timemx=date("H"); 
                    echo "<td>Ciudad de méxico</td>";
                    echo "<td>".date("H:i", mktime($hours, $minutes))." hrs</td>";
                echo "</tr>";
                $local=$timemx; 
        foreach($cities as $key => $value)
        {    
            if($value=="New York")
            {
                echo "<tr>";
                 
                date_default_timezone_set("America/New_York");
                $new=date("H");
                
                $definitive=$new-$local;
                    echo "<td>New York</td>";
                    echo "<td>".date("H:i", mktime(($hours+$definitive), $minutes))." hrs</td>";
                echo "</tr>";
            }
            if($value=="Madrid")
            {
                echo "<tr>";  
                date_default_timezone_set("Europe/Madrid");  
                $new=date("H");
                
                $definitive=$new-$local;
                    echo "<td>Madrid</td>";
                    echo "<td>".date("H:i",mktime(($hours+$definitive), $minutes))." hrs</td>";
                echo "</tr>";
            }
            if($value=="Roma")
            {
                echo "<tr>";  
                date_default_timezone_set("Europe/Rome");  
                    echo "<td>Roma</td>";
                    echo "<td>".date("H:i")." hrs</td>";
                echo "</tr>";
            }
            // if($value=="Beijing")
            // {
            //     echo "<tr>";  
            //     date_default_timezone_set("Asia/Beijing");  
            //         echo "<td>Beijing</td>";
            //         echo "<td>".date("H:i")." hrs</td>";
            //     echo "</tr>";
            // }
            if($value=="Sao Paulo")
            {
                echo "<tr>";  
                date_default_timezone_set("America/Sao_Paulo");  
                $new=date("H");
                
                $definitive=$new-$local;
                    echo "<td>Sao Paulo</td>";
                    echo "<td>".date("H:i",mktime(($hours+$definitive), $minutes))." hrs</td>";
                echo "</tr>";
            }
            if($value=="Paris")
            {
                echo "<tr>";  
                date_default_timezone_set("Europe/Paris"); 
                $new=date("H");
                
                $definitive=$new-$local; 
                    echo "<td>París</td>";
                    echo "<td>".date("H:i",mktime(($hours+$definitive), $minutes))." hrs</td>";
                echo "</tr>";
            }
            if($value=="Atenas")
            {
                echo "<tr>";  
                date_default_timezone_set("Europe/Athens");  
                $new=date("H");
                
                $definitive=$new-$local;
                    echo "<td>Atenas</td>";
                    echo "<td>".date("H:i",mktime(($hours+$definitive), $minutes))." hrs</td>";
                echo "</tr>";
            }
            if($value=="Tokio")
            {
                echo "<tr>";  
                date_default_timezone_set("Asia/Tokyo");  
                $new=date("H");
                
                $definitive=$new-$local;
                    echo "<td>Tokio</td>";
                    echo "<td>".date("H:i",mktime(($hours+$definitive), $minutes))." hrs</td>";
                echo "</tr>";
            }
        }
            echo "</tbody>";
        echo "</table>";

    }
    elseif($button1)
    {
        $date=(isset ($_POST["birthdate"]) && $_POST["birthdate"] !="") ?$_POST["birthdate"]: false;
        $selection=(isset ($_POST["consult"]) && $_POST["consult"] !="") ?$_POST["consult"]: 0;

        $timeTo=0;

        $year=substr($date, 0, 4);
        $month=substr($date, 5, 2);
        $day=substr($date, 8, 1);

        for($i=0; $i<=31;$i++)
        {
            if($day==$i)
                $numDay=$i;
        }
        for($x=0; $x<=12;$x++)
        {
            if($month==$x)
                $numMonth=$x;
        }

        $toSubstract=mktime(0,0,0,$month,$day,$year);

        $dateArray=getdate();

        //var_dump($dateArray);
        $bdayyear=$dateArray["year"];

        echo "<table border='1'>";
            echo "<thead>";
                echo "<tr>";
                    echo "<th><strong>Cumpleaños:</strong></th>";
                    if($numDay<$dateArray["mday"]&&$numMonth<=$dateArray["mon"])
                    {
                        $bdayyear++;
                        //echo "ola";
                    }
                    echo "<th>".$bdayyear."-".$month."-".$day."</th>";
                echo"</tr>";
            echo "</thead>";
            echo "<tbody>";
                echo "<tr>";  
                echo "</tr>";
        foreach($selection as $key => $value)
        {
            if($value=="Days To")
            {
                $timeTo=((((mktime(0,0,0,$numMonth,$numDay,$bdayyear)-$toSubstract)/60)/60)/24);
                echo "<tr>";
                    echo "<td>Dias para tu cumpleaños</td>";
                    echo "<td>".$timeTo."</td>";
                echo "</tr>";
            }
            if($value=="Hours To")
            {
                $timeTo=(((mktime(0,0,0,$numMonth,$numDay,$bdayyear)-$toSubstract)/60)/60);
                echo "<tr>";
                    echo "<td>Horas para tu cumpleaños</td>";
                    echo "<td>".$timeTo."</td>";
                echo "</tr>";
            }
            if($value=="Minuts To")
            {
                $timeTo=(mktime(0,0,0,$numMonth,$numDay,$bdayyear)-$toSubstract)/60;
                echo "<tr>";
                    echo "<td>Minutos para tu cumpleaños</td>";
                    echo "<td>".$timeTo."</td>";
                echo "</tr>";
            }
            if($value=="weeknd")
            {
                echo "<td>¿Es fin de semana?</td>";
                echo "<td></td>";
            }
        }
            echo "</tbody>";
        echo "</table>";
    }

?>