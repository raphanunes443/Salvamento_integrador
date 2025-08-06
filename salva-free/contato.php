<?php
  include("paginas/cabecalho.php");
?>

  <main class="main">

    

          

             <!-- Contact Section -->
<section id="contact" class="contact-section py-5 bg-light">
  <div class="container">
    <div class="row justify-content-center mb-5 text-center">
      <div class="col-lg-8">
        <h2 class="fw-bold">Entre em Contato com a FreeFlight</h2>
        <p class="text-muted">Conecte-se conosco para dúvidas, sugestões ou oportunidades. Nossa equipe está pronta para ajudar você a decolar na carreira freelancer.</p>
      </div>
    </div>

    <div class="row gy-4">
      <!-- Contact Info Cards -->
      <div class="col-md-4">
        <div class="contact-card text-center p-4 bg-white shadow-sm rounded">
          <div class="icon-box mb-3">
            <i class="bi bi-envelope fs-2 text-primary"></i>
          </div>
          <h5>Email</h5>
          <p>contato@freeflight.com</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="contact-card text-center p-4 bg-white shadow-sm rounded">
          <div class="icon-box mb-3">
            <i class="bi bi-telephone fs-2 text-primary"></i>
          </div>
          <h5>Telefone</h5>
          <p>+55 (11) 99999-0000</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="contact-card text-center p-4 bg-white shadow-sm rounded">
          <div class="icon-box mb-3">
            <i class="bi bi-clock fs-2 text-primary"></i>
          </div>
          <h5>Horário de Atendimento</h5>
          <p>Seg a Sex: 9h às 18h</p>
        </div>
      </div>
    </div>

    <!-- Contact Form -->
    <div class="row justify-content-center mt-5">
      <div class="col-lg-8">
        <div class="contact-form-container bg-white p-4 shadow rounded" data-aos="fade-up" data-aos-delay="400">
          <h4 class="mb-3">Fale com a Gente</h4>
          <form action="forms/contact.php" method="post" class="php-email-form">
            <div class="row">
              <div class="col-md-6 mb-3">
                <input type="text" name="name" class="form-control" placeholder="Seu Nome" required>
              </div>
              <div class="col-md-6 mb-3">
                <input type="email" name="email" class="form-control" placeholder="Seu Email" required>
              </div>
            </div>
            <div class="mb-3">
              <input type="text" name="subject" class="form-control" placeholder="Assunto" required>
            </div>
            <div class="mb-3">
              <textarea name="message" rows="5" class="form-control" placeholder="Escreva sua mensagem aqui..." required></textarea>
            </div>

            <div class="mb-3 text-center">
              <button type="submit" class="btn btn-primary px-4">Enviar Mensagem</button>
            </div>

            <div class="social-links text-center mt-4">
              <a href="#" class="mx-2"><i class="bi bi-twitter fs-5"></i></a>
              <a href="#" class="mx-2"><i class="bi bi-facebook fs-5"></i></a>
              <a href="#" class="mx-2"><i class="bi bi-instagram fs-5"></i></a>
              <a href="#" class="mx-2"><i class="bi bi-linkedin fs-5"></i></a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

              </form>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /Contact Section -->

  </main>

  <?php
  include("paginas/rodape.php");
?>

  