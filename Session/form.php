<?php

if((isset($_SESSION['start'])))
{
    header('location: ./index.php');
}
else
{
    echo"
    <!DOCTYPE html>
    <html>
        <head>
            <meta charset='UTF-8'>
            <title>Inicio de sesión</title>
        </head>
        <body>
            <form action='./index.php' method='post'>
            <fieldset>
                <legend>Inicio de sesión</legend>
                <label for='Name'>
                    Nombre:  <input type='text' name='Name' placeholder='Nombre(s)' required>
                </label>
                <br><br>
                <label for='Apellido'>
                    Apellido: <input type='text' name='Apellido' placeholder='Apellido(s)' required>
                </label>
                <br><br>
                <label for='Group'>
                    Grupo: <input type='text' name='Group' placeholder='Grupo' required>
                </label>
                <br><br>
                <label for='birth'>";
                
                    echo "Fecha de nacimiento:  <input type='date' name='birth' min='1930-01-01' max='.date('Y-m-d').' required>"; 
                    //var_dump($_SESSION['start']);
                echo "
                </label>
                <br><br>
                <label for='mail'>
                    Correo electrónico: <input type='email' name='mail' placeholder='example@mail.com' required>
                </label>
                <br><br>
                <label for='passwd'>
                    Contraseña: <input type='password' name='passwd' required>
                </label>
                <button type='submit' name='send' value='init'>Iniciar sesión</button>
            </fieldset>
            </form>
        </body>
    </html>";
}
?>