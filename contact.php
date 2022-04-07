<?php require_once("idioma.php");	?>
<?php include_once("analyticstracking.php") ?>
<?php include 'menu.php'; ?>

<!DOCTYPE html>
<html lang="<?php text("idioma_code"); ?>">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="<?php text("og_description"); ?>">
	<meta name="author" content="Photo App World">
	<meta name="theme-color" content="#3A3660">
	<META name="robots" CONTENT="noindex">

	<meta property="og:site_name" content="Photo App World">
	<meta property="og:title" content="<?php text("contact_title"); ?>" />
	<meta property="og:description" content="<?php text("og_description"); ?>" />
	<meta property="og:image" itemprop="image" content="http://www.photoappworld.com/img/ic_photoappworld_200.png">
	<meta property="og:type" content="website" />

	<title><?php text("contact_title"); ?></title>

	<link rel="icon" type="image/png" href="favicon.png">
	<link rel="stylesheet" href="./responsive.css">
	<link href="style.css" rel="stylesheet">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<header>
</header>

<body>
	<div class="jumbotron jumbotron-fluid">
		<div id="slider">
			<div class="container-fluid p-5" style="margin-top: 0px; background-color: rgb(236, 236, 236); ">
				<div class="container">
					<div class="row d-flex align-items-center">
						<div class="col-lg-6 " style="padding-left: 70px ">
							<h1 class="display-4 " style="color:rgb(185, 185, 185); font-family: 'Bebas Neue', cursiva ;font-weight: bold; font-size: 60px; font-weight: normal; margin-bottom: 25px;"><?php text("queremos_ouvir"); ?></h1>
							<p class="lead" style="color: rgb(112, 112, 112);font-family: Arial, Helvetica, sans-serif; font-size: 22px;"><?php text("alguma_questao"); ?></p>
						</div>
						<div class="col-md-6 p-4 ps-md-0">
							<div class=""> <img src="./img/logo-PAW-v.png" class="rounded-circle mx-auto d-block  " style="width: 10rem; height: 10rem;">
								<legend class="text-center" style="color: rgb(112, 112, 112);font-family: Arial, Helvetica, sans-serif; font-size: 22px;margin-top: 15px"><?php text("contact_us"); ?></legend>
								<a style="text-align: center;display: block;" href="mailto:support@photoappworld.com?Subject=PhotoAppWorld.com - WebSite" target="_top">support@photoappworld.com</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
<footer>
	<div id="linha" style="width: 100%; border-bottom: 1px solid #000000;">
	</div>
	<p class="text-center">Photo World App &copy; Company 2017</p>
</footer>

</html>