<?php

    $countA=0;
    $countB=0;
    $countC=0;
    $countD=0;

    $results=[];

    
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
    
    array_push($results, $response1,$response2,$response3,$response4,$response5,$response6,$response7,$response8,$response9,$response10);

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
    
    if($countA>$countB&&$countA>$countC&&$countA>$countD)
    {
        echo "a";
    }
    elseif($countB>$countA&&$countB>$countC&&$countB>$countD)
    {
        echo "b";
    }
    elseif($countC>$countB&&$countC>$countA&&$countC>$countD)
    {
        echo "c";
    }
    elseif($countD>$countB&&$countD>$countC&&$countD>$countA)
    {
        echo "d";
    }
    elseif($countA==$countB)
    {
        echo "ab";
    }
    elseif($countB==$countC)
    {
        echo "bc";
    }
    elseif($countC==$countD)
    {
        echo "cd";
    }
    elseif($countA==$countD)
    {
        echo "ad";
    }
    elseif($countA==$countC)
    {
        echo "ac";
    }
    elseif($countB==$countD)
    {
        echo "bd";
    }
    else
    {
        echo "sal";
    }
?>