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
	extends		:	Bir sınıfı başka bir sınıftan türetmek istediğimiz zaman kullanılır.
	final		:	En son kullanılan sınıftır ve türeyen son sınıf anlamını taşır. Ayrıca metodlar üzerinde de kullanılabilir ve final tanımlanırsa bağlı sınıflar içerisinde aynı metod adı kullanılamaz.
	*/
	
	class Bir {
		
		public function Deneme(){
			return "Volkan";
		}
		
	}
	
	final class Iki extends Bir { // Iki adındaki sınıfda final ifadesi kullanıldığı için artık bu sınıfdan alt sınıf veya sınıflar türetilemez.
		
		public function Deneme(){
			return "Hakan";
		}
		
	}
	
	class Uc extends Iki { 
		
		public function Deneme(){
			return "Onur";
		}
		
		public function DegerDondur(){
			$Deger	=	parent::Deneme();
			return $Deger;
		}
		
	}
	
	$Sonuc		=	new Uc;
	
	echo $Sonuc->DegerDondur();
	
	?>
</body>
</html>