<?php 

    $servidor ="localhost";
    $usuario ="root";
    $senha ="1exagon1@";
    $banco ="db_space_info";

    $cn = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);

?>