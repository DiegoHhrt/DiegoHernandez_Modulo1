<?php

    $return="./tabla.html";

    $letters;
    $toTranslate="";
    $key="";
    $comparation="";
    $validation=1;

    $morseA=".-";
    $morseB="-...";
    $morseC="-.-.";
    $morseD="-..";
    $morseE=".";
    $morseF="..-.";
    $morseG="--.";
    $morseH="....";
    $morseI="..";
    $morseJ=".---";
    $morseK="-.-";
    $morseL=".-..";
    $morseM="--";
    $morseN="-.";
    $morseO="---";
    $morseP=".--.";
    $morseQ="--.-";
    $morseR=".-.";
    $morseS="...";
    $morseT="-";
    $morseU="..-";
    $morseV="...-";
    $morseW=".--";
    $morseX="-..-";
    $morseY="-.--";
    $morseZ="--..";
    $morseQuest="..--..";
    $morseAdm="--..--";

    $morse1=".----";
    $morse2="..---";
    $morse3="...--";
    $morse4="....-";
    $morse5=".....";
    $morse6="-....";
    $morse7="--...";
    $morse8="---..";
    $morse9="----.";
    $morse0="-----";

    $resultM=[];
    $resultS=[];
    $i=0;
    $y=0;
    $fail=0;

    $translation=(isset($_POST["translation"])&&$_POST["translation"]!="")?$_POST["translation"]:"Inválido";
    $text=(isset($_POST["text"])&&$_POST["text"]!="")?$_POST["text"]:"Inválido";

    echo "<form action=".$return.">";
        if($translation==="mToS")
        {
            $letters=explode(" ", $text);

            foreach($letters as $key => $comparation)
            {
                $i++;
            }
            for($y=0;$y<$i;$y++)
            {
                $validation=0;
                if(ord($letters[$y])==46||ord($letters[$y])==45||ord($letters[$y])==32)
                {
                    switch($letters[$y])
                    {
                        case $morseA:
                            array_push($resultS,"A");
                        break;
                        case $morseB:
                            array_push($resultS,"B");
                        break;
                        case $morseC:
                            array_push($resultS,"C");
                        break;
                        case $morseD:
                            array_push($resultS,"D");
                        break;
                        case $morseE:
                            array_push($resultS,"E");
                        break;
                        case $morseF:
                            array_push($resultS,"F");
                        break;
                        case $morseG:
                            array_push($resultS,"G");
                        break;
                        case $morseH:
                            array_push($resultS,"H");
                        break;
                        case $morseI:
                            array_push($resultS,"I");
                        break;
                        case $morseJ:
                            array_push($resultS,"J");
                        break;
                        case $morseK:
                            array_push($resultS,"K");
                        break;
                        case $morseL:
                            array_push($resultS,"L");
                        break;
                        case $morseM:
                            array_push($resultS,"M");
                        break;
                        case $morseN:
                            array_push($resultS,"N");
                        break;
                        case $morseO:
                            array_push($resultS,"O");
                        break;
                        case $morseP:
                            array_push($resultS,"P");
                        break;
                        case $morseQ:
                            array_push($resultS,"Q");
                        break;
                        case $morseR:
                            array_push($resultS,"R");
                        break;
                        case $morseS:
                            array_push($resultS,"S");
                        break;
                        case $morseT:
                            array_push($resultS,"T");
                        break;
                        case $morseU:
                            array_push($resultS,"U");
                        break;
                        case $morseV:
                            array_push($resultS,"V");
                        break;
                        case $morseW:
                            array_push($resultS,"W");
                        break;
                        case $morseX:
                            array_push($resultS,"X");
                        break;
                        case $morseY:
                            array_push($resultS,"Y");
                        break;
                        case $morseZ:
                            array_push($resultS,"Z");
                        break;
                        case $morse0:
                            array_push($resultS,"0");
                        break;
                        case $morse1:
                            array_push($resultS,"1");
                        break;
                        case $morse2:
                            array_push($resultS,"2");
                        break;
                        case $morse3:
                            array_push($resultS,"3");
                        break;
                        case $morse4:
                            array_push($resultS,"4");
                        break;
                        case $morse5:
                            array_push($resultS,"5");
                        break;
                        case $morse6:
                            array_push($resultS,"6");
                        break;
                        case $morse7:
                            array_push($resultS,"7");
                        break;
                        case $morse8:
                            array_push($resultS,"8");
                        break;
                        case $morse9:
                            array_push($resultS,"9");
                        break;
                        case $morseQuest:
                            array_push($resultS,"?");
                        break;
                        case $morseAdm:
                            array_push($resultS,"!");
                        break;
                        case " ":
                            array_push($resultS,"/");
                        break;
                    }
                    $validation=1;
                }
                elseif($validation==0)
                {
                    $fail=1;
                }
            }
            if($fail==0)
            {
                $i=0;
                echo "<h3>El texto introducido fue:</h3><br>";
                foreach($letters as $key => $toTranslate)
                {
                    echo $letters[$i];
                    echo " ";
                    $i++;
                }
                echo "<br><br>";
                $i=0;
                echo "<h3>Tu traducción es:</h3><br>";
                foreach($resultS as $key => $toTranslate)
                {
                    echo $resultS[$i];
                    $i++;
                }
                echo "<br><br>";
            }
            else
            {
                echo "<h2>Parece que no introdujiste el tipo de cararcter correcto. Por favor utiliza \".\" y \"-\" y separa cada letra con espacios.</h2>";
            }
        }
        elseif($translation==="sToM")
        {
            $letters=str_split($text, 1);

            foreach($letters as $key => $comparation)
            {
                $i++;
            }
            for($y=0;$y<$i;$y++)
            {
                $validation=0;
                if(ord($letters[$y])>=60&&ord($letters[$y])<=90)
                {
                    switch($letters[$y])
                    {
                        case "A":
                            array_push($resultM,$morseA);
                        break;
                        case "B":
                            array_push($resultM,$morseB);
                        break;
                        case "C":
                            array_push($resultM,$morseC);
                        break;
                        case "D":
                            array_push($resultM,$morseD);
                        break;
                        case "E":
                            array_push($resultM,$morseE);
                        break;
                        case "F":
                            array_push($resultM,$morseF);
                        break;
                        case "G":
                            array_push($resultM,$morseG);
                        break;
                        case "H":
                            array_push($resultM,$morseH);
                        break;
                        case "I":
                            array_push($resultM,$morseI);
                        break;
                        case "J":
                            array_push($resultM,$morseJ);
                        break;
                        case "K":
                            array_push($resultM,$morseK);
                        break;
                        case "L":
                            array_push($resultM,$morseL);
                        break;
                        case "M":
                            array_push($resultM,$morseM);
                        break;
                        case "N":
                            array_push($resultM,$morseN);
                        break;
                        case "O":
                            array_push($resultM,$morseO);
                        break;
                        case "P":
                            array_push($resultM,$morseP);
                        break;
                        case "Q":
                            array_push($resultM,$morseQ);
                        break;
                        case "R":
                            array_push($resultM,$morseR);
                        break;
                        case "S":
                            array_push($resultM,$morseS);
                        break;
                        case "T":
                            array_push($resultM,$morseT);
                        break;
                        case "U":
                            array_push($resultM,$morseU);
                        break;
                        case "V":
                            array_push($resultM,$morseV);
                        break;
                        case "W":
                            array_push($resultM,$morseW);
                        break;
                        case "X":
                            array_push($resultM,$morseX);
                        break;
                        case "Y":
                            array_push($resultM,$morseY);
                        break;
                        case "Z":
                            array_push($resultM,$morseZ);
                        break;
                    }
                    $validation=1;
                }
                elseif(ord($letters[$y])>=97&&ord($letters[$y])<=122)
                {
                    switch($letters[$y])
                    {
                        case "a":
                            array_push($resultM,$morseA);
                        break;
                        case "b":
                            array_push($resultM,$morseB);
                        break;
                        case "c":
                            array_push($resultM,$morseC);
                        break;
                        case "d":
                            array_push($resultM,$morseD);
                        break;
                        case "e":
                            array_push($resultM,$morseE);
                        break;
                        case "f":
                            array_push($resultM,$morseF);
                        break;
                        case "g":
                            array_push($resultM,$morseG);
                        break;
                        case "h":
                            array_push($resultM,$morseH);
                        break;
                        case "i":
                            array_push($resultM,$morseI);
                        break;
                        case "j":
                            array_push($resultM,$morseJ);
                        break;
                        case "k":
                            array_push($resultM,$morseK);
                        break;
                        case "l":
                            array_push($resultM,$morseL);
                        break;
                        case "m":
                            array_push($resultM,$morseM);
                        break;
                        case "n":
                            array_push($resultM,$morseN);
                        break;
                        case "o":
                            array_push($resultM,$morseO);
                        break;
                        case "p":
                            array_push($resultM,$morseP);
                        break;
                        case "q":
                            array_push($resultM,$morseQ);
                        break;
                        case "r":
                            array_push($resultM,$morseR);
                        break;
                        case "s":
                            array_push($resultM,$morseS);
                        break;
                        case "t":
                            array_push($resultM,$morseT);
                        break;
                        case "u":
                            array_push($resultM,$morseU);
                        break;
                        case "v":
                            array_push($resultM,$morseV);
                        break;
                        case "w":
                            array_push($resultM,$morseW);
                        break;
                        case "x":
                            array_push($resultM,$morseX);
                        break;
                        case "y":
                            array_push($resultM,$morseY);
                        break;
                        case "z":
                            array_push($resultM,$morseZ);
                        break;
                    }
                    $validation=1;   
                }
                elseif(ord($letters[$y])==33||ord($letters[$y])==63||ord($letters[$y])==32)
                {
                    switch($letters[$y])
                    {
                        case "?":
                            array_push($resultM,$morseQuest);
                        break;
                        case "!":
                            array_push($resultM,$morseAdm);
                        break;
                        case " ":
                            array_push($resultM,"/");
                        break;
                    }
                    $validation=1;
                }
                elseif(ord($letters[$y])>=48&&ord($letters[$y])<=57)
                {
                    switch($letters[$y])
                    {
                        case "0":
                            array_push($resultM,$morse0);
                        break;
                        case "1":
                            array_push($resultM,$morse1);
                        break;
                        case "2":
                            array_push($resultM,$morse2);
                        break;
                        case "3":
                            array_push($resultM,$morse3);
                        break;
                        case "4":
                            array_push($resultM,$morse4);
                        break;
                        case "5":
                            array_push($resultM,$morse5);
                        break;
                        case "6":
                            array_push($resultM,$morse6);
                        break;
                        case "7":
                            array_push($resultM,$morse7);
                        break;
                        case "8":
                            array_push($resultM,$morse8);
                        break;
                        case "9":
                            array_push($resultM,$morse9);
                        break;
                    }
                    $validation=1;
                }
                elseif($validation==0)
                {
                    $fail=1;
                }
            }
            if($fail==0)
            {
                $i=0;
                echo "<h3>El texto introducido fue:</h3><br>";
                foreach($letters as $key => $toTranslate)
                {
                    echo strtoupper($letters[$i]);
                    $i++;
                }
                echo "<br><br>";
                $i=0;
                echo "<h3>Tu traducción es:</h3><br>";
                foreach($resultM as $key => $toTranslate)
                {
                    echo $resultM[$i];
                    echo " ";
                    $i++;
                }
                echo "<br><br>";
            }
            else
            {
                echo "<h2>No se pueden traducir caracteres especiales, intenta de nuevo.</h2>";
            }
        }
    echo "<br><br>";
    echo "<button type="."submit".">Regresar</button>";
    echo "</table>";
?>