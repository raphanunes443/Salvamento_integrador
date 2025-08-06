<?php
include 'paginas/cabecalho.php';
include 'paginacao.php';
?>

<main>

  <section id="instructors" class="instructors section">

      <div class="container">

        <div class="row gy-4">
          
    <?php
        $resultado = $conn->query("SELECT * FROM usuarios");
        
        while ($linha = $resultado->fetch_assoc()) {
    ?>

    

          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="instructor-card">
              <div class="instructor-image">
                <td><img src="imagens/<?= $linha['avatar_url'] ?>" class="img-fruid">
              </div>
              <div class="instructor-info">
                <h5> <?= $linha['nome_usuario'] ?> </h5>
                <p class="specialty"><?= $linha['categorias_usuario'] ?></p>
                <p class="description">Bairro <?= $linha['bairro'] ?>, <?= $linha['cidade'] ?>, <?= $linha['estado'] ?></p>
                <p class="description">Gênero: <?php if($linha['genero_cliente'] == 'M'){echo "Masculino";}elseif($linha['genero_cliente'] == 'F'){echo "Feminino";}else{echo "Não informado";} ?></p>
                
                <div class="action-buttons">
                  <a href="usuario.php?p=exibir&id=<?= $linha['cpf']?>" class="btn-view">Ver Perfil</a>
                </div>
              </div>
            </div>
          </div>

      <?php
      }
      ?>

      
      <div class="pagination-wrapper">
              <nav aria-label="Courses pagination">
                <ul class="pagination justify-content-center">

                    <?php
    $primeira_pag = max($page - $page_view, 1);
    $ultima_pag = min($page_number, $page + $page_view);

 for ($p = $primeira_pag; $p <= $ultima_pag; $p++) {
    if($p === $page){
        echo "<li class='page-item active'><a class='page-link' href='#'>{$p}</a></li>";
    }else{
    echo "<li class='page-item'><a class='page-link' href='?page{$p}'>{$p}</a></li>";
    }
}
 ?>

                </ul>
              </nav>
            </div>
        </div>

      </div>
      </section>
  </main>

  <?php
  include 'paginas/rodape.php';
  ?>
