<?php $thisPage="Buttons"; ?> 
<!DOCTYPE HTML>
<html lang="de">
<head>
	<meta charset="UTF-8" />
	<title><?php echo $thisPage; ?></title>
	<link href="styles/style.css" rel="stylesheet" />
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
		$json = json_decode(file_get_contents('http://'.$columns[0].'/cm?cmnd=Power0', FALSE, NULL, 0, 61),TRUE);
		$json2 = json_decode(file_get_contents('http://'.$columns[0].'/cm?cmnd=Status', FALSE, NULL, 0),TRUE);
			echo '<div class="buttonbox">';
			echo ($json['POWER'] == "ON") ? '<div class="singlebuttonbox"><div class="buttonname"></div><br><div class="buttonstatus"><span class="textgreen">AN</div>' : (($json['POWER'] == "OFF") ? '<div class="singlebuttonbox"><div class="buttonname"></div><br><div class="buttonstatus"><span class="textred">AUS</span></div>' : "");
			echo (($json['POWER'] == "") ? "" :
				 '<form action="http://' . $columns[0] . '/cm" method="get" target="hidden_iframe"><input name="cmnd" type="hidden" value="Power On"><button class="button blue small">An</button></form>
				<form action="http://' . $columns[0] . '/cm" method="get" target="hidden_iframe"><input name="cmnd" type="hidden" value="Power Off"><button class="button blue small">Aus</button></form></div>');

			echo ($json['POWER1'] == "ON") ? '<div class="singlebuttonbox"><div class="buttonname">' . $json2['Status']['FriendlyName']['0'] . '</div><br><div class="buttonstatus"><span class="textgreen">AN</span></div>' : (($json['POWER1'] == "OFF") ? '<div class="singlebuttonbox"><div class="buttonname">' . $json2['Status']['FriendlyName']['0'] . '</div><br><div class="buttonstatus"><span class="textred">AUS</span></div>' : "");
			echo (($json['POWER1'] == "") ? "" :
				 '<form action="http://' . $columns[0] . '/cm" method="get" target="hidden_iframe"><input name="cmnd" type="hidden" value="Power1 On"><button class="button blue small">An</button></form>
				<form action="http://' . $columns[0] . '/cm" method="get" target="hidden_iframe"><input name="cmnd" type="hidden" value="Power1 Off"><button class="button blue small">Aus</button></form></div>');

			echo ($json['POWER2'] == "ON") ? '<div class="singlebuttonbox"><div class="buttonname">' . $json2['Status']['FriendlyName']['1'] . '</div><br><div class="buttonstatus"><span class="textgreen">AN</span></div>' : (($json['POWER2'] == "OFF") ? '<div class="singlebuttonbox"><div class="buttonname">' . $json2['Status']['FriendlyName']['1'] . '</div><br><div class="buttonstatus"><span class="textred">AUS</span></div>' : "");
			echo (($json['POWER2'] == "") ? "" :
				 '<form action="http://' . $columns[0] . '/cm" method="get" target="hidden_iframe"><input name="cmnd" type="hidden" value="Power2 On"><button class="button blue small">An</button></form>
				<form action="http://' . $columns[0] . '/cm" method="get" target="hidden_iframe"><input name="cmnd" type="hidden" value="Power2 Off"><button class="button blue small">Aus</button></form></div>');
			
			echo ($json['POWER3'] == "ON") ? '<div class="singlebuttonbox"><div class="buttonname">' . $json2['Status']['FriendlyName']['2'] . '</div><br><div class="buttonstatus"><span class="textgreen">AN</span></div>' : (($json['POWER3'] == "OFF") ? '<div class="singlebuttonbox"><div class="buttonname">' . $json2['Status']['FriendlyName']['2'] . '</div><br><div class="buttonstatus"><span class="textred">AUS</span></div>' : "");
			echo (($json['POWER3'] == "") ? "" :
				 '<form action="http://' . $columns[0] . '/cm" method="get" target="hidden_iframe"><input name="cmnd" type="hidden" value="Power3 On"><button class="button blue small">An</button></form>
				<form action="http://' . $columns[0] . '/cm" method="get" target="hidden_iframe"><input name="cmnd" type="hidden" value="Power3 Off"><button class="button blue small">Aus</button></form></div>');
			
			echo ($json['POWER4'] == "ON") ? '<div class="singlebuttonbox"><div class="buttonname">' . $json2['Status']['FriendlyName']['3'] . '</div><br><div class="buttonstatus"><span class="textgreen">AN</span></div>' : (($json['POWER4'] == "OFF") ? '<div class="singlebuttonbox"><div class="buttonname">' . $json2['Status']['FriendlyName']['3'] . '</div><br><div class="buttonstatus"><span class="textred">AUS</span></div>' : "");
			echo (($json['POWER4'] == "") ? "" :
				 '<form action="http://' . $columns[0] . '/cm" method="get" target="hidden_iframe"><input name="cmnd" type="hidden" value="Power4 On"><button class="button blue small">An</button></form>
				<form action="http://' . $columns[0] . '/cm" method="get" target="hidden_iframe"><input name="cmnd" type="hidden" value="Power4 Off"><button class="button blue small">Aus</button></form></div>');
			
			echo '</div>';
			echo '<div class="optionbox"><a class="button blue" href="http://' . $columns[0] . '/in" target="_blank">Info</a>
					<a class="button blue" href="http://' . $columns[0] . '/tm" target="_blank">Zeitplan</a>
					<a class="button blue" href="http://' . $columns[0] . '/cs" target="_blank">Konsole</a>
					</div>';
			//var_dump($json);
			echo "</div>";
			};
			//header("Location: button.php") 
			?>
	<iframe name="hidden_iframe" style="display:none;"></iframe>
	<div class="ende"></div>	
	<?php include 'static.php';
		?>
</body>
</html>
