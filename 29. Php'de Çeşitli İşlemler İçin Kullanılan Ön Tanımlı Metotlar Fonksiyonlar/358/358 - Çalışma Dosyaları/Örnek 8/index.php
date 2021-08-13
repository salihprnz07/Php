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
	strlen()			:	Belirtilecek olan içeriğin karakter sayısını bularak, bulduğu değeri geriye döndürür.
	mb_strlen()			:	Belirtilecek olan içeriğin, belirtilecek olan karakter kodlaması dahilinde gelişmiş olarak karakter sayısını bularak, bulduğu değeri geriye döndürür.
	substr_count()		:	Belirtilecek olan herhangi bir değerin, belirtilecek olan içerikte kaç tane olduğunu bularak, bulduğu değeri geriye döndürür.
	mb_substr_count()	:	Belirtilecek olan herhangi bir değerin, belirtilecek olan içerikte, belirtilecek olan karakter kodlaması dahilinde gelişmiş olarak kaç tane olduğunu bularak, bulduğu değeri geriye döndürür.
	str_word_count()	:	Belirtilecek olan içeriğin kelime sayısını bularak, bulduğu değeri geriye döndürür.
	*/
	
	$Icerik			=	"PHP Tüm Web Tabanlı Diller Arasında En Yaygın Olarak Kullanılanıdır. PHP Yazılım Dili Çok Gelişmiş Özelliklere Sahiptir. Volkan Alakent Bir PHP Yazılımcısıdır.";
	
	echo $Icerik . "<br />";
	
	$AranacakDeger	=	"PHP";
	
	$Sonuc			=	substr_count($Icerik, $AranacakDeger, 4, 100);
	
	echo $AranacakDeger . " Değeri İçerikte " . $Sonuc . " Defa Kullanılmıştır.";
	
	?>
</body>
</html>