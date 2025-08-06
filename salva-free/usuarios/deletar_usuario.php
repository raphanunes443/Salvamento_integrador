<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casa e Sabor!</title>
</head>
<body>

<?php
if ($_GET['p']=='excluir'){
    $cpf = $_SESSION['id-excluir']; 
    $sql = "DELETE FROM usuarios WHERE cpf = '$cpf'"; 

    if ($conn->query($sql) === TRUE) { 
        echo "Contato excluído com sucesso!<br>"; 
        echo "<a href='index.php' class='btn btn-primary'>Voltar</a>"; 
    } else { 
        echo "Erro ao excluir: " . $conn->error; 
    } 
}else{
    echo 'Erro ao excluir';
    echo "<a href='usuario.php' class='btn btn-primary'>Voltar</a>"; 
}

?>

</body>
</html>

