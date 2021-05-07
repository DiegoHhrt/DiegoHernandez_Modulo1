<?php
    session_name("DDDDD");
    session_start();
    
    $button=(isset ($_POST["send"]) && $_POST["send"] !="") ?$_POST["send"]: false;

if(isset($_POST["exit"]))
{
    session_unset();
    session_destroy();
    header("location: ./form.php");
}
elseif($button||(isset($_SESSION["start"])))
{
    if($button)
    {
        $name=(isset($_POST["Name"]) && $_POST["Name"] != "")? $_POST["Name"]:"Inválido";
        $apell=(isset($_POST["Apellido"]) && $_POST["Apellido"] != "")? $_POST["Apellido"]:"Inválido";
        $group=(isset($_POST["Group"]) && $_POST["Group"] != "")? $_POST["Group"]:"Inválido";
        $birth=(isset($_POST["birth"]) && $_POST["birth"] != "")? $_POST["birth"]:"Inválido";
        $mail=(isset($_POST["mail"]) && $_POST["mail"] != "")? $_POST["mail"]:"Inválido";
        $pw=(isset($_POST["passwd"]) && $_POST["passwd"] != "")? $_POST["passwd"]:"Inválido";

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
        echo "
        <table border='1'>
            <thead>
                <tr>
                    <th colspan='2'>Información de inicio de sesión</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Nombre completo:</td>
                    <td>".$_SESSION['nombre']." ".$_SESSION['apellido']."</td>
                </tr>
                <tr>
                    <td>Grupo:</td>
                    <td>".$_SESSION['grupo']."</td>
                </tr>
                <tr>
                    <td>Fecha de nacimiento:</td>
                    <td>".$_SESSION['cumple']."</td>
                </tr>
                <tr>
                    <td>Correo electrónico:</td>
                    <td>".$_SESSION['email']."</td>
                </tr>
            </tbody>
        </table>";
    }

    echo "<br><br><form action='./index.php' method='POST' >
    <button type='submit' name='exit' value='end'>Cerrar sesión</button>
    </form>";
}
elseif(!(isset($_SESSION["start"])))
{
    header("location: ./form.php");
}

?>