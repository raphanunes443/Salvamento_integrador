<?php
    /*$host = 'localhost'; 
    $usuario = 'root'; 
    $senha = NULL; 
    $banco = 'freelancer'; 
    $porta = '3316';*/

    $host = "193.203.175.68";
    $usuario = "u280102213_freeflight";
    $senha = "Senac+0098";
    $banco = "u280102213_freeflight";
    
    $conn = new mysqli($host,$usuario,$senha,$banco); 
    
    if ($conn->connect_error) { 
        die("Conexão falhou: " . $conn->connect_error); 
    }

    ?>