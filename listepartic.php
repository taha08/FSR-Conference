<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>participant list </title>
 
 
  <link rel="stylesheet" href="css/style.css">
      <link href='https://fonts.googleapis.com/css?family=Lato:400,700,300|Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>

  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css'>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/animate.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
 

  
</head>

<body style="background-color: black;">
 <header class="man-header" id="header">
    <div class="bg-color">
      <!--nav-->
      <nav class="nav navbar-default navbar-fixed-top">
        <div class="container">
          <div class="col-md-12">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mynavbar" aria-expanded="false" aria-controls="navbar">
                            <span class="fa fa-bars"></span>
                        </button>
              <a href="index.html" class="navbar-brand">Conférence</a>
            </div>
            <div class="collapse navbar-collapse navbar-right" id="mynavbar">
              <ul class="nav navbar-nav">
              
                 <li ><a href="index.html">Accueil</a></li>
                <li><a href="form.php">Registration</a></li>
                <li><a href="search.php">Recherche</a></li>
               <li class="active"> <a href="listepartic.php">participants</a></li>    
                <li> <a href="listeAttestation.php"> Attestations</a></li>
                <li> <a href="listeRecu.php">reçus de paiement</a></li>
                <li><a href="listebadges.php">badges</a></li>

              </ul>
            </div>
          </div>
        </div>
      </nav></div></header>

      <div class="container" >

    <form class="well form-horizontal"   id="contact_form" style="border-radius: 30px;margin-top: 140PX;">
<fieldset>
        <legend><center><h2><b><i> liste des participants </i> </b></h2></center></legend>

  <div class="form-group pull-right">
    <input type="text" class="search form-control" placeholder="What you looking for?">
</div>

 
<span class="counter pull-right"></span>
<table class="table table-hover table-bordered results">
  <thead>
    <tr>
      <th >id</th>
      <th >nom</th>
      <th >prenom</th>
      <th >email</th>
      <th >Avec papier</th>
      <th  colspan=5>Action</th>
    </tr>
  </thead>
  <tbody>
  <?php


$xml=simplexml_load_file("MonF.xml");
foreach ($xml->participant as $value) {
  # code...

  
  
    # code...
    
      echo "<tr>";
    # code...
        echo "<th> ".$value->attributes()->{'id'}."</th>";

    echo "<td>".$value->firstName."</td>";
    
    echo "<td> ".$value->lastName."</td>";
    echo "<td> ".$value->email."</td>";
        echo "<td> ".$value->attributes()->{'withpaper'}."</td>";

        echo "<td><a class='text-info ' href='update.php?id=".$value->attributes()->{'id'}."'> Modifier</a></td>";
        echo "<td><a  class='text-warning' href='delete.php?id=".$value->attributes()->{'id'}."'> Supprimer</a></td>";
    echo "<td> <a class='text-info' href='attes.php?id=".$value->attributes()->{'id'}."'> Attestation</a></td>";
    if ($value->payement->attributes()->{'paye'}=="yes") {
            echo "<td><a class='text-info' href='recu.php?id=".$value->attributes()->{'id'}."'> Recu</a></td>";
          }else{ echo "<td>Non payé</td>";}
              echo "<td><a class='text-info' href='details.php?id=".$value->attributes()->{'id'}."'> Details</a></td>";
            

      echo "</tr> ";

  
}
?>
  </tbody>
</table>
</fieldset>
</form>

</div>
    </div><!-- /.container -->
    <footer class="" id="footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-7 footer-copyright">
          © All rights reserved
          <div class="credits">
            
            Designed by Taha_zeidane <a href="#"></a>
          </div>
        </div>
        <div class="col-sm-5 footer-social">
          <div class="pull-right hidden-xs hidden-sm">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-dribbble"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-google-plus"></i></a>
            <a href="#"><i class="fa fa-pinterest"></i></a>
          </div>
        </div>
      </div>
    </div>
  </footer>

<script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/wow.js"></script>
  <script src="js/custom.js"></script>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>
  
    <script  src="js/index.js"></script>


<style type="text/css">
  .results tr[visible='false'],
.no-result{
  display:none;
}

.results tr[visible='true']{
  display:table-row;
}

.counter{
  padding:8px; 
  color:#ccc;
}
</style>


</body>

</html>
