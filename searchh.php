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
              
                 <li class="active"><a href="index.html">Accueil</a></li>
                <li><a href="form.php">Registration</a></li>
                <li><a href="search.php">Recherche</a></li>
               <li> <a href="listepartic.php">participants</a></li>    
                <li> <a href="listeAttestation.php"> Attestations</a></li>
                <li> <a href="listeRecu.php">reçus de paiement</a></li>
                <li><a href="listebadges.php">badges</a></li>

              </ul>
            </div>
          </div>
        </div>
      </nav></div></header>

 <div class="container" >

    <form class="well form-horizontal" method="post" action="searchh.php"  id="contact_form" style="border-radius: 40px;margin-top: 140PX;">
<fieldset>

<!-- Form Name -->
<legend><center><h2><b>search form</b></h2></center></legend><br>

<!-- Text input-->
<div class="form-group">
      
      <input type="text" class="form-control" id="exampleInputEmail1" required name="inp" placeholder="Recherche" style="border-radius: 20PX;">
      
</div>

<!-- Text input-->


<div class="form-group">
            <label class="col-md-4 control-label"></label>
  <div>
        <input style="margin-left: 35px;" type="submit" name="id" value="By_ID" class="btn btn-primary "> 
        <input type="submit" name="name" value="By_Name" class="btn btn-primary "> 
        <input type="submit" name="paper" value="By_paper" class="btn btn-primary "> 
</div>
</div>
<?php
  echo "<br><br>
  <table class='table table-striped'  border=". 2 .">";
  echo "
<tr>
  <td>Id</td>
  <td>FirstName</td>
  <td>LastName</td>
  <td colspan=". 2 .">action</td>
  </tr>
  "; 
if (isset($_REQUEST['id'])) {

  $id=$_REQUEST['inp'];

$xml=simplexml_load_file("MonF.xml");


foreach ($xml->participant as $value) {
  # code...

  if ($value->attributes()->{'id'}==$id) {
    echo "<tr>";
    # code...
        echo "<td> ".$id."</td>";

    echo "<td>".$value->firstName."</td>";
    
    echo "<td> ".$value->lastName."</td>";
        echo "<td><a href='update.php?id=".$id."'> update</a></td>";
        echo "<td><a href='delete.php?id=".$id."'> delete</a></td>";
      
      echo "</tr>";
        echo "<bu";

  }

  
  
}

}
if (isset($_REQUEST['name'])) {
  $id=$_REQUEST['inp'];

$xml=simplexml_load_file("MonF.xml");

foreach ($xml->participant as $value) {
  # code...

  
  if ($value->firstName==$id) {
    # code...
    echo "<tr>";
    # code...
        echo "<td> ".$value->attributes()->{'id'}."</td>";

    echo "<td>".$value->firstName."</td>";
    
    echo "<td> ".$value->lastName."</td>";
        echo "<td><a href='update.php?id=".$value->attributes()->{'id'}."'> update</a></td>";
        echo "<td><a href='delete.php?id=".$value->attributes()->{'id'}."'> delete</a></td>";




      echo "</tr>";
  }
  
  
}
}
if (isset($_REQUEST['paper'])) {
  $id=$_REQUEST['inp'];

$xml=simplexml_load_file("MonF.xml");

foreach ($xml->participant as $value) {
  # code...

  
  if ($value->paper->attributes()->{'number'}==$id) {
    # code...
    
      echo "<tr>";
    # code...
        echo "<td> ".$value->attributes()->{'id'}."</td>";

    echo "<td>".$value->firstName."</td>";
    
    echo "<td> ".$value->lastName."</td>";
        echo "<td><a href='update.php?id=".$value->attributes()->{'id'}."'> update</a></td>";
        echo "<td><a href='delete.php?id=".$value->attributes()->{'id'}."'> delete</a></td>";

      echo "</tr>";

  }
  
  
}
}

 echo "</table>";

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


<script type="text/javascript" >
$(function() {
 
    $('#sel1').change(function(){
        if($('#sel1').val() == 'yes') {
            $('#d1').show(); 
        } else {
            $('#d1').hide(); 
        } 
    });

});
 $(function() {

    $('#sel3').change(function(){
        if($('#sel3').val() == 'yes') {
            $('#d2').show(); 
        } else {
            $('#d2').hide(); 
        } 
    });
    
});
</script> 

</body>

</html>
