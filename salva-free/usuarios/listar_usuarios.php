


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
                  <a href="usuario.php?p=exibir&cpf=<?= $linha['cpf']?>" class="btn-view">Ver Perfil</a>
                </div>
              </div>
            </div>
          </div>


      <?php
      }
      ?>         
        </div>

      </div>
      </section>
  </main>
