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
	date_create()		:	Belirtilecek olan tarih değerlerine göre, yeni bir tarih nesnesi dizisi oluşturarak, oluşturduğu dizi değerini geriye döndürür.
	date_date_set()		:	Oluşturulmuş olan yeni bir tarih nesnesine, belirtilecek olan yeni bir tarihi atamak için kullanılır.
	date_time_set()		:	Oluşturulmuş olan yeni bir tarih nesnesine, belirtilecek olan yeni bir saati atamak için kullanılır.
	*/
	
	$Tarih		=	date_create(); // Yıl-Ay-Gün
	
	date_date_set($Tarih, 1980, 12, 8); // Tarihin Atanacağı Degisken Adı, Yıl, Ay, Gün
	
	echo "<pre>";
	print_r($Tarih);
	echo "</pre>";

	?>
</body>
</html>