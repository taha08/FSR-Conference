	

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Informations </title>
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
              
                <li><a href="#header">Accueil</a></li>
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

    <form class="well form-horizontal" method="post" action="Insert.php"  id="contact_form" style="border-radius: 40px;margin-top: 140PX;">
<fieldset>

<!-- Form Name -->
<legend><center><h2><b>informations du participant</b></h2></center></legend><br>

<!-- Text input-->
<?php

  $id=$_GET['id'];




$xml=simplexml_load_file("MonF.xml");

foreach ($xml->participant as $value) {

if($value->attributes()->{'id'}==$id){
    # code
    $l=$value;
      }
}


  # code...
echo "<table border:2 class='table table-striped'>";
  echo "
<tr>
  <td>Id</td>
  <td>FirstName</td>
  <td>LastName</td>
    <td>Sexe</td>
        <td>Email</td>

        <td colspan=". 2 .">Papier</td>


  </tr>
  ";

  
  
    # code...
    
      echo "<tr>";
    # code...
        echo "<td> ".$l->attributes()->{'id'}."</td>";

    echo "<td>".$l->firstName."</td>";
    
    echo "<td> ".$l->lastName."</td>";
        echo "<td> ".$l->attributes()->{'sexe'}."</td>";


        echo "<td> ".$l->email."</td>";
        
if ($l->attributes()->{'withpaper'}=='yes') {
          # code...
        
                echo "<td> Numero:".$l->paper->attributes()->{'number'}."</td>";}

        else{
          echo "<td> N'a pas de papier</td>";
        }




        
      echo "</tr>";

  
  



 echo "</table>";
 ?>
 <legend><h2><b>Informations de paiement</b></h2></legend><br>

<?php

echo "<table border:2 class='table table-striped'>";


 if ($l->payement->attributes()->{'paye'}=='yes') {

          # code...
        echo "<tr>
        <td>Etat</td>
        <td><p>Le participant a payé</p></td></tr>";

        echo "<tr><td>devise</td><td> ".$l->payement->attributes()->{'devise'}."</td></tr>";
        echo "<tr><td>Montant</td><td> ".$l->payement->attributes()->{'montant'}."</td></tr>";}

      
        else{
            echo "<tr><td>Etat</td>
        <td><p>Le participant n'a pas encore payé</p></td></tr>";
          
        }
 echo "</table>";


?>
<legend><h2><b>Informations sur l'évenement social</b></h2></legend><br>

<?php

echo "<table border:2 class='table table-striped'>";


 if ($l->socialEvent->attributes()->{'participate'}=='yes') {

          # code...
        echo "<tr>
        <td>Particpation</td>
        <td>Devise</td>

        <td>Montant</td>
        <td colspan=". 3 .">Accompgnation</td>

</tr>
        <tr><td><p>OUi</p></td>";
        
        echo "<td> ".$l->socialEvent->attributes()->{'devise'}."</td>";
        echo "<td> ".$l->socialEvent->attributes()->{'montant'}."</td>";

                echo "<td> ".$l->socialEvent->accopagned->attributes()->{'accopagned'}."</td>";

if ($l->socialEvent->accopagned->attributes()->{'accopagned'}=='yes') {
  # code...

                echo "<td> prentship:".$l->socialEvent->accopagned->attributes()->{'prentship'}."</td>";
}

      }

      
        else{
            echo "<tr><td>Etat</td>
        <td><p>Non participant à l'evenement social</p></td></tr>";
          
        }


?>

</fieldset>
</form>
</div>
    </div><!-- /.container -->



   <script  src="js/index.js"></script>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/wow.js"></script>
  <script src="js/custom.js"></script>

<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>



</body>

</html>
