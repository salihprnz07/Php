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
	/*
	number_format()		:	Herhangi bir sayıyı belirtilecek olan ayraçlar doğrultusunda biçimlendirerek, biçimlendirdiği değeri geriye döndürür.
	*/
	
	$Sayi		=	865.4535;
	
	echo "Sayının orjinal hali : " . $Sayi . "<br />";
	
	$Formatla	=	number_format($Sayi, 1);
	
	echo "Sayının formatlanmış hali : " . $Formatla;
	
	?>
</body>
</html>