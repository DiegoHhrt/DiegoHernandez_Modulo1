<?php

    $button=(isset ($_POST["send"]) && $_POST["send"] !="") ?$_POST["send"]: false;

if($button||(isset($_SESSION["start"])))
{
    if($button)
    {
        $name=(isset($_POST["Name"]) && $_POST["Name"] != "")? $_POST["Name"]:"Inválido";
        $apell=(isset($_POST["Apellido"]) && $_POST["Apellido"] != "")? $_POST["Apellido"]:"Inválido";
        $group=(isset($_POST["Group"]) && $_POST["Group"] != "")? $_POST["Group"]:"Inválido";
        $birth=(isset($_POST["birth"]) && $_POST["birth"] != "")? $_POST["birth"]:"Inválido";
        $mail=(isset($_POST["mail"]) && $_POST["mail"] != "")? $_POST["mail"]:"Inválido";
        $pw=(isset($_POST["passwd"]) && $_POST["passwd"] != "")? $_POST["passwd"]:"Inválido";
        
        session_name("DDDDD");
        session_start();

        $_SESSION['start']=true;
        $_SESSION['nombre']=$name;
        $_SESSION['apellido']=$apell;
        $_SESSION['grupo']=$group;
        $_SESSION['cumple']=$birth;
        $_SESSION['email']=$mail;
        $_SESSION['psswd']=$pw;

        header("location: ./index.php");
    }
    if((isset($_SESSION["start"])))
    {
        echo "ola";
    }

    echo "<br><br><form action='./index.php' method='POST' >
    <button type='submit' name='exit' value='end'>Cerrar sesión</button>
    </form>";
}
elseif(!(isset($_SESSION["start"])))
{
    header("location: ./form.php");
}
elseif(isset($_POST["exit"]))
{
    session_unset();
    session_destroy();
    header("location: ./form.php");
}


?>