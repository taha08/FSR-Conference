<?php

if (isset($_REQUEST['ok'])) {
	$id=$_GET['id'];

$xml=simplexml_load_file("MonF.xml");

foreach ($xml->participant as $value) {
	# code...
	
	if ($value->attributes()->{'id'}==$id) {
		$value->attributes()->{'withpaper'}=$_REQUEST['sel3'];
$value->attributes()->{'sexe'}=$_REQUEST['sexe'];
$value->firstName=$_REQUEST['fname'];
$value->lastName=$_REQUEST['lname'];
$value->email=$_REQUEST['email'];
$value->payement->attributes()->{'paye'}=$_REQUEST['sel1'];
$value->payement->attributes()->{'devise'}=$_REQUEST['sel2'];
$value->payement->attributes()->{'montant'}=$_REQUEST['montant'];
$value->affiliation=$_REQUEST['aff'];
$value->affiliation->attributes()->{'city'}=$_REQUEST['city'];
$value->affiliation->attributes()->{'country'}=$_REQUEST['country'];
$value->address=$_REQUEST['adresse'];

$value->presentation->attributes()->{'date'}=$_REQUEST['pdate'];
$value->presentation->attributes()->{'hour'}=$_REQUEST['phour'];

$value->travel->arrival->attributes()->{'date'}=$_REQUEST['adate'];
$value->travel->arrival->attributes()->{'hour'}=$_REQUEST['ahour'];
$value->travel->arrival->attributes()->{'airport'}=$_REQUEST['ar'];

$value->travel->departure->attributes()->{'date'}=$_REQUEST['ddate'];
$value->travel->departure->attributes()->{'hour'}=$_REQUEST['dhour'];
$value->travel->departure->attributes()->{'airport'}=$_REQUEST['dr'];

  $value->paper->attributes()->{'number'}=$_REQUEST['pnumber'];
$value->paper->author->nam=$_REQUEST['aname'];
$value->paper->author->affiliation=$_REQUEST['ataff'];
$value->paper->title=$_REQUEST['title'];

$value->hotel->name=$_REQUEST['hname'];
$value->hotel->addresse =$_REQUEST['hadd'];
$value->hotel->tel=$_REQUEST['htel'];

$value->socialEvent->attributes()->{'participate'}=$_REQUEST['sel4'];

$value->socialEvent->payement->attributes()->{'devise'}=$_REQUEST['sel5'];

$value->socialEvent->payement->attributes()->{'montant'}=$_REQUEST['smontant'];

$value->socialEvent->accopagned->attributes()->{'accopagned'}=$_REQUEST['sel6'];

$value->socialEvent->accopagned->attributes()->{'prentship'}=$_REQUEST['par'];
$value->socialEvent->accopagned->name=$_REQUEST['pname'];



	}




}}
file_put_contents("MonF.xml",$xml->saveXML());
	header('Location: index.html');

?>