<?php $thisPage="Konsole"; ?> 
<!DOCTYPE HTML>
<html lang="de">
<head>
	<meta charset="UTF-8" />
	<title><?php echo $thisPage; ?></title>
	<link href="styles/style.css" rel="stylesheet" />
	<link href="styles/container.css" rel="stylesheet" />
	<link href="styles/devices.css" rel="stylesheet" />
</head>
<body>
	<?php $rows = file( 'devices.csv' ); foreach ( $rows as $row ) {$columns = explode( ',', $row );
		echo "<div id='console'><a class='" . (($columns[3] == "x")?'redbutton':'button blue') . "' href='http://" . $columns[0] . "' target='_blank'>" . $columns[0] . "</a>" . (($columns[2] == "")?"":"<span class='button noclick'>" . $columns[2] . "</span>") . "
		<iframe id='consoleframe' src='http://" . $columns[0] . "/cs' class='setup' scrolling=yes></iframe>
		</div>";}
		?>
	<div class="ende"></div>		
	<?php include 'static.php';
		?>
</body>
</html>