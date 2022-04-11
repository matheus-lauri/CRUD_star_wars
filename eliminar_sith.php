<?php

require './classes/Sith.php';

    if (isset($_GET ['codsit'])){
        if(is_numeric( $_GET ['codsit'])){
            $sit = new Sith();
        $sit->eliminar($_GET ['codsit']);
        }
    }

    header("Location: sith.php");
    exit();

?>