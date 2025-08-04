<?php
session_start();

include '../banco/banco.php';

//Definindo fuso horário
date_default_timezone_set('America/Sao_Paulo');

if(!empty($_POST['estrela'])){

    //Dados do formulário
    $estrela = filter_input(INPUT_POST, 'star', FILTER_DEFAULT);
    $mensagem = filter_input(INPUT_POST, 'mensagem', FILTER_DEFAULT);
    $data_avaliacao = date("Y-m-d H:m");

    $query_avaliacao = "INSERT INTO avaliacoes (nota_avaliacao, comentario_avaliacao, data_avaliacao) 
        VALUES (:nota_avaliacao, :comentario_avaliacao, :data_avaliacao)";

        $cad_avaliacao = $conn->prepare($query_avaliacao);
        $cad_avaliacao->bindParam("", $estrela, PDO::PARAM_INT);
        
        if($cad_avaliacao->execute()){
            $_SESSION['msg'] = "<p style='color: gree'>Registrado com sucesso!</p>";
        }else{
            $_SESSION['msg'] = "<p style='color: #f00'>Não foi possivel registrar!</p>";
        }
        
}else{
    $_SESSION['msg'] = "<p style='color: #f00'>Favor selecionar ao menos 1 estrela!</p>";
    header('location: index.php');
}


?>