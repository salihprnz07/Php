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
	file_exists()		:	Dosyanın belirtilecek olan path'e (yola) bağlı olarak varlığını sınamak için kullanılır. İşlem sonucu daima boolean (mantıksal) veri türünde döner.
	is_dir()			:	İçeriğin belirtilecek olan path'e (yola) bağlı olarak dizin olduğunu sınamak için kullanılır. İşlem sonucu daima boolean (mantıksal) veri türünde döner.
	is_file()			:	İçeriğin belirtilecek olan path'e (yola) bağlı olarak dosya olduğunu sınamak için kullanılır. İşlem sonucu daima boolean (mantıksal) veri türünde döner.
	is_readable()		:	Belirtilecek olan path'e (yola) bağlı olarak dosyanın okunabilir olduğunu sınamak için kullanılır. İşlem sonucu daima boolean (mantıksal) veri türünde döner.
	is_writeable()		:	Belirtilecek olan path'e (yola) bağlı olarak dosyanın yazılabilir olduğunu sınamak için kullanılır. İşlem sonucu daima boolean (mantıksal) veri türünde döner.
	is_writable()		:	Belirtilecek olan path'e (yola) bağlı olarak dosyanın yazılabilir olduğunu sınamak için kullanılır. İşlem sonucu daima boolean (mantıksal) veri türünde döner.
	is_executable()		:	Belirtilecek olan path'e (yola) bağlı olarak dosyanın çalıştırılabilir olduğunu sınamak için kullanılır. İşlem sonucu daima boolean (mantıksal) veri türünde döner.
	is_uploaded_file()	:	Belirtilecek olan path'e (yola) bağlı olarak dosyanın yüklenebilir olduğunu sınamak için kullanılır. İşlem sonucu daima boolean (mantıksal) veri türünde döner.
	*/
	
	$Dosya	=	"Ornek.txt";
	
	if(is_writable($Dosya)){
		echo "Belirtilen Dosya Yazılabilir Bir Dosyadır.";
	}else{
		echo "Belirtilen Dosya Yazılabilir Bir Dosya Değildir.";
	}
	
	?>
</body>
</html>