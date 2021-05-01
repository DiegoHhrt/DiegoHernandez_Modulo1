<?php

    $countA=0;
    $countB=0;
    $countC=0;
    $countD=0;
    
    //Rutas de imágenes
    $past1="https://vivirmejor.mx/wp-content/uploads/2020/08/Comida-Tipica-Mexicana-Tacos-Pastor-Portada.jpg";
    $past2="https://www.hola.com/imagenes/cocina/recetas/20200312162968/tacos-al-pastor-mawey/0-797-445/tacos-al-pastor-mawey-m.jpg";    
    $past3="https://foodandtravel.mx/wp-content/uploads/2018/05/TacosalpastorFT.jpg";
    $suad1="https://media-cdn.tripadvisor.com/media/photo-s/16/a0/49/cf/tacos-de-suadero.jpg";
    $suad2="https://mxcity.mx/wp-content/uploads/2015/07/suadero.jpg";
    $suad3="https://mxcity.mx/wp-content/uploads/2015/07/suadero.taco_.jpg";   
    $barba1="https://lh3.googleusercontent.com/proxy/dZHy6fvfa0PrdWlx3kLgaP8EeAaab6_RYUZ9s1wCeBUze4PZKni77jSql6Ga0Gt-IdtzCDiqdz5PGNJhhIMOLDww1hHwE71AZOOiQO4DVDkkY5Q";    
    $barba2="https://www.animalgourmet.com/wp-content/uploads/2018/10/barbacoa6-e1539102696629.jpeg";
    $barba3="https://www.cocinavital.mx/wp-content/uploads/2018/12/taco-barbacoa.jpg";
    $lagun1="https://www.vvsupremo.com/wp-content/uploads/2015/11/900X570_Tacos-Laguneros.jpg";
    $lagun2="https://d1uz88p17r663j.cloudfront.net/original/327C8376-811C-6377-B9D8-FF0000673B69-611x360-b-min.png";
    $lagun3="https://www.demoslavueltaaldia.com/sites/default/files/styles/recetas_listado/public/tacos-laguneros.jpg?itok=p6xqbL0j";
    $camp1="https://www.cocinavital.mx/wp-content/uploads/2018/12/taco-campechano.jpg";
    $camp2="https://www.imer.mx/tropicalisima/wp-content/uploads/sites/19/campechano.jpg";
    $camp3="https://cheforopeza.com.mx/wp-content/uploads/2019/10/campechanos-vegetarianos-sitio.jpg";
    $carn1="https://www.cocinavital.mx/wp-content/uploads/2018/12/tacos-carnitas.jpg";
    $carn2="https://cheforopeza.com.mx/wp-content/uploads/2017/07/tacos-de-carnitas-caseras-bajas-en-grasas_recetas_chef-oropeza-jpg";
    $carn3="https://img.chilango.com/2019/02/buffet-de-tacos-de-carnitas-1.jpg";
    $bell1="https://tacobell.es/wp-content/uploads/2017/05/09_BODEGON_WEB_560X410_MENU_TACOS_08FEB.jpg";
    $bell2="https://tacobell.es/wp-content/uploads/2017/05/05_BODEGON_WEB_560X410_TACOS_X6_09FEB.jpg";
    $bell3="https://tacobell.es/wp-content/uploads/2017/05/02_BODEGON_WEB_560X410_TACOS_CRUNCHYSUPREME_09FEB.jpg";
    $light1="https://lh3.googleusercontent.com/proxy/frZJMORQgDrfv9kHya8b3rCEOQ1UOzDSe-1xJEYXJUcWv2gL0BWG1HbHy0KNHjfbgxCMbGf3lIDrobvieVxB7L2vTXRW_teMWOs6qOobZ3PvYbKKMcu0_Q";
    $light2="https://revolucion.news/wp-content/uploads/2017/03/tacos-light.jpeg";
    $light3="https://dam.cocinafacil.com.mx/wp-content/uploads/2019/08/tacos-light-en-hoja-de-lechuga.jpg";
    $plac1="https://dam.cocinafacil.com.mx/wp-content/uploads/2019/08/taco-placero.jpg";
    $plac2="https://cdn.kiwilimon.com/recetaimagen/35601/42907.jpg";
    $plac3="https://i.pinimg.com/originals/51/2c/73/512c73b2d5278e82e5291d63dc2204f3.png";    
    $mix1="https://blog.tacoguru.com/wp-content/uploads/2018/10/taco_mixiote.jpg";
    $mix2="https://dam.cocinafacil.com.mx/wp-content/uploads/2019/08/tacos-de-mixiote.jpg";
    $mix3="https://app.tacoguru.com/wp-content/uploads/2016/05/mixio.jpg";
    $sal1="https://jaliscocina.com/wp-content/uploads/2019/04/taco-de-sal-jcn.jpg";
    
    $results=[];
    $random;

    
    $response1=(isset($_POST["meat"])&&$_POST["meat"]!="")?$_POST["meat"]:false;
    $response2=(isset($_POST["place"])&&$_POST["place"]!="")?$_POST["place"]:false;
    $response3=(isset($_POST["drink"])&&$_POST["drink"]!="")?$_POST["drink"]:false;
    $response4=(isset($_POST["time"])&&$_POST["time"]!="")?$_POST["time"]:false;
    $response5=(isset($_POST["sauce"])&&$_POST["sauce"]!="")?$_POST["sauce"]:false;
    $response6=(isset($_POST["tortilla"])&&$_POST["tortilla"]!="")?$_POST["tortilla"]:false;
    $response7=(isset($_POST["type"])&&$_POST["type"]!="")?$_POST["type"]:false;
    $response8=(isset($_POST["energy"])&&$_POST["energy"]!="")?$_POST["energy"]:false;
    $response9=(isset($_POST["who"])&&$_POST["who"]!="")?$_POST["who"]:false;
    $response10=(isset($_POST["howOften"])&&$_POST["howOften"]!="")?$_POST["howOften"]:false;
    
    //Se añade al arreglo vacío todos los valores enviados del formulario para facilitar encontar valores
    array_push($results, $response1,$response2,$response3,$response4,$response5,$response6,$response7,$response8,$response9,$response10);

    //Ciclo que cuenta las respuestas registradas
    for($i=0;$i<10;$i++)
    {
        if($results[$i]==="A")
        {
            $countA++;
        }
        elseif($results[$i]==="B")
        {
            $countB++;
        }
        elseif($results[$i]==="C")
        {
            $countC++;
        }
        elseif($results[$i]==="D")
        {
            $countD++;
        }
    }

    $random=rand(1,3);
    //Comparación y asignación de un resultado e imágen aleatorea de las rutas definidas
    if($countA>$countB&&$countA>$countC&&$countA>$countD)
    {
        echo "<h2>Eres un taco al pastor :3</h2>";
        echo "<br><br>";
        if($random==1)
        {
            echo "<img src=".$past1." width="."500"." alt="."pastor1".">";
        }
        elseif($random==2)
        {
            echo "<img src=".$past2." width="."500"." alt="."pastor2".">";
        }
        elseif($random==3)
        {
            echo "<img src=".$past3." width="."500"." alt="."pastor3".">";
        }
        
    }
    elseif($countB>$countA&&$countB>$countC&&$countB>$countD)
    {
        echo "<h2>Eres un taco de suadero :3</h2>";
        echo "<br><br>";
        if($random==1)
        {
            echo "<img src=".$suad1." width="."500"." alt="."suadero3".">";
        }
        elseif($random==2)
        {
            echo "<img src=".$suad2." width="."500"." alt="."suadero3".">";
        }
        elseif($random==3)
        {
            echo "<img src=".$suad3." width="."500"." alt="."suadero3".">";
        }
    }
    elseif($countC>$countB&&$countC>$countA&&$countC>$countD)
    {
        echo "<h2>Eres un taco de barbacoa :3</h2>";
        echo "<br><br>";
        if($random==1)
        {
            echo "<img src=".$barba1." width="."500"." alt="."barbacoa1".">";
        }
        elseif($random==2)
        {
            echo "<img src=".$barba2." width="."500"." alt="."barbacoa2".">";
        }
        elseif($random==3)
        {
            echo "<img src=".$barba3." width="."500"." alt="."barbacoa3".">";
        }
    }
    elseif($countD>$countB&&$countD>$countC&&$countD>$countA)
    {
        echo "<h2>Eres un taco Lagunero :3</h2>";
        echo "<br><br>";
        if($random==1)
        {
            echo "<img src=".$lagun1." width="."500"." alt="."Lagunero1".">";
        }
        elseif($random==2)
        {
            echo "<img src=".$lagun2." width="."500"." alt="."Lagunero1".">";
        }
        elseif($random==3)
        {
            echo "<img src=".$lagun3." width="."500"." alt="."Lagunero1".">";
        }
    }
    elseif($countA==$countB)
    {
        echo "<h2>Eres un taco campechano :3</h2>";
        echo "<br><br>";
        if($random==1)
        {
            echo "<img src=".$camp1." width="."500"." alt="."campechano1".">";
        }
        elseif($random==2)
        {
            echo "<img src=".$camp2." width="."500"." alt="."campechano2".">";
        }
        elseif($random==3)
        {
            echo "<img src=".$camp3." width="."500"." alt="."campechano3".">";
        }
    }
    elseif($countB==$countC)
    {
        echo "<h2>Eres un taco de carnitas :3</h2>";
        echo "<br><br>";
        if($random==1)
        {
            echo "<img src=".$carn1." width="."500"." alt="."Carnitas1".">";
        }
        elseif($random==2)
        {
            echo "<img src=".$carn2." width="."500"." alt="."Carnitas2".">";
        }
        elseif($random==3)
        {
            echo "<img src=".$carn3." width="."500"." alt="."Carnitas3".">";
        }
    }
    elseif($countC==$countD)
    {
        echo "<h2>Eres un taco Bell :3</h2>";
        echo "<br><br>";
        if($random==1)
        {
            echo "<img src=".$bell1." width="."500"." alt="."TacoBell1".">";
        }
        elseif($random==2)
        {
            echo "<img src=".$bell2." width="."500"." alt="."TacoBell2".">";
        }
        elseif($random==3)
        {
            echo "<img src=".$bell3." width="."500"." alt="."TacoBell3".">";
        }
    }
    elseif($countA==$countD)
    {
        echo "<h2>Eres un taco light :3</h2>";
        echo "<br><br>";
        if($random==1)
        {
            echo "<img src=".$light1." width="."500"." alt="."Light1".">";
        }
        elseif($random==2)
        {
            echo "<img src=".$light2." width="."500"." alt="."Light2".">";
        }
        elseif($random==3)
        {
            echo "<img src=".$light3." width="."500"." alt="."Light2".">";
        }
    }
    elseif($countA==$countC)
    {
        echo "<h2>Eres un taco placero :3</h2>";
        echo "<br><br>";
        if($random==1)
        {
            echo "<img src=".$plac1." width="."500"." alt="."Placero1".">";
        }
        elseif($random==2)
        {
            echo "<img src=".$plac2." width="."500"." alt="."Placero2".">";
        }
        elseif($random==3)
        {
            echo "<img src=".$plac3." width="."500"." alt="."Placero3".">";
        }
    }
    elseif($countB==$countD)
    {
        echo "<h2>Eres un taco de mixiote :3</h2>";
        echo "<br><br>";
        if($random==1)
        {
            echo "<img src=".$mix1." width="."500"." alt="."Mixiote1".">";
        }
        elseif($random==2)
        {
            echo "<img src=".$mix2." width="."500"." alt="."Mixiote2".">";
        }
        elseif($random==3)
        {
            echo "<img src=".$mix3." width="."500"." alt="."Mixiote3".">";
        }
    }
    else
    {
        echo "<h2>Eres un taco de sal.</h2>";
        echo "<img src=".$sal1." width="."500"." alt="."sal".">";   
    }
?>