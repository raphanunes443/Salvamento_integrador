<?php
include 'banco/banco.php';

$sql_page_county_query = "SELECT COUNT(*) as c FROM usuarios";
$resultado_pages = $conn->query($sql_page_county_query);

$sql_pages_count = $resultado_pages->fetch_assoc();
$page_count = $sql_pages_count['c'];

$page = $_GET['page'] ? intval($_GET['page']) : 1;
$limit = 1;
$page_view = 4;
$offset = ($page - 1) * $limit;

//arredondamento para caso seja número decimal
$page_number = ceil($page_count/ $limit);

$sql_pag_query = "SELECT * FROM usuarios LIMIT {$limit} OFFSET {$offset}";
$resultado = $conn->query($sql_pag_query);

?>
