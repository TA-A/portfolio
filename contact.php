<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projets</title>
    <!----------------------------------------------------------------------
    ----------------- Page avec ton les projets = Accueil-------------------
    ------------------------------------------------------------------------>
    <link rel="stylesheet" type="text/css" href="public/css/portfolio.css">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.22/dist/vue.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body>
<header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top">
        <a class="navbar-brand" href="#">Thècle-Aurélie Augustin</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Projets<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">A propos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">CV</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Contact</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <section class="contact">
    <div class="col-md-8">
      <h4 class="mb-3">Contact</h4>
      <form class="needs-validation" novalidate>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName"></label>
            <input type="text" class="form-control" id="firstName" placeholder="Prénom" value="" required>
            <div class="invalid-feedback">
              Entrez votre prénom.
            </div>
            <label for="lastName"></label>
            <input type="text" class="form-control" id="lastName" placeholder="Nom" value="" required>
            <div class="invalid-feedback">
              Entrez votre nom.
            </div>
            <label for="email"></label>
          <input type="email" class="form-control" id="email" placeholder="Email" required>
          <div class="invalid-feedback">
            Entrez une adresse mail valide.
          </div>
          </div>
          <div class="col-md-6 mb-3">
          <label for="message"></label>
          <textarea type="text" class="form-control" id="messagge" placeholder="Message" rows="5.5"></textarea>
        </div>
          </div>

        <hr class="mb-4">
        <button class="btn btn-light btn-lg btn-block" type="submit">Validez</button>
      </form>
    </div>
  </div>
  </div>
    </section>

</body>
</html>