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
	
	class Deneme{
		
		public function Test($Isim, $Soyisim){
			
			$Metin = "Merhaba " . $Isim . " " . $Soyisim . " Nasılsın ?";
			return $Metin;
			
		}
		
	}
	
	$Islem	= new Deneme;
	
	$Sonuc	=	$Islem->Test("Volkan", "Alakent");
	
	echo $Sonuc;
	
	?>
</body>
</html>