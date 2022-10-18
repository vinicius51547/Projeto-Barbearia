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
    
    <title>Cliente ADM</title>
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
            <p class="animated fadeInRightBig">Você está na página de Cadastro Cliente</p>
          </div>
        </div>
      
  </header><!--/#home-->

  <div class="form">
      
      <div class="tab-content"> 

          <h1>Cadastrar Cliente</h1>
          
          <form action="cadastra-cliente.php" method="post">
          
          <div class="top-row">
            <div class="field-wrap">
            <h3>Nome do Cliente</h3>
              <input type="text" placeholder="Nome do cliente" required autocomplete="off" name="nomeCliente"/>
            </div>
        
            <div class="field-wrap">
            <h3>CPF do Cliente</h3>
              <input type="text" placeholder="CPF" required autocomplete="off" name="cpfCliente"/>
            </div>
          </div>

          <div class="field-wrap">
          <h3>Contato(Telefone)</h3>
            <input type="text" placeholder=" numero(telefone)" required autocomplete="off" name="celularCliente"/>
          </div>
          
          <button value="Cadastrar" type="submit" class="button button-block">Cadastrar</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->

      <?php
            require_once("../classes/Cliente.php");
            try {
                $cliente = new Cliente();
                $listaCliente = $cliente->listar();
                
            } catch(Exception $e) {
                // echo '<pre>';
                //     print_r($e);
                // echo '</pre>';
                echo $e->getMessage();
            }
        ?>
      <div class="form">
      <div>
            <div class="field-wrap">
            <h1>Lista de Serviços Cadastrados</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>nome:</th>
                    <th>celular</th>
                    <th>cpf</th>
                </tr>
            </thead>
                <?php foreach ($listaCliente as $linha){ ?>
                    <tr>
                        <td><?php echo $linha['nomecliente'] ?></td>
                        <td><?php echo $linha['celularcliente'] ?></td>
                        <td><?php echo $linha['cpfcliente'] ?></td>               
                    </tr>
                <?php } ?>
        </table>
          </form>

        </div>
        
      </div>
      
</div> <!-- /form -->

<!--ate aqui-->

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