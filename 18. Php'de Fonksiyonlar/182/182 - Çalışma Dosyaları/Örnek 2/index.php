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
	return 	:	Fonksiyondan değer döndürmek için kullanılır.
	*/
	
	function Islem(){
		$IsimSoyisim	=	"Volkan Alakent";
		
		return $IsimSoyisim;
	}
	
	$Sonuc	=	Islem();
	
	if($Sonuc=="Volkan Alakent"){
		echo $Sonuc . " bir yazılım ve programlama geliştirme uzmanıdır.";
	}else{
		echo "Kişi tanınmıyor.";
	}
	
	?>
</body>
</html>