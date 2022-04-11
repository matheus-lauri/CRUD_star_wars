<?php

require './classes/Planeta.php';

    if (isset($_GET ['codpla'])){
        if(is_numeric( $_GET ['codpla'])){
            $pla = new Planeta();
        $pla->eliminar($_GET ['codpla']);
        }
    }

    header("Location: planeta.php");
    exit();

?>