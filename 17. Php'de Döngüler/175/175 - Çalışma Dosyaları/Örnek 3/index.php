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
	
	$Isimler	=	array("Volkan", "Hakan", "Onur", array("Aslı", "Hale", array("Siyah", "Beyaz", "Mavi"), "Banu", "Derya"), "Levent", "Serkan");
	
	print_r($Isimler);
	
	echo "<br /><br />";
	
	foreach($Isimler as $Icerik){
		
		if(is_array($Icerik)){
			
			foreach($Icerik as $Deger){
				
				if(is_array($Deger)){
					
					foreach($Deger as $Sonuc){
						echo $Sonuc . "<br />";
					}
					
				}else{
					echo $Deger . "<br />";
				}
			}
			
		}else{
			echo $Icerik . "<br />";
		}
	}
	
	?>
</body>
</html>