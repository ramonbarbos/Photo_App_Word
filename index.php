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
    <!-- INICIO DO CAROUSEL -->
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" style="margin-top: 20px;">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./img/linkedin-banner.png" class="w-100 " alt="carousel">
            </div>
        </div>
    </div>
    <!-- FIM DO CAROUSEL -->
    <!-- TITULO -->
    <div class="container-fluid text-center">
        <div class="col-sm-7">
            <h1 style="font-family: 'Bebas Neue', cursiva; font-size: 50px; color: rgb(185, 185, 185); margin: 2%">SOBRE NOSSOS PRODUTOS</h1>
        </div>
    </div>
    <!-- TITULO -->
</header>

<body>
    <!-- PRIMEIRO SLIDER -->
    <div id="slider1">
        <div class="container-fluid a">
            <!-- <h1 class="display-4"><?php text("about_us"); ?></h1>
	        <p class="lead"><?php text("about_us_text"); ?></p> -->
            <div class="container-fluid">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-5" style="margin-left: 4px; margin-right: 15px;">
                        <div class="ratio ratio-16x9 ">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/7VXWvmsODa0?ps=play&amp;vq=large&amp;rel=0&amp;autohide=1&amp;showinfo=0&amp;authuser=3" allowfullscreen></iframe>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img class="rounded-circle mx-auto d-block" style="margin-top: 15px;" src="./img/ic_background_eraser.png" alt="Photo Background Eraser" width="100" height="100" style="box-shadow: 0px 5px 10px;">
                        <h1 class="text-dark" style="margin-top: 15px; margin-bottom: 20px;font-family: Arial, Helvetica, sans-serif;text-align: center;color: rgb(80, 80, 80);">Background Eraser</h1>
                        <h5 class="text-justify" style="color: rgb(112, 112, 112);font-family: Arial, Helvetica, sans-serif; font-size: 22px; margin-bottom: 20px;"><?php text("backgrounderaser_description"); ?>
                        </h5>
                        <div class="row">
                            <div class="col">
                                <a href="https://play.google.com/store/apps/details?id=com.photoappworld.photo.background_eraser&referrer=utm_source%3Dphotoappworld">
                                    <img class="mx-auto d-block store-image-one" src="./img/ic_google_play.png" alt="Get it on Google Play" style="box-shadow: 0px 5px 10px black; border-radius: 10%;">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- SEGUNDO SLIDER -->
    <div id="slider1">
        <div class="container-fluid a">
            <!-- <h1 class="display-4"><?php text("about_us"); ?></h1>
		    <p class="lead"><?php text("about_us_text"); ?></p>  	       -->
            <div class="container-fluid">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-5" style="margin-left: 4px; margin-right: 15px;">
                        <div class="ratio ratio-16x9 ">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/XFWj7HgCrPs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="embed-responsive embed-responsive-16by9">
                        </div>
                    </div>
                    <div class="col-lg-6  ">
                        <img class="rounded-circle mx-auto d-block" style="margin-top: 15px;" src="./img/ic_myfakelook.png" alt="Photo Background Eraser" width="100" height="100" style="box-shadow: 0px 5px 10px;">
                        <h1 class="text-dark" style="margin-top: 15px; margin-bottom: 20px;font-family: Arial, Helvetica, sans-serif;text-align: center;color: rgb(80, 80, 80);">My Fake Look</h1>
                        <h5 class="text-justify" style="color: rgb(112, 112, 112);font-family: Arial, Helvetica, sans-serif; font-size: 22px; margin-bottom: 10px;"><?php text("myfakelook_description"); ?>
                        </h5>
                        <div class="row">
                            <div class="col">
                                <a href="https://play.google.com/store/apps/details?id=br.com.blackmountain.mylook&referrer=utm_source%3Dphotoappworld">
                                    <img class="mx-auto d-block store-image-one" src="./img/ic_google_play.png" alt="Get it on Google Play" style="box-shadow: 0px 5px 15px black; border-radius: 10%;">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FIM DO SEGUNDO SLIDER-->

    <!-- INICIO APPS -->
    <div class="container-fluid a">
        <div class="flex-row row">
            <div class="col-xs-12 col-sm-12 col-lg-4 col-spacing alternate-color">
                <div class="thumbnail">
                    <img class="rounded-circle mx-auto d-block" src="./img/ic_photo_tattoo.png" alt="Photo Tattoo Simulator" width="140" height="140" style="box-shadow: 0px 5px 10px;">
                    <div class="caption align-items-center">
                        <h2 style="margin-top: 15px;">Photo Tattoo Simulator</h2>
                        <p class="flex-text text-muted"><?php text("tattoo_description"); ?></p>
                        <p>
                        <div class="row">
                            <!-- <a href="https://itunes.apple.com/us/app/photo-tattoo-simulator/id1220867387">
                                    <img class="mx-auto d-block store-image-two" src="./img/ic_apple_store.png" alt="Download on the Apple Store">
                                </a> -->
                            <div class="col">
                                <a href="https://play.google.com/store/apps/details?id=br.com.blackmountain.photo.tattoosimulator&referrer=utm_source%3Dphotoappworld">
                                    <img class="mx-auto d-block store-image-one" src="./img/ic_google_play.png" alt="Get it on Google Play" style="box-shadow: 0px 5px 10px black; border-radius: 10%;">
                                </a>
                            </div>
                            <!-- <div class="col">
                                    <a href="https://appgallery.cloud.huawei.com/marketshare/app/C101693515?source=photoappworld">
                                        <img class="mx-auto d-block store-image-two" src="./img/ic_huawei_app_gallery.png" alt="Download on Huawei AppGallery">
                                    </a>
                                </div> -->
                        </div>
                        </p>
                    </div>
                    <!-- /.caption -->
                </div>
                <!-- /.thumbnail -->
            </div>
            <div class="col-xs-12 col-sm-12 col-lg-4 col-spacing alternate-color">
                <div class="thumbnail ">
                    <img class="rounded-circle mx-auto d-block" src="./img/ic_blackwhite.png" alt="Black & White Photo" width="140" height="140" style="box-shadow: 0px 5px 10px;">
                    <div class="caption align-items-center">
                        <h2 style="margin-top: 15px;">Black & White Photo</h2>
                        <p class="flex-text text-muted"><?php text("blackwhite_description"); ?></p>
                        <p>
                        <div class="row">
                            <!-- <div class="col-7">
                                    <a href="https://itunes.apple.com/us/app/black-and-white-photo/id1155192658?mt=8">
                                        <img class="mx-auto d-block store-image-two" src="./img/ic_apple_store.png" alt="Download on the Apple Store">
                                    </a>
                                </div> -->
                            <div class="col">
                                <a href="https://play.google.com/store/apps/details?id=br.com.blackmountain.photo.blackwhite&referrer=utm_source%3Dphotoappworld">
                                    <img class="mx-auto d-block store-image-one" src="./img/ic_google_play.png" alt="Get it on Google Play" style="box-shadow: 0px 5px 10px black; border-radius: 10%;">
                                </a>
                            </div>
                        </div>
                        </p>
                    </div>
                    <!-- /.caption -->
                </div>
                <!-- /.thumbnail -->
            </div>
            <div class="col-xs-12 col-sm-12 col-lg-4 col-spacing alternate-color">
                <div class="thumbnail ">
                    <img class="rounded-circle mx-auto d-block" src="./img/ic_textonphoto.png" alt="Text On Photo" width="140" height="140" style="box-shadow: 0px 0px 0px;">
                    <div class="caption align-items-center">
                        <h2 style="margin-top: 15px;">Text On Photo</h2>
                        <p class="flex-text text-muted"><?php text("textonphoto_description"); ?></p>
                        <p>
                        <div class="row">
                            <!-- <div class="col">
                                    <a href="https://itunes.apple.com/us/app/write-text-on-photo/id1325086072">
                                        <img class="mx-auto d-block store-image-two" src="./img/ic_apple_store.png" alt="Download on the Apple Store">
                                    </a>
                                </div> -->
                            <div class="col">
                                <a href="https://play.google.com/store/apps/details?id=br.com.blackmountain.photo.text&referrer=utm_source%3Dphotoappworld">
                                    <img class="mx-auto d-block store-image-one" src="./img/ic_google_play.png" alt="Get it on Google Play" style="box-shadow: 0px 5px 15px black; border-radius: 10%;">
                                </a>
                            </div>
                            <!-- <div class="col">
                                    <a href="https://appgallery.cloud.huawei.com/marketshare/app/C101693509?source=photoappworld">
                                        <img class="mx-auto d-block store-image-two" src="./img/ic_huawei_app_gallery.png" alt="Download on Huawei AppGallery">
                                    </a>
                                </div> -->
                        </div>
                        </p>
                    </div>
                    <!-- /.caption -->
                </div>
                <!-- /.thumbnail -->
            </div>
            <!-- /.thumbnail -->
        </div>
        <!-- <div class="flex-row row"> -->
    </div>
    <!-- /container -->
    <!-- FIM APPS -->
</body>
<footer>
    <div id="linha" style="width: 100%; border-bottom: 1px solid #000000;">
    </div>
    <p class="text-center" style="margin: 3 3 3 3">Photo World App &copy; Company 2017</p>
</footer>

</html>