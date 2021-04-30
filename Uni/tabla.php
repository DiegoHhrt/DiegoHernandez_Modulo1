<?php
    $name=(isset($_POST["nombre"])&&$_POST["nombre"]!="")?$_POST["nombre"]:"Inválido";
    $apellP=(isset($_POST["aPaterno"])&&$_POST["aPaterno"]!="")?$_POST["aPaterno"]:"Inválido";
    $apellM=(isset($_POST["aMaterno"])&&$_POST["aMaterno"]!="")?$_POST["aMaterno"]:"Inválido";
    $gender=(isset($_POST["gender"])&&$_POST["gender"]!="")?$_POST["gender"]:"Inválido";
    $age=(isset($_POST["age"])&&$_POST["age"]!="")?$_POST["age"]:"Inválido";
    $email=(isset($_POST["mail"])&&$_POST["mail"]!="")?$_POST["mail"]:"Inválido";
    $phone=(isset($_POST["phone"])&&$_POST["phone"]!="")?$_POST["phone"]:"Inválido";
    $cell=(isset($_POST["cell"])&&$_POST["cell"]!="")?$_POST["cell"]:"Inválido";
    $school=(isset($_POST["from"])&&$_POST["from"]!="")?$_POST["from"]:"Inválido";
    $prom=(isset($_POST["promedio"])&&$_POST["promedio"]!="")?$_POST["promedio"]:"Inválido";
    $first=(isset($_POST["first"])&&$_POST["first"]!="")?$_POST["first"]:"Inválido";
    $second=(isset($_POST["second"])&&$_POST["second"]!="")?$_POST["second"]:"Inválido";

    echo $name;
    echo $apellP;
    echo $apellM;
    echo $gender;
    echo $age;
    echo $email;
    echo $phone;
    echo $cell;
    echo $school;
    echo $prom;
    echo $first;
    echo $second;
?>