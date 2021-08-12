<?php 

 session_start();

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <title>Resultat par service</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
     <link href="bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="index.html">BHDim</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        <li class="app-search">
          <input class="app-search__input" type="search" placeholder="Search">
          <button class="app-search__button"><i class="fa fa-search"></i></button>
        </li>
        <!--Notification Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Show notifications"><i class="fa fa-bell-o fa-lg"></i></a>
          <ul class="app-notification dropdown-menu dropdown-menu-right">
            <li class="app-notification__title">You have 4 new notifications.</li>
            <div class="app-notification__content">
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
                  <div>
                    <p class="app-notification__message">Lisa sent you a mail</p>
                    <p class="app-notification__meta">2 min ago</p>
                  </div></a></li>
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i><i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>
                  <div>
                    <p class="app-notification__message">Mail server not working</p>
                    <p class="app-notification__meta">5 min ago</p>
                  </div></a></li>
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>
                  <div>
                    <p class="app-notification__message">Transaction complete</p>
                    <p class="app-notification__meta">2 days ago</p>
                  </div></a></li>
              <div class="app-notification__content">
                <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
                    <div>
                      <p class="app-notification__message">Lisa sent you a mail</p>
                      <p class="app-notification__meta">2 min ago</p>
                    </div></a></li>
                <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i><i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>
                    <div>
                      <p class="app-notification__message">Mail server not working</p>
                      <p class="app-notification__meta">5 min ago</p>
                    </div></a></li>
                <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>
                    <div>
                      <p class="app-notification__message">Transaction complete</p>
                      <p class="app-notification__meta">2 days ago</p>
                    </div></a></li>
              </div>
            </div>
            <li class="app-notification__footer"><a href="#">See all notifications.</a></li>
          </ul>
        </li>
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-cog fa-lg"></i> Settings</a></li>
            <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-user fa-lg"></i> Profile</a></li>
            <li><a class="dropdown-item" href="page-login.html"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
          </ul>
        </li>
      </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <?php include 'menu.php'; ?>
    </aside>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> LTE </h1>
          <p>Single user throughput per Service</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active"><a href="#">Data Table</a></li>
        </ul>
      </div>
      <div class="row">
      
            <?php 

$tabup = $_SESSION['tab'];
$tabdw = $_SESSION['t'];
?>     
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr style="background-color: #084AFF">
                    <th>Service</th>
                    <th >Uplink throughput per service(Kbps)</th>
                    <th >Downlink throughput per service(Kbps)</th>
                    <th >Traffic Penetration Ratio (%)</th>
                    <th >BHSA</th>
                    <th>option</th>
                  </tr>
                </thead>
                <tbody>
                  
                     <?php 
                     try {
include'conbd.php';
 require 'foction.php';
$i=0;
  $resultat= $DB -> query('SELECT * FROM downlink,uplink where downlink.nom_service=uplink.nom_service ');
  $req = $resultat-> fetch(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
  echo "Echec : ".$e->getMessage(); 
}
?>
<?php
           do           
         {?>   <tr>
                    <td ><?php print_r($req['nom_service']) ?></td>
                  <td style="background-color: #66FFFF"><?php echo "".$tabup[$i]; ?></td>
                    <td style="background-color: #9999FF"><?php echo "".$tabdw[$i]; ?></td>
                     <td ><?php print_r($req['PR']) ?></td>
                    <td ><?php print_r($req['BHSA']) ?></td>
                    <td> <center><a href="#" data-toggle="modal" data-target="#ma_modif"> <img src="images/modifier.jpg" width="40"> </a></center></td>
                    </tr>
                    <?php 
                    $endup[] = lteend($tabup[$i],$req['PR'],$req['BHSA']);
                    $enddw[] = lteend($tabdw[$i],$req['PR'],$req['BHSA']);
                    $i = $i + 1;
                      }while ( $req = $resultat-> fetch(PDO::FETCH_ASSOC));

                      $up = lteS($endup);
                      $dw = lteS($enddw);
                      ?>
               


                  
                </tbody>
              </table>
            </div>
          </div>
         <form method="post" action="resulta.php" >
                  
        <div class="form-group">
                    <label for="exampleSelect2"><strong><h3>Type de zone</h3></strong></label>
                    <select class="form-control" id="exampleSelect2" name="zone" >
                      <option value="0.4">Dense Urban</option>
                      <option value="0.2">Urban</option>
                      <option value="0.1">Sub Urban</option>
                      <option value="0">Rural Area</option>
                      
                    </select>
                  </div>
                   <div class="form-group">
      <label for=""><strong><h3>Nombre d'utilisateur</h3></strong></label>
      <input type="number" id="" name="nombre" class="form-control" placeholder="">
      </div>
                  <button type="submit" class="btn btn-primary">Terminer</button>
            </form> 
          
        </div>
      </div>

<div class="modal fade" id="ma_fenetre" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>

      <div class="modal-body">
        <h5>Voulez vous Supprimer <b>ces valeurs?</b> ?</h5>
      </div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Non</button>
        <a class="btn btn-danger" href="#">Oui</a>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="ma_modif" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>

      <div class="modal-body">
        <h5>entrer  <b>les valeurs à modifier?</b> ?</h5>
      </div>
      <div class="modal-footer">
           <form>
   <!-- Horizontal -->
   <div class="form-inline">
<div class="form-group">
      <label for="">Traffic P R &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
      <input type="number" id="" class="form-control" placeholder="(Uplink)">
      </div>
<div class="form-group">
      
      <input type="number" id="" class="form-control" placeholder="(Downdlink)">
</div>
<br>
<div class="form-group">
      <label for="">BHSA&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </label>
      <input type="number" id="" class="form-control" placeholder="(Uplink)">
      </div>
<div class="form-group">
      <input type="number" id="" class="form-control" placeholder="(Downdlink)">
      </div>
      <br>

      &nbsp
<div class="form-group">
      <button class="btn btn-secondary" type="button" data-dismiss="modal">Annuler</button>
        <a class="btn btn-primary" href="#">Modifier</a>
   </div>
   </div>
</form>
      </div>
    </div>
  </div>
</div>


    </main>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <!-- Data table plugin-->
    <script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
    <!-- Google analytics script-->
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
      	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      	ga('create', 'UA-72504830-1', 'auto');
      	ga('send', 'pageview');
      }


    </script>



<script src="jquery.min.js"></script>
<script src="bootstrap.min.js"></script>
<script src="bootstrap.bundle.min.js"></script>
 <?php

          $_SESSION['tab'] = $up;
          $_SESSION['t'] = $dw;
            
           ?>
  </body>
</html>