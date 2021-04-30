<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Chess</title>
    </head>
    <body>
        <table border="1">
            <td></td>
        </table>
        <?php   

            $x=7;
            $i=0;
            $y=0;
            while($i<=$x)
            {
                for($y=0;$y<=$x;$y++)
                {
                    echo $y;
                }
                echo "<br>";
                echo $i;
                $i++;
            }
      
        ?>
    </body>
</html>