<?php
include('../banco/banco.php');

if($_GET['p'] == 'inserir'){
    $nota_avaliacao = $_POST['nota'];
    $comentario_avaliacao = $_POST['comentario'];
    $data_avaliacao = date("Y-m-d H:m");

    $sql = "INSERT INTO avaliacoes(nota_avaliacao, comentario_avaliacao, data_avaliacao)
            VALUES ('$nota_avaliacao','$comentario_avaliacao','$data_avaliacao')";

    if ($conn->query($sql) === TRUE) { 
        echo "Contato cadastrado com sucesso!<br>"; 
        echo '<a href="add.php?p=novo" class="btn btn-primary">Voltar</a>'; 
        } else { 
        echo "Erro: " . $sql . "<br>" . $conn->error; 
        }
} if($_GET['p'] == 'novo'){
?>

<form action="add.php?p=inserir" method="POST">
        <label>Nota </label>
                <div>
                        <input type="number" name="nota" id="nota">
                </div>
        <label>Comentario </label>
                <div>
                        <input type="text" name="comentario" id="comentario">
                </div>
        <input type="submit">
</form>

<?php
}
?>
