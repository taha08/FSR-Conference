<?php
$id=$_GET['id'];
$xml=simplexml_load_file("MonF.xml");
$length=count($xml->participant);
for ($i=0; $i <$length ; $i++) { 
	# code...


if($xml->participant[$i]->attributes()->{'id'}==$id)
{
	unset($xml->participant[$i]);
break;

}


}


file_put_contents("MonF.xml",$xml->saveXML());

header('Location: index.html
'); 

	
?>