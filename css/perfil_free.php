<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Free-Flight</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Learner
  * Template URL: https://bootstrapmade.com/learner-bootstrap-course-template/
  * Updated: Jul 08 2025 with Bootstrap v5.3.7
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.html" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.webp" alt=""> -->
        <h1 class="sitename">Free-Flight</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.html" class="active">Inicio</a></li>
          <li><a href="sobre.html">Sobre</a></li>
          <li><a href="projetos.html">Projetos</a></li>
          <li><a href="freelancers.html">Freelancers</a></li>
        
          <li><a href="contato.html">Fale conosco!</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="login.html">Cadastro</a>

    </div>
  </header>

  <main>

  <?php
  include '../banco/conexao.php';
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
                <div class="instructor-avatar">
                  <img src="assets/img/education/teacher-7.webp" alt="Instructor" class="img-fluid">
                </div>
                <div class="instructor-info">
                  <h2> <?= $contato['nome_usuario']; ?> </h2>
                  <p class="title">Gênero: <?php if($contato['genero_cliente'] == 'M'){echo "Masculino";}elseif($contato['genero_cliente'] == 'F'){echo "Feminino";}else{echo "Não informado";} ?> </p>
                  <p class="title">Categoria</p>
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
                        <span> <?= $contato['telefone_usuario']; ?> </span>
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
  
  <footer id="footer" class="footer accent-background">

    <div class="container footer-top">
     
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Free_Flight</strong> <span>Todos os direitos reservados.</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
