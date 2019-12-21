<?php $thisPage="Upload"; ?> 
<!DOCTYPE HTML>
<html lang="de">
<head>
	<meta charset="UTF-8" />
	<title><?php echo $thisPage; ?></title>
	<link href="styles/style.css" rel="stylesheet" />
</head>
<body>
	<?php
		if ( $_FILES['uploaddatei']['name']  <> "" )
		{
    		move_uploaded_file (
        		$_FILES['uploaddatei']['tmp_name'] ,
        		'/var/www/html/'. $_FILES['uploaddatei']['name'] );
 
			echo '<article><h1>Datei erfolgreich hochgeladen</h1><a class="bigbutton" href="config.php">zurück</a></article>';
		}
		?>
	<?php include 'static.php';
		?>
</body>
</html>