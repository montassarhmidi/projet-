<?PHP
include "../core/publiciteC.php";
$PublicC=new publiciteC();
$listepublicite=$PublicC->afficherpublicites();
$listepublicite=$PublicC->afficherpublicitestrier();
//var_dump($listeEmployes->fetchAll());
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <title>SweetAlert Implemented</title>
    <script src="../projet/js/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../projet/css/sweetalert.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Dashboard JTS</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="css/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="lib/gritter/css/jquery.gritter.css" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  <script src="lib/chart-master/Chart.js"></script>

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>
<style type="text/css">
  body {
  font-family: 'Open Sans', sans-serif;
}

h1, h2, h3, h4, h5, h6 {
  font-weight: 300;
}

p {
  color: #999;
}

strong {
  color: #333;
}

#wrapper {
  width: 100%;
  max-width: 600px;
  margin: 0 auto;
  text-align: center;
  padding: 30px 0;
}

.page-head-image {
  
}

.page-head-image img {
  border-radius: 50%;
}

#form-trabalhe {
  margin-top: 30px;
  text-align: left;
}

label {
  font-weight: normal;
  margin-top: 15px;
}

input {
  border: 2px solid #CCC !important;
  height: 35px;
  border-radius: 3px;
  max-width: 100%;
}

.input-group-addon {
  border: 2px solid #CCC !important;
  border-right: 0px !important;
}

.btn {
  border: 0;
  border-radius: 3px;
  margin-top: 20px;
}

.form-group {
  margin-bottom: 0;
  text-align: left;
}
</style>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        
      </div>
      
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
        
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-desktop"></i>
              <span>Commmandes</span>
              </a>
            <ul class="sub">
              <li><a href="commandes.html">Commandes</a></li>
              <li><a href="factures.html">Factures</a></li>
              <li><a href="panier.html">Panier</a></li>
              
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-cogs"></i>
              <span>Produits</span>
              </a>
            <ul class="sub">
              <li><a href="stock.html">Stock</a></li>
              <li><a href="services.html">Services</a></li>
              <li><a href="catalogue.html">Catalogue</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-book"></i>
              <span>SAV</span>
              </a>
            <ul class="sub">
              <li><a href="sav.html">SAV</a></li>
              <li><a href="reclamation.html">Reclamations</a></li>
              <li><a href="rendezvous.html">Rendez-vous</a></li>
              
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-tasks"></i>
              <span>Clients</span>
              </a>
            <ul class="sub">
              <li><a href="clients.html">Clients</a></li>
              <li><a href="clientsf.html">Clients fidèles</a></li>
              <li><a href="historique.html">Historique</a></li>
              
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-th"></i>
              <span>Livraisons</span>
              </a>
            <ul class="sub">
              <li><a href="livdispo.html">Livraisons disponibles</a></li>
              <li><a href="livreurs.html">Livreurs</a></li>
              <li><a href="suivi.html">Suivi</a></li>
            </ul>
          </li>
           <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-desktop"></i>
              <span>Paiement</span>
              </a>
            <ul class="sub">
              <li><a href="commandes.html">Paiement par carte bancaire</a></li>
              <li><a href="factures.html">Paiement par chèque</a></li>
              <li><a href="panier.html">Paiement à la livraison</a></li>
              
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class=" fa fa-bar-chart-o"></i>
              <span>Publicité</span>
              </a>




            <ul class="sub">
              <li><a href="pub.php">Publicité</a></li>
              <li><a href="relationclient.php">Relationclient</a></li>
              <li><a href="trip.php">Tri</a></li>
               <li><a href="recherchep.php">Recherche</a></li>
            </ul>
          </li>
        </ul>
        <li class="sub-menu">
            <a href="javascript:;">
              <i class=" fa fa-bar-chart-o"></i>
              <span><li><a href="../Publicité.php">Déconnexion</a></li></span>
              </a>
              </li>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-9 main-chart">
            <!--CUSTOM CHART START -->
            <div class="border-head">
              <h3>Publicité</h3>
            

            
            </div>



<div class="form-group">
  
            <div class="col-md-6">
              <table>
<center><button type="submit"   class="btn btn-success">search</button></center>
<select name="type" class="form-control">
 <option value="Accessorie Informatique">Nom</option>
  <option value="Materiel Informatiaque">Prix_sans_remise</option> 
 <option value="Materiel Sucurité">Prix_avec_remise</option> 

 </table>
</select>            </div>
          </div>
            <!--custom chart end-->
            
                  
                <!-- /grey-panel -->
              
              <!-- /col-md-4-->
              
              <!-- /col-md-4-->
              <!-- DIRECT MESSAGE PANEL -->
              
              <!-- /col-md-4 -->
              
            <!-- /row -->
            
              </div>
              <!-- /col-md-4 -->
              <!--  PROFILE 02 PANEL -->
              
                  
                <!-- /panel -->
              </div>
              <!--/ col-md-4 -->
             
          <!-- /col-lg-9 END SECTION MIDDLE -->
          <!-- **********************************************************************************************************************************************************
              RIGHT SIDEBAR CONTENT
              *********************************************************************************************************************************************************** -->
          <div class="col-lg ds">
            <!--COMPLETED ACTIONS DONUTS CHART-->
            <div class="donut-main">
              
            <!--NEW EARNING STATS -->
            
            <!--new earning end-->
            <!-- RECENT ACTIVITIES SECTION -->
            
            <!-- USERS ONLINE SECTION -->
            <table class="table table-hover table-fixed">

  <!--Table head-->
  <thead>
    <tr>
      <th>ID</th>
      <th>Type</th>
      <th>Nom</th>
       <th>Description</th>
      <th>Prix_sans_remise</th>
       <th>Prix_avec_remise</th>
      <th>Fichier</th>
      
    </tr>
  </thead>
  <!--Table head-->
