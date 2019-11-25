<?php
$id=$_GET['id'];
$xml=simplexml_load_file("MonF.xml");

foreach ($xml->participant as $value) {
if($value->attributes()->{'id'}==$id)
{

  $l=$value;
}
}
?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>update form</title>
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
              
                 <li><a href="index.html">Accueil</a></li>
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

    <form class="well form-horizontal" method="post" action="update2.php?id=<?php echo $id;?>"  id="contact_form" style="border-radius: 40px;margin-top: 140PX;">
<fieldset>

<!-- Form Name -->
<legend><center><h2><b>Update Form</b></h2></center></legend><br>

<!-- Text input-->
<div class="row">
  
  <div class="col-md-6"> 
<div class="form-group">

  <label class="col-md-3 control-label">Prénom</label>  
  <div class="col-md-9 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="fname" placeholder="First Name" class="form-control"  type="text" value="<?php echo $l->firstName ?>">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-3 control-label" >Nom</label> 
    <div class="col-md-9 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="lname" placeholder="Last Name" class="form-control"  type="text" value="<?php echo $l->lastName ?>">
    </div>
  </div>
</div>

 <div class="form-group"> 
  <label class="col-md-3 control-label">Sexe</label>
    <div class="col-md-9 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="font-awesome fa fa-male"></i></span>
    <select name="sexe" id="sel0" class="form-control selectpicker">
    
        <option value="<?php echo $l->attributes()->{'sexe'}?>">
          <?php echo $l->attributes()->{'sexe'}?>
        </option>
      <?php if ( $l->attributes()->{'sexe'}=='Male') {
      
      
        echo "<option value='Femme'>
          Femme
        </option>
        </select>";
        }
        else echo "<option value='Male'>
          Male
        </option>
        </select>"
          ?>
   
  </div>
</div>
</div>
<div class="form-group">
  <label class="col-md-3 control-label" >Email</label> 
    <div class="col-md-9 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="email" placeholder="Last Name" class="form-control" value="<?php echo $l->email ?>"  type="email">
    </div>
  </div>
</div>

<div class="form-group"> 
  <label class="col-md-3 control-label">Payment</label>
    <div class="col-md-9 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
    <select name="sel1" id="sel1" class="form-control selectpicker">
    
        <option value="<?php echo $l->payement->attributes()->{'paye'}?>">
         <?php echo $l->payement->attributes()->{'paye'}?>
        </option>
      <?php if ( $l->payement->attributes()->{'paye'}=='yes') {
      
      
        echo "<option value='no'>
          no
        </option>
        </select>";
        }
        else echo "<option value='yes'>
          yes
        </option>
        </select>"
          ?>
      
        </select>
   
  </div>
</div>
</div>

<div class="form-group" id="d1"> 
  <label class="col-md-3 control-label">Devise</label>
    <div class="col-md-9 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-euro"></i></span>
 <select class="form-control" id="sel2" name="sel2">
        <option value="Dh">
          Dirham
        </option>
        <option value="Euro">
          Euro
        </option>
        <option value="Dollar">
          Dollar
        </option>
      </select>
   
  </div>
</div>
</div>
  
<!-- Text input-->

<div class="form-group">
  <label class="col-md-3 control-label">Montant</label>  
  <div class="col-md-9 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="fa fa-money"></i></span>
  <input  name="montant" placeholder="Montant" class="form-control"  value="<?php echo $l->payement->attributes()->{'montant'} ?>" type="number" default='0'>
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-3 control-label" >Affiliation</label> 
    <div class="col-md-9 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="fa fa-users"></i></span>
  <input name="aff" placeholder="Affiliation" class="form-control" value="<?php echo $l->affiliation?>" type="text">
    </div>
  </div>
</div>
<!-- Text input-->

<div class="form-group">
  <label class="col-md-3 control-label" >Pays</label> 
    <div class="col-md-9 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="fa fa-flag"></i></span>
  <input name="country" placeholder="Pays" class="form-control" value="<?php echo $l->affiliation->attributes()->{'country'} ?>" type="text">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-3 control-label" >Ville</label> 
    <div class="col-md-9 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="fa fa-flag "></i></span>
  <input name="city" placeholder="Ville" class="form-control" value="<?php echo $l->affiliation->attributes()->{'city'} ?>" type="text">
    </div>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-3 control-label" >Adresse</label> 
    <div class="col-md-9 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-road "></i></span>
  <input name="adresse" placeholder="Adresse" class="form-control"  type="text" value="<?php echo $l->address ?>">
    </div>
  </div>
</div>
<div class="form-group">
  <label class="col-md-3 control-label" >Presentation</label> 
    <div class="col-md-9 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-calendar "></i></span>
  <input name="pdate" placeholder="date" class="form-control"  type="date"  value="<?php echo $l->presentation->attributes()->{'date'} ?>">
    </div>
    <div class="input-group">
  <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
  <input name="phour" placeholder="heure" class="form-control"  type="time" value="<?php echo $l->presentation->attributes()->{'hour'} ?>">
  </div>
</div></div>

<div class="form-group">
  <label class="col-md-3 control-label" >Arrivé</label> 
    <div class="col-md-9 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
  <input name="adate" placeholder="date" class="form-control"  type="date" value="<?php echo $l->travel->arrival->attributes()->{'date'} ?>">
    </div>
    <div class="input-group">
  <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
  <input name="ahour" placeholder="heure" class="form-control"  type="time" value="<?php echo $l->travel->arrival->attributes()->{'hour'} ?>">
  </div>
  <div class="input-group">
  <span class="input-group-addon"><i class="fa fa-plane"></i></span>
  <input name="ar" placeholder="Airport" class="form-control"  type="text" value="<?php echo $l->travel->arrival->attributes()->{'airport'} ?>">
  </div>
