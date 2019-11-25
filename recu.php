	<?php

	
	$id=$_GET['id'];



$xml=simplexml_load_file("MonF.xml");
$length=count($xml);
for ($i=0; $i <$length ; $i++) { 
	# code...


if($xml->participant[$i]->attributes()->{'id'}==$id)
{
	
	
$l=$xml->participant[$i];


}


}
file_put_contents("MonF.xml",$xml->saveXML());

$xml=new DOMDocument("1.0","utf-8");
		$xml->load("recu.xml");
	$tt=$xml->getElementsByTagname("participant")->count();



		$rootTag=$xml->getElementsByTagname("register")->item(0);


if ($tt!=0) {
	$h=$xml->getElementsByTagname("participant")[0];
$rootTag->removeChild($h);
}


$partipant=$xml->createElement("participant");
	$partipant->setAttribute('id', $id);
		$partipant->setAttribute('sexe', $l->attributes()->{'sexe'});
				$partipant->setAttribute('withpaper', $l->attributes()->{'withpaper'});

$fname=$xml->createElement("firstName", $l->firstName);
$lname=$xml->createElement("lastName", $l->lastName);
$email=$xml->createElement("email", $l->email);

$payment=$xml->createElement("payement");
$payment->setAttribute('paye', $l->payement->attributes()->{'paye'});
$payment->setAttribute('devise',$l->payement->attributes()->{'devise'});
$payment->setAttribute('montant', $l->payement->attributes()->{'montant'});

$affiliation=$xml->createElement("affiliation",$l->affiliation);
$affiliation->setAttribute('city', $l->affiliation->attributes()->{'city'});
$affiliation->setAttribute('country', $l->affiliation->attributes()->{'country'});

$add=$xml->createElement("address",$l->address);

$pres=$xml->createElement("presentation");
$pres->setAttribute('date',$l->presentation->attributes()->{'date'});
$pres->setAttribute('hour', $l->presentation->attributes()->{'hour'});

$travel=$xml->createElement("travel");
$arrival=$xml->createElement("arrival");
$arrival->setAttribute('date', $l->travel->arrival->attributes()->{'date'});
$arrival->setAttribute('hour', $l->travel->arrival->attributes()->{'hour'});
$arrival->setAttribute('airport', $l->travel->arrival->attributes()->{'airport'});
$departure=$xml->createElement("departure");
$departure->setAttribute('date', $l->travel->departure->attributes()->{'date'});
$departure->setAttribute('hour', $l->travel->departure->attributes()->{'hour'});
$departure->setAttribute('airport',$l->travel->departure->attributes()->{'airport'});
$travel->appendChild($arrival);
$travel->appendChild($departure);

$paper=$xml->createElement("paper");
$paper->setAttribute('number',$l->paper->attributes()->{'number'});
$author=$xml->createElement("author");
$name=$xml->createElement("name",$l->paper->author->name);
$aff=$xml->createElement("affiliation",$l->paper->author->affiliation);
$author->appendChild($name);
$author->appendChild($aff);
$title=$xml->createElement("title",$l->paper->title);

$paper->appendChild($author);
$paper->appendChild($title);

$hotel=$xml->createElement("hotel");
$hname=$xml->createElement("name",$l->hotel->name);
$hadd=$xml->createElement("addresse",$l->hotel->addresse);
$htel=$xml->createElement("tel",$l->hotel->tel);
$hotel->appendChild($hname);
$hotel->appendChild($hadd);
$hotel->appendChild($htel);

$se=$xml->createElement("socialEvent");
$se->setAttribute('participate', $l->socialEvent->attributes()->{'participate'});
$spayment=$xml->createElement("payement");
$spayment->setAttribute('devise',  $l->socialEvent->payement->attributes()->{'devise'});
$spayment->setAttribute('montant', $l->socialEvent->payement->attributes()->{'montant'});
$accopagned=$xml->createElement("accopagned");
$accopagned->setAttribute('accopagned', $l->socialEvent->accopagned->attributes()->{'accopagned'});
$accopagned->setAttribute('prentship', $l->socialEvent->accopagned->attributes()->{'prentship'});
$acname=$xml->createElement("name",$l->socialEvent->accopagned->name);
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




$rootTag->appendChild($partipant);









$xml->save("recu.xml");

		# code...
header('Location: recu.xml'); 

	

	?>
