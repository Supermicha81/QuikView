<?php $thisPage="Hilfe"; ?> 
<!DOCTYPE HTML>
<html lang="de">
<head>
	<meta charset="UTF-8" />
	<title><?php echo $thisPage; ?></title>
	<link href="styles/style.css" rel="stylesheet" />
</head>
<body>
		<article>
			<h1>Achtung Beta-Status</h1>
				<h2>Dies ist eine Beta-Version!!</h2>
					Version 3 wurde komplett auf PHP Basis neu geschrieben.<br>
					Noch funktioniert nicht alles.<br>
				<h2>Bekannte Probleme:</h2>
					Die neue Buttons-Seite kann den Schaltzustand bisher nur statisch anzeigen.<br>
					(Ändert sich also nur, wenn die Seite neu geladen wird.)
					Ich weiß auch noch nicht, ob ich das in den Griff kriege.
		</article>
		<article>		
			<h1>Grundlegendes</h1>
				<h2>Über QuikView</h2>
					Diese kleine Seite soll euch das Bedienen und Verwalten euer Tasmota-Komponenten vereinfachen.<br>
				<h2>Über dieses Projekt</h2>
					Dies ist ein nichtkommerzielles Projekt, welches wir in unserer Freizeit entwickeln.<br>
					Es kann sein, das einige Dinge nicht richtig funktionieren.<br>
					Wir übernehmen keine Garantie für die richtige Funktionsweise oder Schäden, die durch die Benutzung entstehen.
				<h2>Über uns</h2>
					Wir sind zwei Smarthome-Fans.<br>
					Der eine baut die Seiten, der andere die Funktionen.<br>
					Falls ihr Ideen, Anregungen oder Fragen habt, erreicht ihr uns über das <a class="button blue" href=http://forum.creationx.de/forum>CreationX-Forum</a>
		</article>
		<article>
			<h1>Die Seiten</h1>
				<h2>Funkschalter</h2>
					Auf der dieser Seite seht ihr eure Geräte jeweils in einem iFrame, damit ihr sie über diese Seite steuern könnt.<br>
					Die Ansicht ist für Geräte mit Tasmota-Firmware und Shellys mit Original-Firmware optimiert.
				<h2>Konfiguration</h2>
					Hier könnt ihr die Geräte hinterlegen, die euch in der Übersicht angezeigt werden sollen.<br>
					In der Tabelle seht ihr alle schon vorhandenen Geräte<br>
					(wenn ihr die Seite zum ersten Mal aufruft, sollte diese Liste leer sein).<br>
					Ihr könnt jeden Wert in der Tabelle bearbeiten oder über die letzte Zeile der Tabelle neue Geräte hinzufügen.<br>
					Klickt anschließend auf speichern<br>
					Mit "Konfiguarion runterladen" kann man die Konfiguationsdatei (devices.css) direkt runterladen um sie in einem Texteditor bearbeiten zu können.<br>
					Mit "Konfiguration hochladen" lässt sich die Konfig-Datei dann wieder in QuikView hochladen.
				<h2>Info</h2>
					Hier werden alle wichtigen Informationen von der Infoseite der Geräte angezeigt
		</article>
		<article>
			<h1>Die Konfiguration im Einzelnen</h1>
					Über die Liste auf der Konigurations-Seite können folgende Einstellungen vorgenommen werden.
				<h2>Die IP-Spalte</h2>
					Hier kommt die lokale IP-Adresse eures Gerätes rein, unter der die Web-Oberfläche vom Browser aus erreichbar ist. Diese Spalte muss ausgefüllt werden.					
				<h2>Die Typ-Spalte</h2>
					Hier wird der Geräte-Typ eingestellt, dies ist wichtig für die richtige Anzeige in der Funkschalter Übersicht.<br>
					Speziell wird hier die Größe des iFrame-Fensters angepasst, damit alle relevanten Inhalte angezeigt werden.<br>
					Eine Übersicht über die aktuell verfügbaren Geräte gibt es unten auf dieser Seite.
				<h2>Die Bezeichung-Spalte</h2>
					Hier könnt ihr einen Namen eingeben, der oben hinter der IP angezeigt wird. Für Tasmota-Geräte ist dies im Normalfall nicht notwendig, da diese den Namen direkt im iFrame anzeigen, bei Shelly-Geräten mit Original-Firmware macht es aber durchaus Sinn.<br>
					Wenn ihr keinen Namen braucht, lasst die Spalte einfach leer.
				<h2>Die Testgerät-Spalte</h2>
					Ob ihr das braucht ist fraglich. Wer hier ein x reinsetzt, bekommt die Überschrift der Geräte in rot angezeigt.
		</article>
		<article>
			<h1>Die unterstützten Geräte</h1>
				<h2>Basic</h2>
					Für Geräte mit einem Schalter wie Sonoff Basic, Sonoff S20 Steckdose, Sonoff S26 Steckdose.
				<h2>Dual</h2>
					Für Geräte mit 2 Schaltern wie Sonoff Dual.
				<h2>FourCH</h2>
					Für Geräte mit 4 Schaltern wie den Sonoff 4channel oder 4channel PRO.
				<h2>LED</h2>
					Für MagicHome LED Stripe Controller.
				<h2>Bridge</h2>
					Speziell für die Sonoff RF-Brigde.
				<h2>Shelly</h2>
					Für Shelly Geräte mit Original-Firmware.
				<h2>Dimmer</h2>
					Für Tasmota Geräte mit Dimmfunktion.
		</article>
		<article>
			<h1>Anpassungen</h1>
				<h2>Styles</h2>
					Im Ordner "Styles" liegen sämtliche CSS-Datein. Diese können nach belieben verändert werden um das aussehen dieser Seiten anzupassen. Teilweise sind sie kommentiert, sodass ersichtlich sein sollte, was womit eingestellt werden kann.
				<h2>devices.css</h2>
					Hier sind die unterstützten Geräte drin. Eigene Geräte können nach den vorhandenen Schema hinzugefügt werden. Diese könne dann in der Konfiguration mit eingegeben werden.
				<h2>devices.csv</h2>
					In dieser Datei stehen die Eingaben aus der Konfiguration. Es ist eine simple, kommagetrennte Liste. Sie kann auch mit jedem Texteditor manuell bearbeitet werden.
		</article>
		<article>
			<h1>Updates</h1>
				Bevor ihr auf eine neue Version updatet, sichert bitte die devices.csv.<br>Hier stehen alle Infos zu euren Geräten drin.<br>
				Sofern neue Funktionen hinzukommen, kann es unter Umständen auch nötig sein, die devices.csv zu aktualisieren. Dann lassen sich die Infos aber zumindest leicher aus der alten Datei übertragen.
		</article>
		<article>
			<h1>Credits</h1>
				An dieser Stelle mal vielen Dank an alle die dieses Projekt unterstützen.<br>
				Allen vorran den fleißigen Testern aus dem <a class="button blue" href=http://forum.creationx.de/forum>CreationX-Forum</a><br>
				<br>
				Und ganz besonderen Dank auch an die vielen User im <a class="button blue" href=http://forum.php.de>PHP-Forum</a> die mir so tatkräftig bei meinen PHP Problemen geholfen haben.
		</article>
	<?php include 'static.php';
		?>
</body>
</html>