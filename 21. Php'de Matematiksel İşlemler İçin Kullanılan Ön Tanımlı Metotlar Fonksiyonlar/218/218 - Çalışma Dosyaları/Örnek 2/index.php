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
	rand()			:	Rastgele bir tam sayı üreterek, ürettiği değeri geriye döndürür.
	getrandmax()	:	rand() metodu kullanılarak üretilebilecek en büyük sayının değerini bularak, bulduğu değeri geriye döndürür.
	*/

	$SayiDegeri	=	getrandmax();
	
	echo "PHP tarafından rand() metodu kullanılarak üretilebilecek en büyük sayı değeri : " . $SayiDegeri;

	?>
</body>
</html>