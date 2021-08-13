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
	iconv()					:	Belirtilecek olan içeriği, belirtilecek olan karakter kodlaması dahilinde dönüştürerek, karakter kodlaması dönüştürülmüş olan değeri geriye döndürür.
		TRANSLIT 	:	Belirtilecek olan içerikte gösterilmeyen bir karaktere / karakterlere rastlanacak olursa, ilgili krakterin / karakterlerin yerine benzer bir karakter / kural dışı karakter değeri yerleştirmek için kullanılır.
		IGNORE 		:	Belirtilecek olan içerikte gösterilmeyen bir karaktere / karakterlere rastlanacak olursa, ilgili karakter / karakterler yok sayılır veya ilgili karakterin / karakterlerin yerine kural dışı karakter değeri yerleştirmek için kullanılır.
	iconv_get_encoding()	:	PHP sayfası dahilinde kullanılmakta olan karakter kodlama bilgileri listesini bulur ve bulduğu değerlerden yeni bir dizi oluşturarak, oluşturduğu dizi değerini geriye döndürür. Ayrıca belirtilecek olan değer doğrultusunda tüm karakter kodlama bilgisi yerine sadece ilgili karakter kodlaması bilgisi değerinide döndürebilir.
	iconv_set_encoding()	:	PHP sayfası dahilinde kullanılmakta olan karakter kodlama türüne, belirtilecek olan karakter kodlama kümesini atamak için kullanılır.
	*/
	
	$Deger		=	iconv_get_encoding();
	echo "<pre>";
	print_r($Deger);
	echo "</pre>";
	
	?>
</body>
</html>