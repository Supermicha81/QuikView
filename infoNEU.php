<?php $thisPage="InfoNEU"; ?> 
<!DOCTYPE HTML>
<html lang="de">
<head>
	<meta charset="UTF-8" />
	<title><?php echo $thisPage; ?></title>
	<link href="styles/style.css" rel="stylesheet" />
	<link href="styles/container.css" rel="stylesheet" />
	<link href="styles/devicebox.css" rel="stylesheet" />
</head>
<body>
	 <?php
		$rows = file( 'devices.csv' ); foreach ( $rows as $row ) {$columns = explode( ',', $row );
			echo '<div class="devicebox">';
			echo '<div class="namebox">';
			echo '<a class="' . (($columns[3] == "x")?"button red":"button blue") . '" href="http://' . $columns[0] . '" target="_blank">' . $columns[0] . '</a>'; 
			echo (($columns[2] == "")?"":'<span class="button noclick">' . $columns[2] . '</span>');
			echo '</div>';
			echo '<br><div class="devicename">' . substr(substr(file_get_contents('http://'.$columns[0].'/cm?cmnd=hostname'),13),0,-2) . '</div>';
		$json = json_decode(file_get_contents('http://'.$columns[0].'/cm?cmnd=Status%200', FALSE, NULL, 0),TRUE);
			echo '<div class="textbox">';
			echo "Firmware: " . $json['StatusFWR']['Version'] . "<br>";
			echo "Core: " . $json['StatusFWR']['Core'] . "<br>";
			echo "SDK: " . $json['StatusFWR']['SDK'] . "<br>";
			echo "<span class='highlight'>Laufzeit: " . $json['StatusPRM']['Uptime'] . "</span><br>";
			echo ($json['StatusPRM']['BootCount'] == "0") ? "Anz. Neustart: " . $json['StatusPRM']['BootCount'] . "<br>" : "<span class='red'>Anz. Neustart: " . $json['StatusPRM']['BootCount'] . "</span><br>";
			echo "Neustartgrund: " . $json['StatusPRM']['RestartReason'] . "<br>";
			echo "Kanal: " . $json['StatusSTS']['Wifi']['Channel'] . " ";
			echo "RSSI: " . $json['StatusSTS']['Wifi']['RSSI'] . "<br>";
			echo "Speichergröße: " . $json['StatusMEM']['FlashSize'] . "<br>";
			echo "belegt: " . $json['StatusMEM']['ProgramSize'] . " ";
			echo "frei: " . $json['StatusMEM']['Free'] . "<br>";
			echo "Timezone: " . $json['StatusTIM']['Timezone'] . "<br>";
			echo "Sleep: " . $json['StatusSTS']['Sleep'] . " / " . $json['StatusSTS']['SleepMode'];
			echo "</div>";
			echo '<div class="optionbox"><a class="button blue" href="http://' . $columns[0] . '/in" target="_blank">Info</a>
					<a class="button blue" href="http://' . $columns[0] . '/tm" target="_blank">Zeitplan</a>
					<a class="button blue" href="http://' . $columns[0] . '/cs" target="_blank">Konsole</a>
					</div>';
			echo "</div>";
		} ?>
		<div class="ende"></div>
	<?php include 'static.php';
		?>
</body>
</html>
