<?php
include 'paginas/cabecalho.php';

if (isset($_SESSION['login']) && $_SESSION['login'] == 1){
    if (isset($_GET['p'])){
        if($_GET['p'] == 'listar'){
            include 'usuarios/listar_usuarios.php';
        }elseif($_GET['p'] == 'exibir'){
            include 'usuarios/perfil_usuario.php';
        }elseif($_GET['p'] == 'editar' || $_GET['p'] == 'salvar'){
            include 'usuarios/editar_cadastro.php';
        }elseif($_GET['p'] == 'excluir'){
            include 'usuarios/deletar_usuario.php';
        }
    }else{
        include 'usuarios/listar_usuarios.php';
    }
}else{
     if (isset($_GET['p'])){
        if($_GET['p'] == 'novo' || $_GET['p'] == 'inserir'){
            include 'usuarios/cadastrar_usuario.php';
        }elseif($_GET['p'] == 'listar'){
            include 'sessao/login.php';
        }
    }else{
        include 'sessao/login.php';
    }
}

include 'paginas/rodape.php';

?>