<section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>Contact</h2>
        <p>Contactez moi</p>
      </div>

      <div class="row mt-2">

        <div class="col-md-6 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-map"></i>
            <h3>Mon adresse</h3>
            <p>Angers 49000</p>
          </div>
        </div>

        <div class="col-md-6 mt-4 mt-md-0 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-share-alt"></i>
            <h3>Réseaux sociaux</h3>
            <div class="social-links">
              <a target="_blank" href="https://twitter.com/NathanChev69021" class="twitter"><i class="bi bi-twitter"></i></a>
              <a target="_blank" href="https://www.linkedin.com/in/nathan-chevrollier-3ba923277/" class="linkedin"><i class="bi bi-linkedin"></i></a>
              <a target="_blank" href="https://github.com/NathanChevrollier" class="linkedin"><i class="bi bi-github"></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-envelope"></i>
            <h3>Email</h3>
            <p>nathan.chevrollier17pro@gmail.com</p>
          </div>
        </div>
        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-phone-call"></i>
            <h3>Téléphone</h3>
            <p>+33 00 00 00 00 00</p>
          </div>
        </div>
      </div>

      <form action="forms/contact2.php" method="post" role="form" class="php-email-form mt-4">
        <div class="row">
          <div class="col-md-6 form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="Votre Nom" required>
          </div>
          <div class="col-md-6 form-group mt-3 mt-md-0">
            <input type="email" class="form-control" name="email" id="email" placeholder="Votre Email" required>
          </div>
        </div>
        <div class="form-group mt-3">
          <input type="text" class="form-control" name="subject" id="subject" placeholder="Sujet" required>
        </div>
        <div class="form-group mt-3">
          <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
        </div>
        <div class="my-3">
          <div class="loading">Chargement ...</div>
          <div class="error-message">Erreur !</div>
          <div class="sent-message">Votre message a été envoyé. Merci !</div>
        </div>
        <div class="text-center"><button type="submit">Envoyer un message</button></div>
      </form>

    </div>
  </section>