</div>
</div>
</div>

<!-- Text input-->
<div class="col-md-6"> 
<div class="form-group">
  <label class="col-md-3 control-label" >Départ</label> 
    <div class="col-md-9 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
  <input name="ddate" placeholder="date" class="form-control"  type="date"  value="<?php echo $l->travel->departure->attributes()->{'date'} ?>">
    </div>
    <div class="input-group">
  <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
  <input name="dhour" placeholder="heure" class="form-control"  type="time" value="<?php echo $l->travel->departure->attributes()->{'hour'} ?>">
  </div>
  <div class="input-group">
  <span class="input-group-addon"><i class="fa fa-plane"></i></span>
  <input name="dr" placeholder="Airport" class="form-control"  type="text"  value="<?php echo $l->travel->departure->attributes()->{'airport'} ?>" >
  </div>
</div>
</div>

 <div class="form-group"> 
  <label class="col-md-3 control-label">Paper</label>
    <div class="col-md-9 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-paperclip"></i></span>
    <select name="sel3" id="sel3" class="form-control selectpicker" >
    
        <option value="<?php echo $l->attributes()->{'withpaper'}?>">
          <?php echo $l->attributes()->{'withpaper'}?>
        </option>
      <?php if ( $l->attributes()->{'withpaper'}=='yes') {
      
      
        echo "<option value='no'>
          no
        </option>
        </select>";
        }
        else echo "<option value='yes'>
          yes
        </option>
        </select>"
          ?>
   
  </div>
</div>
</div>

<!-- Text input-->
       <div id="d2"><div class="form-group" >
  <label class="col-md-3 control-label">Numéro</label>  
    <div class="col-md-9 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-sort-numeric-asc"></i></span>
  <input name="pnumber" placeholder="num" class="form-control" id="exampleInputPassword1" type="number" default='0' value="<?php echo $l->paper->attributes()->{'number'} ?>">
    </div>
  </div>
</div>
 <div class="form-group">
  <label class="col-md-3 control-label">Auteur</label>  
    <div class="col-md-9 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-user"></i></span>
  <input name="aname" placeholder="Nom_auteur" class="form-control" id="exampleInputPassword1" type="text" value="<?php echo $l->paper->author->name ?>">
    </div>
    <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-users"></i></span>
  <input name="ataff" placeholder="Affiliation_auteur" class="form-control" id="exampleInputPassword1" type="text" value="<?php echo $l->paper->author->affiliation ?>" >
    </div>
    <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-ticket"></i></span>
  <input name="title" placeholder="Titre" class="form-control" id="exampleInputPassword1" type="text" value="<?php echo $l->paper->title ?>">
    </div>
  </div>
</div> </div>

<div class="form-group">
  <label class="col-md-3 control-label">Hotel</label>  
    <div class="col-md-9 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-hospital-o"></i></span>
  <input name="hname" placeholder="Nom_hotel" class="form-control" id="exampleInputPassword1" type="text" value="<?php echo $l->hotel->name ?>">
    </div>
    <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-hospital-o"></i></span>
  <input name="hadd" placeholder="Adressse_hotel" class="form-control" id="exampleInputPassword1" type="text" value="<?php echo $l->hotel->addresse ?>">
    </div>
    <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-phone"></i></span>
  <input name="htel" placeholder="Telephone_hotel" class="form-control" id="exampleInputPassword1" type="text" value="<?php echo $l->hotel->tel ?>">
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-3 control-label">événement social</label>  
    <div class="col-md-9 inputGroupContainer">
 
    <div class="input-group">

        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i> Participation</span>
 <select class="form-control" id="sel4" name="sel4">
        <option value="yes">
          yes
        </option>
        <option value="no">
          no
        </option>
        
      </select>
   
  </div>

        
          
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-euro"></i>   Devise       </span>
 <select class="form-control" id="sel5" name="sel5">
        <option value="Dh">
          Dirham
        </option>
        <option value="Euro">
          Euro
        </option>
        <option value="Dollar">
          Dollar
        </option>
      </select>
   
  </div>

    <div class="input-group">
  <span class="input-group-addon"><i class="fa fa-money"></i> Montant</span>
  <input  name="smontant" placeholder="Montant" class="form-control"  type="number" default='0' value="<?php echo $l->socialEvent->payement->attributes()->{'montant'}  ?>">
    </div>
  <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-square"></i> Acompagné </span>
 <select class="form-control" id="sel6" name="sel6">
        <option value="yes">
          yes
        </option>
        <option value="no">
          no
        </option>
      </select>
   
  </div>  
    <div class="input-group">
  <span class="input-group-addon"><i class="fa fa-circle"></i>  Parentship</span>
  <input  name="par" placeholder="Parentship" class="form-control"  type="text" value="<?php echo $l->socialEvent->accopagned->attributes()->{'prentship'}  ?>" >
    </div>
    <div class="input-group">
  <span class="input-group-addon"><i class="fa fa-user"></i> Nom</span>
  <input  name="pname" placeholder="Nom_even" class="form-control"  type="text" value="<?php echo $l->socialEvent->accopagned->name  ?>">
    </div>
</div>


</div>
</div></div>




<!-- Text input-->
       


<!-- Select Basic -->



<!-- Button -->


<div class="form-group pull-right">
  <label class="col-md-3 control-label"></label>
  <div class="col-md-4"><br>
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" class="btn btn-dark" value="send" name="ok">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSUBMIT <span class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
  </div>
</div>

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
