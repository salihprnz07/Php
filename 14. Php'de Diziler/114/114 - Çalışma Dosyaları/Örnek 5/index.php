<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<title>Extra Eğitim</title>
</head>

<body>
	<?php
	
	$Degerler				=	array();
	$Degerler[]				=	"Volkan";
	$Degerler["Isim1"]		=	"Hakan";
	$Degerler[]				=	"Onur";
	$Degerler["Isim2"]		=	"Serkan";
	$Degerler["SonIsim"]	=	"Levent";
	
	echo "<pre>";
	print_r($Degerler);
	echo "</pre><br /><br />";
	
	echo $Degerler[0] . "<br />";
	echo $Degerler["Isim1"] . "<br />";
	echo $Degerler[1] . "<br />";
	echo $Degerler["Isim2"] . "<br />";
	echo $Degerler["SonIsim"];
	
	?>
</body>
</html>