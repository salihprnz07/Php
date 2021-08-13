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
	str_split()	:	Belirtilecek olan içeriği, belirtilecek olan karakter sayısına göre bölerek, bölümleme işlemi sonucunda oluşan değerlerden yeni bir dizi oluşturarak, oluşturduğu değeri geriye döndürür.
	mb_split()	:	Belirtilecek olan içeriği, belirtilecek olan düzenli ifade dahilinde bölerek, bölümleme işlemi sonucunda oluşan değerlerden yeni bir dizi oluşturarak, oluşturduğu değeri geriye döndürür.
	strtok()	:	Belirtilecek olan içeriği, belirtilecek olan ayraç doğrultusunda kontrol ederek, eşleşen ayraç değeri olması durumunda, ilk eşleşen ayracın öncesinde bulunan değeri bularak, bulduğu değeri geriye döndürür. Ayrıca eşleşen tüm ayraçların öncesinde bulunan değerlerde herhangi bir döngü yardımı ile tek tek elde edilebilir.
	strpbrk()	:	Belirtilecek olan içeriği, belirtilecek olan ayraç doğrultusunda kontrol ederek, eşleşen ayraç değeri olması durumunda, ilk eşleşen ayracın sonrasında bulunan değeri bularak, bulduğu değeri geriye döndürür.
	*/
	
	$Deger	=	"Extra Eğitim<br />\nVolkan Alakent<br />\nA'dan Z'ye PHP Görsel Eğitim Seti";
	
	echo $Deger . "<br /><br /><br />";
	
	$Islem	=	strtok($Deger, "\n");
	
	echo $Islem;
	
	?>
</body>
</html>