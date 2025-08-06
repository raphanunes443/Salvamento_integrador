<?php



    include('banco/banco.php');
    if (isset($_POST['envio'])){
        $login = $_POST['login'];
        $senha = hash('md2',$_POST['senha']);

            $resultado = $conn->query("SELECT * FROM usuarios WHERE cpf='$login'");
            $usuario = $resultado->fetch_assoc();

        if(($login == $usuario['cpf']) && ($senha == $usuario['senha_usuario'])){
            $_SESSION['login'] = 1;
            $_SESSION['cpf'] = $login;
            header(header: 'location: usuario.php?p=listar');
        }else{
            echo "<script>alert('Login e Senha não conferem!');</script>";
            $_SESSION['login'] = 0;
        }
    }
?>


<main>

    <!-- Enroll Section -->
    <section id="enroll" class="enroll section">

      <div class="container">

        <div class="row">
          <div class="col-lg-8 mx-auto">
            <div class="enrollment-form-wrapper">

              <div class="enrollment-header text-center mb-5">
                <h2>Login</h2>
              </div>

              <form action="usuario.php" class="enrollment-form" method="POST">

                <div class="row mb-4">
                  <div class="">
                    <div class="form-group">
                      <label for="cpf" class="form-label">CPF</label>
                      <input type="text" id="firstName" name="login" class="form-control" required="" autocomplete="given-name">
                    </div>
                  </div>
                </div>
                <div class="row mb-4">
                  <div class="">
                    <div class="form-group">
                      <label for="senha" class="form-label">Senha</label>
                      <input type="password" id="email" name="senha" class="form-control" required="" autocomplete="email">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12 text-center">
                    <button type="submit" name="envio" value="log" class="btn btn-enroll">
                      Entrar
                    </button>
                    <a class="btn btn-enroll" href="usuario.php?p=novo">Cadastrar</a>
                  </div>
                </div>

              </form>

      </div>

  </main>