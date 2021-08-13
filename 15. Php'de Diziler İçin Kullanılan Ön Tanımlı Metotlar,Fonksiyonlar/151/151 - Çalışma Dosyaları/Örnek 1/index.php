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
	array_sum()		:	Dizi içerisinde bulunan eleman veya elemanların rakamsal değerler içermesi durumunda tüm elemanların toplamını almak için kullanılır.
	array_product()	:	Dizi içerisinde bulunan eleman veya elemanların rakamsal değerler içermesi durumunda tüm elemanların çarpımını almak için kullanılır.
	*/
	
	$Sayilar		=	array(2, 5, 7, 11, 15, 8, 5, 43, 23, 34, 41);
	
	echo "<pre>";
	print_r($Sayilar);
	echo "</pre><br />";
	
	$ToplaminiAl	=	array_sum($Sayilar);
	
	echo "Dizi içerisindeki tüm elemanların toplam değeri : " . $ToplaminiAl;
	
	?>
</body>
</html>