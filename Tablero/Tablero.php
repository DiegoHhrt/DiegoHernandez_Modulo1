<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Chess</title>
    </head>
    <body>
        <h1>Tablero de ajedrez</h1>
        <?php   
            $x=10;
            $i=0;
            $y=0;
            $white="./blanco.jpg";
            $black="./negro.jpg";
            $whdth="100";
            $bord="1";
            echo "<table border=".$bord.">";
            for($i=1;$i<=$x;$i++)
            {
                echo "<tr>";
                if($i%2!=0)
                {
                    for($y=1;$y<=$x;$y++)
                    {
                        if($y%2!=0)
                        {
                            echo "<td><img src=".$white." width=".$whdth."></td>";
                        }
                        else
                        {
                            echo "<td><img src=".$black." width=".$whdth."></td>";
                        }        
                    }
                }
                else
                {
                    for($y=1;$y<=$x;$y++)
                    {
                        if($y%2!=0)
                        {
                            echo "<td><img src=".$black." width=".$whdth."></td>";
                        }
                        else
                        {
                            echo "<td><img src=".$white." width=".$whdth."></td>";
                        }        
                    }
                }
            }
        echo "</table>" ;
        ?>
        
    </body>
</html>