<tbody>
  <!--Table body--><?PHP
  foreach($listepublicite as $row){
  ?>
  <tr>
  <td><?PHP echo $row['id']; ?></td>
  <td><?PHP echo $row['type']; ?></td>
  <td><?PHP echo $row['nom']; ?></td>
  <td><?PHP echo $row['description']; ?></td>
   <td><?PHP echo $row['prix_sans_remise']; ?></td>
    <td><?PHP echo $row['prix_avec_remise']; ?></td>

  <td><img src="../image/<?PHP echo $row['fichier']; ?>" width="100" heigth="100"></td>
  <td><form method="POST" action="supprimerpublicite.php">

  <input type="submit" name="supprimer" value="supprimer" onclick="validation();">
  <input type="hidden" value="<?PHP echo $row['id']; ?>" onclick="validation();" name="id" >

 

  </form>


   <script type="text/javascript">
                    function validation(){
swal({
  title: "Good job!",
  text: "You clicked the button!",
  icon: "success",
  button: "Aww yiss!",
});

                    }

                </script>
  </td>
  <td><a href="modifierpublicite.php?id=<?PHP echo $row['id']; ?>">
  Modifier</a></td>
  </tr>

  <?PHP
}?>

</tbody>
  <form method="POST" action="Pub.php">
<input type="submit" name="trier" value="Trier par prix_sans_remise">
</form>
  <!--Table body-->

</table>


 
      

           <form method="POST" action="ajoutpublicite.php">
 <div class="form-group">
            <div class="col-md-6">
              <label class="control-label" for="surname">id</label>
              <input name="id" class="form-control" placeholder="id" type="number" required>
            </div>
          </div>

          <div class="form-group">
            <div class="col-md-6">
              <label class="control-label" for="email">type</label>
               <!--liste--> 
<select name="type" class="form-control">
 <option value="Accessorie Informatique">Accessorie Informatique</option>
  <option value="Materiel Informatiaque">Materiel Informatique</option> 
 <option value="Materiel Sucurité">Materiel Sucurite</option> 
 
</select>            </div>
          </div>

         
          <div class="form-group">
            <div class="col-md-6">
              <label class="control-label" for="email">nom</label>
              <input name="nom" class="form-control" placeholder="nom" type="text" required>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-6">
              <label class="control-label" for="email">description</label>
              <input name="description" class="form-control" placeholder="description" type="text" required>
            </div>
          </div>
           
           <div class="form-group">
            <div class="col-md-6">
              <label class="control-label" for="email">prix_sans_remise</label>
              <input name="prix_sans_remise" class="form-control" placeholder="prix_sans_remise" type="text" required>
            </div>
          </div>

          <div class="form-group">
            <div class="col-md-6">
              <label class="control-label" for="email">prix_avec_remise</label>
              <input name="prix_avec_remise" class="form-control" placeholder="Prix_avec_remise" type="text" required>
            </div>
          </div>

          <div class="form-group">
            <div class="col-md-6">
              <label class="control-label" for="email">fichier</label>
              <input  type="file"name="fichier" class="form-control" placeholder="fichier" type="text" required>
            </div>
          </div>

          
          <div class="form-group">
            <div class="col-md-12">
              <button type="submit" class="btn btn-primary btn-lg btn-block info">Ajouter</button>
            </div>
          </div>     
      
    </form>
</div>
      </section>
    </section>
    <!--main content end-->
    <!--footer start-->
    
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>

  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="lib/jquery.sparkline.js"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <script type="text/javascript" src="lib/gritter/js/jquery.gritter.js"></script>
  <script type="text/javascript" src="lib/gritter-conf.js"></script>
  <!--script for this page-->
  <script src="lib/sparkline-chart.js"></script>
  <script src="lib/zabuto_calendar.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      var unique_id = $.gritter.add({
        // (string | mandatory) the heading of the notification
        title: 'Welcome to Dashio!',
        // (string | mandatory) the text inside the notification
        text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo.',
        // (string | optional) the image to display on the left
        image: 'img/ui-sam.jpg',
        // (bool | optional) if you want it to fade out on its own or just sit there
        sticky: false,
        // (int | optional) the time you want it to be alive for before fading out
        time: 8000,
        // (string | optional) the class name you want to apply to that specific message
        class_name: 'my-sticky-class'
      });

      return false;
    });
  </script>
  <script type="application/javascript">
    $(document).ready(function() {
      $("#date-popover").popover({
        html: true,
        trigger: "manual"
      });
      $("#date-popover").hide();
      $("#date-popover").click(function(e) {
        $(this).hide();
      });

      $("#my-calendar").zabuto_calendar({
        action: function() {
          return myDateFunction(this.id, false);
        },
        action_nav: function() {
          return myNavFunction(this.id);
        },
        ajax: {
          url: "show_data.php?action=1",
          modal: true
        },
        legend: [{
            type: "text",
            label: "Special event",
            badge: "00"
          },
          {
            type: "block",
            label: "Regular event",
          }
        ]
      });
    });

    function myNavFunction(id) {
      $("#date-popover").hide();
      var nav = $("#" + id).data("navigation");
      var to = $("#" + id).data("to");
      console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
  </script>
</body>

</html>
