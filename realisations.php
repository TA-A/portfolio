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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|KoHo:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i|Merriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet"> 
</head>
<body>
  <!-- navbar -->
<?php include('header.php') ?>

<!----------------------------------------------------------------------
------------------------- Carrousel -------------------------->

  <main role="main">

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active forme"></li>
        <li data-target="#myCarousel" data-slide-to="1" class="forme"></li>
        <li data-target="#myCarousel" data-slide-to="2" class="forme"></li>
      </ol>
      <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="first-slide" src="public/images/bigCDV.png" alt="First slide">
            <div class="container">
            </div>
          </div>
          <div class="carousel-item">
            <img class="second-slide" src="public/images/bigPharma_net.png" alt="Second slide">
            <div class="container">
            </div>
          </div>
          <div class="carousel-item">
            <img class="third-slide" src="public/images/bigAllocine.png" alt="Third slide">
            <div class="container">
          </div>
          </div>
      </div>
    </div>
    <!----------------------------------------------------------------------
    -------------------------- Liste des projets --------------------------->
    <div class="album py-5">
      <div class="container">

          

        <!-- <div class="col-md-6">
          <ul>
            <li>
              <a href="#">Développement web</a>
            </li>
            <li>
              <a href="#">Graphisme</a>
            </li>
          </ul>
        </div> -->

        <!--test-->

    <div class="album py-5">
      <div class="container">

        <div class="row">
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
            <a href="https://thecleaureliea.promo-24.codeur.online/Portfolio/projets/pharma_net.php"><svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" xmlns:xlink= "http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail" style="background-image: url('https://thecleaureliea.promo-24.codeur.online/Portfolio/public/images/pharma_net.png'); background-repeat: no-repeat; background-size: cover; background-position: center;"><rect x="0" y="0" height="100%" width="100%" fill="black"/><title>Placeholder</title><text x="10%" y="50%" fill="#eceeef" dy=".3em">Pharma net</text></svg></a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
            <a href="https://thecleaureliea.promo-24.codeur.online/Portfolio/projets/uploadit.php"><svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" xmlns:xlink= "http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail" style="background-image: url('https://thecleaureliea.promo-24.codeur.online/Portfolio/public/images/uploadit.png'); background-repeat: no-repeat; background-size: cover; background-position: center;"><rect x="0" y="0" height="100%" width="100%" fill="black"/><title>Placeholder</title><text x="10%" y="50%" fill="#eceeef" dy=".3em">UploadIt</text></svg></a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
            <a href="https://thecleaureliea.promo-24.codeur.online/Portfolio/projets/memegenerator.php"><svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" xmlns:xlink= "http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail" style="background-image: url('https://thecleaureliea.promo-24.codeur.online/Portfolio/public/images/memegenerator.png'); background-repeat: no-repeat; background-size: cover; background-position: center;"><rect x="0" y="0" height="100%" width="100%" fill="black"/><title>Placeholder</title><text x="10%" y="50%" fill="#eceeef" dy=".3em">Générateur de memes</text></svg></a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
            <a href="https://thecleaureliea.promo-24.codeur.online/Portfolio/projets/allocine.php"><svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" xmlns:xlink= "http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail" style="background-image: url('https://thecleaureliea.promo-24.codeur.online/Portfolio/public/images/allocine.png'); background-repeat: no-repeat; background-size: cover; background-position: center;">><rect x="0" y="0" height="100%" width="100%" fill="black"/><title>Placeholder</title><text x="10%" y="50%" fill="#eceeef" dy=".3em">Allocine</text></svg></a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
            <a href="https://thecleaureliea.promo-24.codeur.online/Portfolio/projets/cdv.php"><svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" xmlns:xlink= "http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail" style="background-image: url('https://thecleaureliea.promo-24.codeur.online/Portfolio/public/images/CDV.png'); background-repeat: no-repeat; background-size: cover; background-position: center;">><rect x="0" y="0" height="100%" width="100%" fill="black"/><title>Placeholder</title><text x="10%" y="50%" fill="#eceeef" dy=".3em">Carte de vœux de Noël</text></svg></a>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
            <a href="https://thecleaureliea.promo-24.codeur.online/Portfolio/projets/blueasy.php"><svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" xmlns:xlink= "http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail" style="background-image: url('https://thecleaureliea.promo-24.codeur.online/Portfolio/public/images/blueasy.png'); background-repeat: no-repeat; background-size: cover; background-position: center;">><rect x="0" y="0" height="100%" width="100%" fill="black"/><title>Placeholder</title><text x="10%" y="50%" fill="#eceeef" dy=".3em">Blueasy</text></svg></a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
            <a href="https://thecleaureliea.promo-24.codeur.online/Portfolio/projets/langerba.php"><svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" xmlns:xlink= "http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail" style="background-image: url('https://thecleaureliea.promo-24.codeur.online/Portfolio/public/images/langerba.png'); background-repeat: no-repeat; background-size: cover; background-position: center;">><rect x="0" y="0" height="100%" width="100%" fill="black"/><title>Placeholder</title><text x="10%" y="50%" fill="#eceeef" dy=".3em">Langerba</text></svg></a>
            </div>
          </div>
          <!--<div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" xmlns:xlink= "http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><image xlink:href="public/images/screenshot.png" x="0" y="0" height="100%" width="100%"/><rect x="0" y="0" height="100%" width="100%" fill="black"/><title>Placeholder</title><text x="10%" y="50%" fill="#eceeef" dy=".3em">Screen</text></svg>
            </div>
          </div>-->

          <!--<div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" xmlns:xlink= "http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><image xlink:href="public/images/avatar.png" x="0" y="0" height="100%" width="100%"/><rect x="0" y="0" height="100%" width="100%" fill="black"/><title>Placeholder</title><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
            </div>
          </div>-->
        </div>
      </div>
    </div>

        <!--fin test-->

          <!--<div class="row">
            <div class="col-md-3">
              <div class="card mb-4 box-shadow">
                <img class="card-img" src="public/images/wallpaper_GOCnb.png" alt="Card image cap">
                <div class="overlay">
                  <div class="bottom-left">Carte de voeux intéractive</div>
                  <div class="bottom-left2">Développement web | 2018</div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card mb-4 box-shadow">
                <img class="card-img" src="public/images/wallpaper_GOC.jpg" alt="Card image cap">
                <div class="bottom-left">Développement web | 2018</div>
                <div class="bottom-left2">Carte de voeux intéractive</div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card mb-4 box-shadow">
                <img class="card-img" src="public/images/pharma_net.png" alt="Card image cap">
                <div class="bottom-left">Développement web | 4    018</div>
                <div class="bottom-left2">Carte de voeux intéractive</div>
              </div>
            </div>
            
            <div class="col-md-3">
              <div class="card mb-4 box-shadow">
                <img class="card-img" src="public/images/allocine.png" alt="Card image cap">
                <div class="bottom-left">Développement web | 2018</div>
                <div class="bottom-left2">Carte de voeux intéractive</div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card mb-4 box-shadow">
                <img class="card-img" src="public/images/CDV.png" alt="Card image cap">
                <div class="bottom-left">Développement web | 2018</div>
                <div class="bottom-left2">Carte de voeux intéractive</div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card mb-4 box-shadow">
                <img class="card-img" src="public/images/blueasy.png" alt="Card image cap">
                <div class="bottom-left">Développement web | 2018</div>
                <div class="bottom-left2">Carte de voeux intéractive</div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="card mb-4 box-shadow">
                <img class="card-img" src="public/images/langerba.png" alt="Card image cap">
                <div class="bottom-left">Développement web | 2018</div>
                <div class="bottom-left2">Carte de voeux intéractive</div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card mb-4 box-shadow">
                <img class="card-img" src="public/images/screenshot.png" alt="Card image cap">
                <div class="bottom-left">Développement web | 2018</div>
                <div class="bottom-left2">Carte de voeux intéractive</div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card mb-4 box-shadow">
                <img class="card-img" src="public/images/avatar.png" alt="Card image cap">
                <div class="bottom-left">Développement web | 2018</div>
                <div class="bottom-left2">Carte de voeux intéractive</div>
              </div>
            </div>
          </div>
        </div>
      </div>-->
</main>

    <script src="public/js/realisations.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
    
</html>