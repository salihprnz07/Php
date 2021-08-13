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
	fgetcsv()	:	Belirtilecek olan csv dosyası içeriğini kontrol ederek ve bilgileri satır satır bularak, bulduğu değeri geriye döndürür. Ayrıca tüm dosya içeriğinde bulunan satır verileri herhangi bir döngü yardımıyla elde edilebilir.
	fputcsv()	:	Belirtilecek olan csv dosyasına, belirtilecek olan verileri yazmak için kullanılır. Ayrıca istenirse işlem sonucunda yazılan karakter sayısı değerini bularak, bulduğu değeri geriye döndürür.
	*/
	
	$Dosya		=	"Ornek.csv";
	$DosyaAc	=	fopen($Dosya , "r");
	
	while($Cozumle=fgetcsv($DosyaAc)){
		$Oku	=	$Cozumle[0];
		echo iconv("iso-8859-9", "utf-8", $Oku) . "<br />";
	}
	
	fclose($DosyaAc);
	
	?>
</body>
</html>