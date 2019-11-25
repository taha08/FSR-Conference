<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Bootstrap 3 Registration Form with Validation</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>  
 
      <link rel="stylesheet" href="css/style.css">
      <link href='https://fonts.googleapis.com/css?family=Lato:400,700,300|Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
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
              
               <li class="active"><a href="#header">Accueil</a></li>
                <li><a href="form.php">Registration</a></li>
                <li><a href="search.php">Recherche</a></li>
               <li> <a href="listpar.php">participants</a></li>    
                <li> <a href="listeAttestation.php"> Attestations</a></li>
                <li> <a href="listeRecu.php">reçus de paiement</a></li>
                <li><a href="listebadges.php">badges</a></li>

              </ul>
            </div>
          </div>
        </div>
      </nav></div></header>

 <div class="container" >

    <form class="well form-horizontal" method="post" action="badge.php"  id="contact_form" style="border-radius: 40px;margin-top: 140PX;">
<fieldset>

<!-- Form Name -->
<legend><center><h2><b>liste des badges </b></h2></center></legend><br>
 <div class="form-group pull-right">
    <input type="text" class="search form-control" placeholder="What you looking for?">
</div>

 
<span class="counter pull-right"></span>
<table class="table table-hover table-striped table-bordered results">
  <thead>
    <tr>
      <th >id</th>
      <th >nom</th>
      <th >prenom</th>
      <th  colspan=5>Action</th>
    </tr>
  </thead>
  <tbody>
  <?php

$xml=simplexml_load_file("MonF.xml");
echo "<form method='post' action='badge.php'>";
foreach ($xml->participant as $value) {
  # code...

  
  
    # code...
    
      echo "<tr>";
    # code...
        echo "<td> ".$value->attributes()->{'id'}."</td>";

    echo "<td>".$value->firstName."</td>";
    
    echo "<td> ".$value->lastName."</td>";
        
            echo "<td> <INPUT type='checkbox' name = 'checkbox[]' value=". $value->attributes()->{'id'} ." >badge</td>";
            

      echo "</tr>";

  
}
echo " </tbody>
</table>
 <center><input type='submit' name='ok' value='Generer' class='btn btn-primary '> </center
   ";


?>
  </fieldset>
</form>
</div>
    </div><!-- /.container -->
    



  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/wow.js"></script>
  <script src="js/custom.js"></script>
  
    <script  src="js/index.js"></script>

<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>


 

</body>

</html>
