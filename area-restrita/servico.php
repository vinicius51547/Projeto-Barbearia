<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="../css/sideBar.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="img/icons.png">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/animate.min.css" rel="stylesheet"> 
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/lightbox.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">
    <link id="css-preset" href="../css/presets/preset1.css" rel="stylesheet">
    <link href="../css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    
    <title>SERVIÇOS ADM</title>
</head>

<body>
    
  <!--.preloader-->
  <div class="preloader"> <i class="fa fa-circle-o-notch fa-spin"></i></div>
  <!--/.preloader-->


  <!--end sideBar-->
  <header id="home">
  </div><!--/#home-slider-->
    <div class="main-nav">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" >
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand">
            <h1><img class="img-responsive" src="../images/elitebarber.png" alt="logo"></h1>
          </a>                    
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">                 
          <li><a href="../logout.php" class="ativo"><strong>SAIR</strong></a></li>
            <li class="scroll"><a href="index-areaRestrita.php">PRINCIPAL</a></li> 
            <li class="scroll"><a href="cliente.php">CLIENTE</a></li>                   
            <li class="scroll"><a href="produto.php">PRODUTOS</a></li>
            <li class="scroll"><a href="servico.php">SERVIÇOS</a></li>    
            <li class="scroll"><a href="agenda.php">AGENDAMENTO</a></li> 
          </ul>
        </div>
      </div>
    </div><!--/#main-nav-->

    <div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel">
      <div class="carousel-inner">
        <div class="item active" style="background-image: url(../images/slider/1.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">Bem Vindo a <span>Elite Barber</span></h1>
            <p class="animated fadeInRightBig">Você está na página de Alocamento de Serviços</p>
          </div>
        </div>
      
  </header><!--/#home-->

  
  <div class="form">
      
      <div class="tab-content"> 

          <h1>Cadastrar Serviços</h1>
      
        <form method="post"
              action="cadastrar-servico.php"
              enctype="multipart/form-data">
            <h3>Informações sobre o corte</h3>
            <input type="text" placeholder="informações sobre o corte" name="descServico">
            <br>
            <h3>Descrição sobre o corte:</h3>
            <input type="text" placeholder="Descrição sobre o corte" name="textoServico">
            <br>
            <h3>Foto:</h3>
            <input type="file" name="fotoServico" >
            <br>
            <input type="submit" value="cadastrar">
        </form>
        
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->

        <?php
            require_once("../classes/Servico.php");
            try {
                $servico = new Servico();
                $listaservico = $servico->listar();
                
            } catch(Exception $e) {
                // echo '<pre>';
                //     print_r($e);
                // echo '</pre>';
                echo $e->getMessage();
            }
        ?>

<section id="portfolio">
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
          <h2>Nossos Serviços</h2>
        </div>
      </div> 
    </div>
    <?php foreach ($listaservico as $linha){ ?>
    <div class="container">
      <div class="row">
        <div class="col-sm-3">
          <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="folio-image">
              <img class="img-responsive" src=" <?php echo $linha['fotoservico'] ?> " alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3><?php echo $linha['descservico'] ?></h3>
                    <p><?php echo $linha['textoservico'] ?></p>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-expand"><a href=" <?php echo $linha['fotoservico'] ?>"  data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php } ?>
        
        <div id="portfolio-single-wrap">
      <div id="portfolio-single">
      </div>
    </div><!-- /#portfolio-single-wrap -->
  </section><!--/#portfolio-->
        
      
  
        <!--libras-->
  <div vw class="enabled">
    <div vw-access-button class="active"></div>
    <div vw-plugin-wrapper>
      <div class="vw-plugin-top-wrapper"></div>
    </div>
  </div>
  <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
  <script>
    new window.VLibras.Widget('https://vlibras.gov.br/app');
  </script>
  
  <!--end libras-->

  <!--/#contact-->
  <footer id="footer">
    <div class="footer-top wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
      <div class="container text-center">
        <div class="footer-logo">
          <img class="img-responsive" src="../images/elitebarber.png" alt="">
        </div>
        <div class="social-icons">
          <ul>
            <li><a class="envelope" href="#"><i class="fa fa-envelope"></i></a></li>
            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li> 
            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
          </ul>
          <div class="row">
          <center><p>&copy; 2021 Elite Barbearia</p></center>
          </div>
        </div>
      </div>
      </div>
  </footer>
  
  <div class="toggle" onclick="toggleMenu()">
  </div>

  <script type="text/javascript" src="../js/jquery.js"></script>
  <script type="text/javascript" src="../js/bootstrap.min.js"></script>
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
  <script type="text/javascript" src="../js/jquery.inview.min.js"></script>
  <script type="text/javascript" src="../js/wow.min.js"></script>
  <script type="text/javascript" src="../js/mousescroll.js"></script>
  <script type="text/javascript" src="../js/smoothscroll.js"></script>
  <script type="text/javascript" src="../js/jquery.countTo.js"></script>
  <script type="text/javascript" src="../js/lightbox.min.js"></script>
  <script type="text/javascript" src="../js/main.js"></script>
  <script type="text/javascript" src="../js/sideBar.js"></script>
</body>
</html>