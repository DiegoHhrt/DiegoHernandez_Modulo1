<?php

    $button1=(isset ($_POST["Birth"]) && $_POST["Birth"] !="") ?$_POST["Birth"]: "Not Selected";
    $button2=(isset ($_POST["Hour"]) && $_POST["Hour"] !="") ?$_POST["Hour"]: "Not Selected";
    if($button1)
    {
        echo "ola";
    }
    elseif($button2)
    {
        echo "adión";
    }

?>