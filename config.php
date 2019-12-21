<?php
$thisPage="Konfiguration";
$path = '/var/www/html/';   // Speicherverzeichnis muss vorhanden sein
$file = $path.'devices.csv';
$error = null;   // standardmässig keine Fehlermeldung


/* Speichern, wenn button angeklickt wurde */
if ( isset($_POST['submit']) ){

    $fp = fopen($file, 'w');

    $max = count($_POST['ip']);
    for( $row=0; $row<$max; $row++ ){

        if( empty($_POST['ip'][$row]) ) continue;
        fputcsv($fp, array($_POST['ip'][$row],$_POST['typ'][$row],$_POST['bez'][$row],$_POST['test'][$row],$_POST[',']));
    }

    fclose($fp);
}

/* immer auslesen der csv, wenn vorhanden */
if ( file_exists($file) ){

    $csv = array_map('str_getcsv', file($file));

    $html_form = '<form method="post">';
    $html_form .= '<label>IP-Adresse</label><label>Typ</label><label>Bezeichnung</label><label>Testgerät</label>';

    $max = count($csv);
    for( $row=0; $row<$max; $row++ ){

        $html_form .= '<input name="ip[]" value="' . htmlspecialchars($csv[$row][0]) . '">';
        $html_form .= '<input name="typ[]" value="' . htmlspecialchars($csv[$row][1]) . '">';
        $html_form .= '<input name="bez[]" value="' . htmlspecialchars($csv[$row][2]) . '">';
        $html_form .= '<input name="test[]" value="' . htmlspecialchars($csv[$row][3]) . '">';

    }

    $html_form .= '<label>neue IP:</label><label>Typ</label><label>Bezeichnung</label><label>Testgerät</label>';
    $html_form .= '<input name="ip[]">';
    $html_form .= '<input name="typ[]">';
    $html_form .= '<input name="bez[]">';
    $html_form .= '<input name="test[]">';
    $html_form .= '<br><button name="submit" class="button blue">speichern</button>';
    $html_form .= '</form>';

}else{
/* Datei ist nicht vorhanden, muss neu erstellt werden */    
    $error = "Datei ist nicht vorhanden.";

    $html_form = '<form method="post">';
    $html_form .= '<label>IP-Adresse</label><label>Typ</label><label>Bezeichnung</label><label>Testgerät</label>';

    $max = 4; // Anzahl der neu anzulegenden Datensätze

    for( $row=0; $row<$max; $row++ ){

        $html_form .= '<input name="ip[]">';
        $html_form .= '<input name="typ[]">';
        $html_form .= '<input name="bez[]">';
        $html_form .= '<input name="typ[]">';
    }

    $html_form .= '<br><button name="submit" class="button blue">anlegen</button>';
    $html_form .= '</form>';
}

/* Ab hier erfolgt nur noch die Ausgabe*/
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title><?php echo $thisPage; ?></title>
    <link href="styles/style.css" rel="stylesheet" />
    <link href="styles/form.css" rel="stylesheet" />
</head>
<body>
    <article>
        <h1>Übersicht</h1>
     <p id="error"><?=$error; ?></p>
     <?=$html_form; ?>
     </article>
	<article>
		<h1>Konfiguration runterladen</h1>
		Herunterladen der devices.csv<br>
		<a class="button blue" href="devices.csv" download>Datei herunterladen</a>
	</article>
	<article>
		<h1>Konfiguration hochladen</h1>
		die Konfigurationsdatei muss zwingend devices.csv heißen
		<form name="uploadformular" enctype="multipart/form-data" action="upload.php" method="post">
		<input type="file" name="uploaddatei" class="upload" size="60" maxlength="255">
		<p><input type="Submit" name="submit" class="button blue" value="Datei hochladen">
		</form>
	</article>
	<?php include 'static.php';
		?>
</body>
</html>