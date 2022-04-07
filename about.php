<?php require_once("idioma.php");  ?>
<?php include_once("analyticstracking.php") ?>
<?php include 'menu.php'; ?>

<!DOCTYPE html>
<html lang="<?php text("idioma_code"); ?>">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <meta name="description" content="<?php text("og_description"); ?>">
  <meta name="author" content="Photo App World">
  <meta name="theme-color" content="#3A3660">
  <meta name="description" content="<?php text("meta_description"); ?>">
  <meta name="keywords" content="<?php text("meta_keywords"); ?>">

  <meta property="og:site_name" content="Photo App World">
  <meta property="og:title" content="Photo App World" />
  <meta property="og:description" content="<?php text("og_description"); ?>" />
  <meta property="og:image" itemprop="image" content="http://www.photoappworld.com/img/ic_photoappworld_200.png">
  <meta property="og:type" content="website" />

  <title><?php text("index_title"); ?></title>

  <link rel="icon" type="image/png" href="icone.png">

  <!-- Bootstrap core CSS -->
  <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="responsive.css" rel="stylesheet">
  <link href="style.css" rel="stylesheet">

  <!-- Bootstrap core JavaScript ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="./bootstrap/js/tether.min.js"></script>
  <script src="./bootstrap/js/bootstrap.min.js"></script>
  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <script src="./bootstrap/js/ie10-viewport-bug-workaround.js"></script>
</head>
<header>

</header>

<body>
  <div id="slider">
    <div class="container-fluid p-4" style="margin-top: 120px; background-color: rgb(236, 236, 236); ">
      <!-- <h1 class="display-4"><?php text("about_us"); ?></h1>
		  <p class="lead"><?php text("about_us_text"); ?></p>  	       -->
      <div class="container">
        <div class="row d-flex align-items-center">
          <div class="col-lg-5" style="margin-top: 60px">
            <img src="img/logo-PAW-v.png" class="rounded-circle mx-auto d-block  " style="width: 15rem; height: 15rem; margin-bottom: 50px">
          </div>
          <div class="col-lg-6 ">
            <h1 class="display-4 text-left" style="font-family: 'Bebas Neue', cursiva ;color: rgb(80, 80, 80);font-weight: bold; font-size: 60px; font-weight: normal">PHOTO APP WORLD</h1>
            <h5 class="text-justify" style="color: rgb(112, 112, 112);font-family: Arial, Helvetica, sans-serif; font-size: 22px;">Nós somos uma startup focada no desenvolvimento de apps de fotografia para smartphones. Desde 2012 desenvolvemos apps para as loja Google Play and Play Store. <br>
              Nosso app de maior sucesso é o "My Fake Look", que conta com mais de trinta milhões de downloads. <br>
              Nós trabalhamos com procesamento digital de imagens e possuímos uma biblioteca personalizada que permite propoci onar aos nossos usuários soluções unicas, encontrada apenas nos nossos apps.
            </h5>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="address">
    <div class="container">
      <div class="row ">
        <div class="col-lg-8 ">
          <h1 class="text-dark text-left" style="margin-top: 120px;font-family: 'Bebas Neue', cursiva ;font-weight: bold; font-size: 50px; font-weight: normal">Endereço</h1>
          <h5 class="text-secondary" style="margin-bottom: 30px;color: rgb(112, 112, 112);font-family: Arial, Helvetica, sans-serif; font-size: 22px;">Av.Praia de Itapoan, 949. Loja 09 Quadra A 17. Vilas do Atlântico. <br> Lauro de Freitas, BAHIA, Cep 24700-000</h5>
        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3889.326322936587!2d-38.30265748517342!3d-12.886726161601496!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7163de1f6d7496b%3A0x73f8d5a415138d29!2sAv.%20Praia%20de%20Itapu%C3%A3%2C%20949%20-%20Vilas%20do%20Atl%C3%A2ntico%2C%20Lauro%20de%20Freitas%20-%20BA%2C%2042700-000!5e0!3m2!1sen!2sbr!4v1636243339306!5m2!1sen!2sbr" width="100%" height="350" style="border:0; margin-bottom: 100px" allowfullscreen="" loading="lazy"></iframe>
        <!-- <img src="img/mapa.png" class="rounded img-fluid" alt=""> -->
      </div>
    </div>
  </div>
</body>
<footer class="">
  <div id="linha" style="width: 100%; border-bottom: 1px solid #000000;">
  </div>
  <p class="text-center" style="margin: 3 3 3 3">Photo World App &copy; Company 2017</p>
</footer>

</html>