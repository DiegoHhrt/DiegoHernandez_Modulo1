<?php

    $button1=(isset ($_POST["Birth"]) && $_POST["Birth"] !="") ?$_POST["Birth"]: false;
    $button2=(isset ($_POST["Hour"]) && $_POST["Hour"] !="") ?$_POST["Hour"]: false;
    
    if($button2)
    {
        $time=(isset ($_POST["localHour"]) && $_POST["localHour"] !="") ?$_POST["localHour"]: false;
        $cities=(isset($_POST["city"])&&$_POST["city"]!=0)? $_POST["city"]:0;
    
        $hours=substr($time, 0, 2);
        $minutes=substr($time, 3, 2);

        echo "<table border='1'>";
            echo "<thead>";
                echo "<tr>";
                    echo "<th colspan='2'><strong>Reloj mundial</strong></th>";
                echo"</tr>";
            echo "</thead>";
            echo "<tbody>";
                echo "<tr>";  
                date_default_timezone_set("America/Mexico_City");  
                    echo "<td>Ciudad de méxico</td>";
                    echo "<td>".date("H:i", mktime($hours, $minutes))." hrs</td>";
                echo "</tr>";
        foreach($cities as $key => $value)
        {    
            if($value=="New York")
            {
                echo "<tr>";  
                date_default_timezone_set("America/New_York");  
                    echo "<td>New York</td>";
                    echo "<td>".date("H:i")." hrs</td>";
                echo "</tr>";
            }
            if($value=="Madrid")
            {
                echo "<tr>";  
                date_default_timezone_set("Europe/Madrid");  
                    echo "<td>Madrid</td>";
                    echo "<td>".date("H:i")." hrs</td>";
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
                    echo "<td>Sao Paulo</td>";
                    echo "<td>".date("H:i")." hrs</td>";
                echo "</tr>";
            }
            if($value=="Paris")
            {
                echo "<tr>";  
                date_default_timezone_set("Europe/Paris");  
                    echo "<td>París</td>";
                    echo "<td>".date("H:i")." hrs</td>";
                echo "</tr>";
            }
            if($value=="Atenas")
            {
                echo "<tr>";  
                date_default_timezone_set("Europe/Athens");  
                    echo "<td>Atenas</td>";
                    echo "<td>".date("H:i")." hrs</td>";
                echo "</tr>";
            }
            if($value=="Tokio")
            {
                echo "<tr>";  
                date_default_timezone_set("Asia/Tokyo");  
                    echo "<td>Tokio</td>";
                    echo "<td>".date("H:i")." hrs</td>";
                echo "</tr>";
            }
        }
            echo "</tbody>";
        echo "</table>";

    }
    elseif($button1)
    {
        echo "ola";
    }

?>