<?php 

    session_start();
    include 'conexao.php';

    $nomeUser = $_POST['txtnomedep'];
    $emailUser = $_POST['txtemaildep'];
    $depoimento = $_POST['txtdepoimento'];

   /* date_default_timezone_set('America/Sao_Paulo');
    $data = date("d/m/y");
    $hora = date('H:i');
*/
    /*
    echo $data;
    echo '</br>';
    echo $nomeUser;
    echo '</br>';
    echo $emailUser;
    echo '</br>';
        */


    if(empty($nomeUser)|| empty($emailUser) || empty($depoimento)){
        header('location:erro1.php');
    }

    try{
        $inserirDepoimento= $cn->query("INSERT INTO tbl_depoimento(nome_usuario, dsp_email, dsp_depoimento) VALUES 
        ('$nomeUser','$emailUser','$depoimento')");
        header('location:left-sidebar.php');
    
    }catch (PDOExenption $e){
        header('location:erro.php');
    }




?>