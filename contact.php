<?php include('./header_footer/header.php'); ?>
<body class="contact-page">

<?php include('./header_footer/header_nav.php'); ?>

  <main class="main">

    <section id="contact" class="contact section">

      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Contact description</p>
      </div>

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-5">

            <div class="info-wrap">
              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h3>Adresse</h3>
                  <p>@street, @country, @ref</p>
                </div>
              </div>

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-telephone flex-shrink-0"></i>
                <div>
                  <h3>Appelez-nous</h3>
                  <p>+221 77 125 42 75</p>
                </div>
              </div>

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h3>Envoyez-nous un courriel</h3>
                  <p>andreyrotondopro@gmail.com</p>
                </div>
              </div>

              <iframe 
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63620.48275556679!2d9.3840718!3d0.3901062!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x10610a5456768e6b%3A0x72e3d0b2ed32fc67!2sLibreville%2C%20Gabon!5e0!3m2!1sfr!2stn!4v1714407344353!5m2!1sfr!2stn" 
              frameborder="0" 
              style="border:0; width: 100%; height: 270px;" 
              allowfullscreen="" 
              loading="lazy" 
              referrerpolicy="no-referrer-when-downgrade">
            </iframe>            
            </div>
          </div>

          <div class="col-lg-7">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
              <div class="row gy-4">

                <div class="col-md-6">
                  <label for="name-field" class="pb-2">Votre Nom</label>
                  <input type="text" name="name" id="name-field" class="form-control" required="">
                </div>

                <div class="col-md-6">
                  <label for="email-field" class="pb-2">Votre Email</label>
                  <input type="email" class="form-control" name="email" id="email-field" required="">
                </div>

                <div class="col-md-12">
                  <label for="subject-field" class="pb-2">Sujet</label>
                  <input type="text" class="form-control" name="subject" id="subject-field" required="">
                </div>

                <div class="col-md-12">
                  <label for="message-field" class="pb-2">Message</label>
                  <textarea class="form-control" name="message" rows="10" id="message-field" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Chargement...</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Votre message a été envoyé. Merci !</div>

                  <button type="submit">Envoyer un message</button>
                </div>

              </div>
            </form>
          </div>

        </div>

      </div>

    </section>

  </main>
  <?php include('./header_footer/footer.php'); ?>
</body>

</html>