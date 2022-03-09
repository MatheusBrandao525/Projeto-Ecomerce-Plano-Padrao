<?php 

    $servidor ="localhost";
    $usuario ="root";
    $senha ="";
    $banco ="db_space_info";

    $cn = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);

?>