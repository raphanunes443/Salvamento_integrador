<main>

  <?php
    $cpf = $_GET['cpf'];
    $resultado = $conn->query("SELECT * FROM usuarios WHERE cpf='$cpf'");
    $contato = $resultado->fetch_assoc();
  ?>

    <div class="page-title light-background">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Perfil de <?= $contato['nome_usuario']; ?> </h1>
        <nav class="breadcrumbs">
        </nav>
      </div>
    </div>

    <section id="instructor-profile" class="instructor-profile section">

      <div class="container">
        <div class="row">

          <div class="col-lg-12">
            <div class="instructor-hero-banner">

              <div class="hero-content">
                <div class="instructor-avatar perfil-top">
                  <img src="imagens/<?= $contato['avatar_url'] ?>" alt="Instructor" class="img-fluid">
                </div>
                <div class="instructor-info">
                  <h2> <?= $contato['nome_usuario']; ?> </h2>
                  <p class="title">Gênero: <?php if($contato['genero_cliente'] == 'M'){echo "Masculino";}elseif($contato['genero_cliente'] == 'F'){echo "Feminino";}else{echo "Não informado";} ?> </p>
                  <p class="title"><?= $contato['categorias_usuario']; ?></p>
                  <div class="credentials">
                    <span class="credential">
                      <div class="contact-item">
                        <i class="bi bi-envelope"></i>
                        <span> <?= $contato['email']; ?> </span>
                      </div>
                    </span>
                  </div>
                  <div class="credentials">
                    <span class="credential">
                      <div class="contact-item">
                        <i class="bi bi-telephone"></i>
                        <span><a href="https://wa.me/+55<?= $contato['telefone_usuario'];?>" target="_blank"><?= $contato['telefone_usuario'];?></a> </span>
                      </div>
                    </div>
                    </span>
                  <div class="credentials">
                    <span class="credential">
                      <div class="contact-item">
                        <i class="bi bi-geo-alt"></i>
                        <span> <?= $contato['bairro'] ?>, <?= $contato['cidade'] ?>, <?= $contato['estado'] ?> </span>
                      </div>
                    </div>
                  <div class="tab-pane fade show active" id="instructor-profile-about" role="tabpanel">
                  <div class="about-content">
                    <div class="bio-section">
                      <h4>Biografia</h4>
                      <p> <?= $contato['bio_usuario']; ?> </p>
                    </div>

                </div>
              </div>
            </div>
          </div>

        </div>
      </div>

    </section>

  </main>