<?php require_once("idioma.php");  ?>
<?php include_once("analyticstracking.php") ?>

<nav class="navbar navbar-expand-lg navbar-dark navbar-inverse fixed-top " style="background-color:#3A3660;">
  <div class="container-fluid">
    <a class="navbar-brand" href="./index.php" style="color:#ffffff">
      <img src="./img/icone.png" width="30" height="30" class="d-inline-block align-top" alt="Início">
      Photo App World
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="true" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link" aria-current="page" href="./index.php"><?php text("home"); ?> </a>
        <a class="nav-link" href="./contact.php"><?php text("contact"); ?></a>
        <a class="nav-link" href="./about.php"><?php text("about"); ?></a>
      </div>
      <ul class="navbar-nav justify-content-end align-items-sm-end" style="width:75%; align-items: flex-top;">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <img width="28" id="imgNavIta" src="./img/<?php text('idioma_code'); ?>.svg" alt="...">
            <span id="lanNavDeu"><?php text('idioma'); ?></span>
          </a>

          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a id="navPT" hreflang="pt-br" class="dropdown-item">
                <img width="32" src="./img/pt-br.svg" alt="Português">&nbsp;&nbsp;
                <span id="lanNavIta"><?php text('idioma'); ?></span>
              </a>
            </li>
            <li><a id="navEN" hreflang="en" class="dropdown-item">
                <img width="32" src="./img/en.svg" alt="English">&nbsp;&nbsp;
                <span id="lanNavIta"><?php text('idioma'); ?></span>
              </a>
            </li>
          </ul>
          
        </li>
      </ul>
    </div>
  </div>
</nav>

<script>
  $(document).ready(function() {

    var itemMenu = $('a[href="' + this.location.pathname + '"]');

    //console.log( "document menu loaded : "+this.location.pathname+" : "+itemMenu.html());

    if (itemMenu.html() != undefined) {
      //console.log( "op1");
      itemMenu.parents('li').addClass('active');
    } else {
      //console.log( "alertnativo");
      var itemMenu = $('a[href="/"]').addClass('active');
    }

    //$("body").css("padding-top", $(".navbar-fixed-top").height());			
  });
</script>

<script>
  $('#navPT').click(function() {
    //alert('teste');
    window.location.replace('.' + location.pathname + '?lg=pt-br');
  });

  $('#navEN').click(function() {
    //alert('teste');
    window.location.replace('.' + location.pathname + '?lg=en');
  });
</script>