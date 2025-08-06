<?php
include 'paginas/cabecalho.php';

    if (isset($_GET['p'])){
        if($_GET['p'] == 'login'){
            include 'sessao/login.php';
        }
        if($_GET['p'] == 'logout'){
            include 'sessao/logout.php';
        }

    }

include 'paginas/rodape.php';

?>