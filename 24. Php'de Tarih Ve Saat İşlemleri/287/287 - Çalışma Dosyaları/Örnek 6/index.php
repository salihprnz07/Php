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
	time()			:	Geçerli zamanın Unix zaman damgası değerini bularak, bulduğu değeri geriye döndürür.
	mktime()		:	Belirtilecek olan zamanın Unix zaman damgası değerini bularak, bulduğu değeri geriye döndürür.
	microtime()		:	Geçerli zamanın Unix zaman damgası ve mikro saniye değerini bularak, bulduğu değeri geriye döndürür.
	gettimeofday()	:	Geçerli zamanın Unix zaman damgası, mikro saniye, yaz saati uygulaması ve Greenwich batısı değerlerinden yeni bir dizi oluşturarak, oluşturduğu dizi değerini geriye döndürür. Ayrıca istenirse string olarak da geçerli zamanın Unix zaman damgası ve mikro saniye değerini bularak, bulduğu değeri geriye döndürür.
	*/
	
	$Deger	=	microtime();
	
	$Dizi	=	explode(" ", $Deger);
	
	$ZamanDamgasi	=	$Dizi[1];
	$MikroSaniye	=	$Dizi[0];
	
	echo "Zaman Damgasi : " . $ZamanDamgasi . "<br />";
	echo "Mikro Saniye : " . $MikroSaniye;
	
	?>
</body>
</html>