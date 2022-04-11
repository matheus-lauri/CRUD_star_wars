<?php

require './classes/Jedi.php';

    if (isset($_GET ['codjed'])){
        if(is_numeric( $_GET ['codjed'])){
            $jedi = new Jedi();
        $jedi->eliminar($_GET ['codjed']);
        }
    }

    header("Location: jedi.php");
    exit();

?>