<?php

require './classes/Mandalorianos.php';

    if (isset($_GET ['codman'])){
        if(is_numeric( $_GET ['codman'])){
            $man = new Mandalorianos();
        $man->eliminar($_GET ['codman']);
        }
    }

    header("Location: mandalorianos.php");
    exit();

?>