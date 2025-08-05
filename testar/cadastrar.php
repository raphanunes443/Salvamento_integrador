<!DOCTYPE html>
<html lang="pt-br">

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
  <link href="style/style.css" rel="stylesheet">

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

    include('../banco/conexao.php');
    if ($_GET['p']=='inserir'){
    
        $cpf = $_POST['cpf']; 
        $nome = $_POST['nome']; 
        $senha = hash('md2',$_POST['senha']); 
        $telefone = $_POST['telefone']; 
        $email = $_POST['email']; 
        $dtnascimento = $_POST['dtnascimento'];
        $bio_usuario = $_POST['bio'];
        $tipo_usuario = $_POST['tipo_usuario'];
        $genero_usuario = $_POST['genero_usuario'];
        $categorias = $_POST['categorias'];
        $cep = $_POST['cep'];
        $rua = $_POST['rua'];
        $bairro = $_POST['bairro'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['uf'];
        $numero = $_POST['numero'];
        $complemento = $_POST['complemento'];
        $avatar = '20250726013042.jpg'; //imagem padrão

        //Atualizar imagem
        if($_FILES["url_perfil"]["error"] == UPLOAD_ERR_OK){
            include('../usuarios/save.php');  
            $avatar = $nomeArquivoNovo;
        }
        
        $sql = "INSERT INTO usuarios (cpf, nome_usuario, senha_usuario, telefone_usuario, email, data_nascimento, bio_usuario, cep, rua, bairro, cidade, estado, numero, complemento, tipo_usuario, genero_cliente, avatar_url, categorias_usuario) 
                            VALUES ('$cpf', '$nome', '$senha', '$telefone',  '$email',  '$dtnascimento', '$bio_usuario', '$cep', '$rua', '$bairro', '$cidade', '$estado', '$numero', '$complemento', '$tipo_usuario', '$genero_usuario', '$avatar', '$categorias')"; 
                   
        if ($conn->query($sql) === TRUE){ 
        echo "Contato cadastrado com sucesso!<br>"; 
        echo '<a href="index.php">Voltar</a>'; 
        } else { 
        echo "Erro: " . $sql . "<br>" . $conn->error; 
        }
    }if($_GET['p'] == 'novo'){
?>

<body>

  <div class="container">
      <div class='enrollment-form-wrapper'>
      <form action="cadastrar.php?p=inserir" method="POST" enctype="multipart/form-data">
      <div class="">
          <label class="form-label">CPF </label>
          <input type="text" name="cpf" required class="form-control">
      </div>
      <div class="mt-2">
          <label class="form-label">Nome </label>
          <input type="text" name="nome" required class="form-control">
      </div>
      <div>
          <label class="form-label">Senha </label>
          <input type="password" name="senha" required class="form-control">
      </div>
      <div>
          <label class="form-label">Telefone </label>
          <input type="phone" name="telefone" required class="form-control">
      </div>
      <div>
          <label class="form-label">Email </label>
          <input type="email" name="email" required class="form-control">
      </div>
      <div>
          <label class="form-label">Data de Nascimento </label>
          <input type="date" name="dtnascimento" required class="form-control">
      </div>
      <div>
          <input type="hidden" name="tipo_usuario" value=0>
      </div>
      <div class="row mb-4">
        <div>
          <div>
          <label class="form-label">Gênero </label>
          <!--<input type="text" name="genero_usuario" palceholder="genero" list="faixa" required>
          <datalist id="faixa">-->
            <select name="genero_usuario" class="form-select form-control">
              <option value="M">Masculino</option>
              <option value="F">Feminino</option>
              <option value="Outro">Outros</option>
      </select>
          </div>
        </div>
      </div>
      <div>
      <div>
          <label class="form-label">Categorias de trabalho </label>
          <input type="text" name="categorias" required class="form-control">
      </div>

          <!--        API         -->

      <div class="frm-group">
          <label class="form-label">CEP</label>
          <input type="text" name="cep" id="cep" onblur="pesquisacep(this.value);" maxlength="8" required class="form-control"/>
      </div>
    
    <div class="frm-group">
        <label class="form-label">Rua</label>
        <input type="text" name="rua" id="rua" required class="form-control"/>
      </div>
      
      <div class="frm-group">
        <label class="form-label">Bairro</label>
        <input type="text" name="bairro" id="bairro" required class="form-control"/>
      </div>
      
      <div class="frm-group">
        <label class="form-label">Cidade</label>
        <input type="text" name="cidade" id="cidade" required class="form-control"/>
      </div>
      
      <div class="frm-group">
        <label class="form-label">Estado</label>
        <input type="text" name="uf" id="uf" required class="form-control"/>
      </div>

      <div class="frm-group">
        <label class="form-label">Número</label>
        <input type="text" name="numero" id="numero" required class="form-control"/>
      </div>

      <div class="frm-group">
        <label class="form-label">Complemento</label>
        <input type="text" name="complemento" id="complemento" class="form-control"/>
      </div>
      <div>
          <br><label class="form-label">Biografia </label><br>
          <textarea id="bio" name="bio" rows="6" cols="45" required class="form-control"></textarea>
      </div>
      <div>
          <label class="form-label">Foto de perfil </label>
          <img src="../imagens/<?php echo $contato['avatar_url'];?>" alt=""><br>
          <input type="file" name="url_perfil" id="url_perfil" accept="image/*">
      </div>
      
      <button type="submit" class="btn btn-primary">Cadastrar</button>
      <a href="index.php" class="btn btn-outline-dark">Cancelar</a>
      </form>

      <script>
  function pesquisacep(valor) {

      // Nova variável "cep" somente com dígitos.
      var cep = valor.replace(/\D/g, '');

      // Verifica se campo cep possui valor informado.
      if (cep != "") {

          // Expressão regular para validar o CEP.
          var validacep = /^[0-9]{8}$/;

          // Valida o formato do CEP.
          if (validacep.test(cep)) {

              // Preenche os campos com "..." enquanto consulta webservice.
              document.getElementById('rua').value = "...";
              document.getElementById('bairro').value = "...";
              document.getElementById('cidade').value = "...";
              document.getElementById('uf').value = "...";

              // Cria um elemento javascript.
              var script = document.createElement('script');

              // Sincroniza com o callback.
              script.src = 'https://viacep.com.br/ws/' + cep + '/json/?callback=meu_callback';

              // Insere script no documento e carrega o conteúdo.
              document.body.appendChild(script);

          } //end if.
          else {
              //cep é inválido.
              alert("Formato de CEP inválido");
              limpa_formulario_cep();
              
          }
      } // end if.
      else {
          // cep sem valor, limpa formulário.
          limpa_formulario_cep();
      }
  }

  function limpa_formulario_cep() {
      //Limpa valores do formulário de cep.
      document.getElementById('rua').value = ("");
      document.getElementById('bairro').value = ("");
      document.getElementById('cidade').value = ("");
      document.getElementById('uf').value = ("");
  }

  function meu_callback(conteudo) {
      if (!("erro" in conteudo)) {
          // Atualiza os campos com os valores.
          document.getElementById('rua').value = (conteudo.logradouro);
          document.getElementById('bairro').value = (conteudo.bairro);
          document.getElementById('cidade').value = (conteudo.localidade);
          document.getElementById('uf').value = (conteudo.uf);
      } //end if.
      else {
          // CEP não Encontrado.
          limpa_formulario_cep();
          alert("CEP não encontrado.");
      }
  }
  </script>
  <?php
  }
  ?>
  </div>
  </div>

  </main>           <!--  fim main  -->
  
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
