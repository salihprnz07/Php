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
		
		public function __construct($HostBilgisi="localhost", $VeritabaniKullaniciAdi="Volkan-Alakent", $VeritabaniKullaniciSifresi="Volkan1980", $VeritabaniAdi="E-Ticaret"){
			$Metin = "Gelen Host Bilgisi : " . $HostBilgisi . "<br />" . "Gelen Veritabanı Kullanıcı Adı Bilgisi : " . $VeritabaniKullaniciAdi . "<br />" . "Gelen Veritabanı Kullanıcı Şifre Bilgisi : " . $VeritabaniKullaniciSifresi . "<br />" . "Gelen Veritabanı Adı Bilgisi : " . $VeritabaniAdi . "<br /><br /><br />";
			echo $Metin;
		}
		
	}
	
	$Islem	=	new Deneme;
	
	?>
</body>
</html>