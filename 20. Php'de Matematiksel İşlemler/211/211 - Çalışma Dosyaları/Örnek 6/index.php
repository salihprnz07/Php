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
	
	$Deger		=	125;
	$EkDeger	=	14;
	
	echo $Deger . " % " . $EkDeger . " = ";
	
	$Deger		%=	$EkDeger;	// 125 sayısı 14 sayısına 8 defa tam olarak bölünebildiği için; Formül : 14 * 8 = 112     125 - 112 = 13
	
	echo $Deger;
	
	?>
</body>
</html>