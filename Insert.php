<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/src/Exception.php';
require 'vendor/src/PHPMailer.php';
require 'vendor/src/SMTP.php';


	if (isset($_REQUEST['ok'])) {
		$xml=new DOMDocument("1.0","utf-8");
		$xml->load("MonF.xml");
	$nbre=intval($xml->getElementsByTagname("participant")->count());
	if ($nbre!=0) {
		# code...
	
	$dernier=$xml->getElementsByTagname("participant")[$nbre-1];
		$id=intval($dernier->getAttribute('id'))+1;}
		else
		{
			$id=0;
		}
		$rootTag=$xml->getElementsByTagname("register")->item(0);
	$partipant=$xml->createElement("participant");
	$partipant->setAttribute('id', $id);
		$partipant->setAttribute('sexe', $_REQUEST['sexe']);
				$partipant->setAttribute('withpaper', $_REQUEST['sel3']);

$fname=$xml->createElement("firstName",$_REQUEST['fname']);
$lname=$xml->createElement("lastName",$_REQUEST['lname']);
$email=$xml->createElement("email",$_REQUEST['email']);

$payment=$xml->createElement("payement");
$payment->setAttribute('paye', $_REQUEST['sel1']);
$payment->setAttribute('devise', $_REQUEST['sel2']);
if ($_REQUEST['montant']=="") {
	# code...
	$payment->setAttribute('montant', '0');

}else
{
$payment->setAttribute('montant', $_REQUEST['montant']);
}

$affiliation=$xml->createElement("affiliation",$_REQUEST['aff']);
$affiliation->setAttribute('city', $_REQUEST['city']);
$affiliation->setAttribute('country', $_REQUEST['country']);

$add=$xml->createElement("address",$_REQUEST['adresse']);

$pres=$xml->createElement("presentation");
$pres->setAttribute('date', $_REQUEST['pdate']);
$pres->setAttribute('hour', $_REQUEST['phour']);

$travel=$xml->createElement("travel");
$arrival=$xml->createElement("arrival");
$arrival->setAttribute('date', $_REQUEST['adate']);
$arrival->setAttribute('hour', $_REQUEST['ahour']);
$arrival->setAttribute('airport', $_REQUEST['ar']);
$departure=$xml->createElement("departure");
$departure->setAttribute('date', $_REQUEST['ddate']);
$departure->setAttribute('hour', $_REQUEST['dhour']);
$departure->setAttribute('airport', $_REQUEST['dr']);
$travel->appendChild($arrival);
$travel->appendChild($departure);

$paper=$xml->createElement("paper");
if ($_REQUEST['pnumber']=="") {
	$paper->setAttribute('number','0');

	}else{
$paper->setAttribute('number',$_REQUEST['pnumber']);}

$author=$xml->createElement("author");
$name=$xml->createElement("name",$_REQUEST['aname']);
$aff=$xml->createElement("affiliation",$_REQUEST['ataff']);
$author->appendChild($name);
$author->appendChild($aff);
$title=$xml->createElement("title",$_REQUEST['title']);

$paper->appendChild($author);
$paper->appendChild($title);

$hotel=$xml->createElement("hotel");
$hname=$xml->createElement("name",$_REQUEST['hname']);
$hadd=$xml->createElement("addresse",$_REQUEST['hadd']);
$htel=$xml->createElement("tel",$_REQUEST['htel']);
$hotel->appendChild($hname);
$hotel->appendChild($hadd);
$hotel->appendChild($htel);

$se=$xml->createElement("socialEvent");
$se->setAttribute('participate', $_REQUEST['sel4']);
$spayment=$xml->createElement("payement");
$spayment->setAttribute('devise', $_REQUEST['sel5']);
if ($_REQUEST['smontant']=='') {
	# code...
	$spayment->setAttribute('montant', '0');

}else{
$spayment->setAttribute('montant', $_REQUEST['smontant']);}
$accopagned=$xml->createElement("accopagned");
$accopagned->setAttribute('accopagned', $_REQUEST['sel6']);
$accopagned->setAttribute('prentship', $_REQUEST['par']);
$acname=$xml->createElement("name",$_REQUEST['pname']);
$accopagned->appendChild($acname);
$se->appendChild($spayment);
$se->appendChild($accopagned);


$partipant->appendChild($fname);
$partipant->appendChild($lname);
$partipant->appendChild($email);
$partipant->appendChild($payment);
$partipant->appendChild($affiliation);
$partipant->appendChild($add);
$partipant->appendChild($pres);
$partipant->appendChild($travel);
$partipant->appendChild($paper);
$partipant->appendChild($hotel);
$partipant->appendChild($se);


$nom=$_REQUEST['fname'];
$prenom=$_REQUEST['lname'];


$rootTag->appendChild($partipant);
$xml->save("MonF.xml");
$mail = new PHPMailer;
	$mail->isSMTP();
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = 'tls';
	$mail->Host ='smtp.gmail.com';
	$mail->Port =587;
	$mail->Username ='xmldevoir@gmail.com';
	$mail->Password ='P@$$word07';
	$mail->SetFrom('xmldevoir@gmail.com');
	$mail->Subject='invitation';
	$mail->Body ="
	Vous etes invités à l'evenement !
	Nom:".$nom."
	Prenom:".$prenom."
	Identifiant:".$id;
	$mail->addAddress($_REQUEST['email']);
	$mail->SMTPDebug = 0;
$mail->send();

		# code...
	}
	header('Location: index.html');
	

	?>
</body>
</html>