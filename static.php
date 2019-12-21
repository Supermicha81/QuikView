<header>
    <span id="left">
        <?php if ($thisPage=="Funkschalter") echo '<span class="button active">Funkschalter</span>'; else echo '<a class="button blue" href="devices.php">Funkschalter</a>'?>
        <?php if ($thisPage=="Buttons") echo '<span class="button active">Buttons (Beta)</span>'; else echo '<a class="button blue" href="buttons.php">Buttons (Beta)</a>'?>
        <?php if ($thisPage=="Info") echo '<span class="button active">Info</span>'; else echo '<a class="button blue" href="info.php">Info</a>'?>
        <?php if ($thisPage=="InfoNEU") echo '<span class="button active">InfoNEU</span>'; else echo '<a class="button blue" href="infoNEU.php">InfoNEU</a>'?>
        <?php if ($thisPage=="VIS") echo '<span class="button active">VIS</span>'; else echo '<a class="button blue" href="VISframe.php">VIS</a>'?>
        
    </span>
    <span id="title">QuikView</span>
    <span id="right">
        <?php if ($thisPage=="Konsole") echo '<span class="button active">Konsole</span>'; else echo '<a class="button blue" href="console.php">Konsole</a>'?>      
	    <?php if ($thisPage=="Hilfe") echo '<span class="button active">Hilfe</span>'; else echo '<a class="button blue" href="help.php">Hilfe</a>'?>
	    <?php if ($thisPage=="Konfiguration") echo '<span class="button active">Konfiguration</span>'; else echo '<a class="button blue" href="config.php">Konfiguration</a>'?>
    </span>
</header>
<footer>
    <span id="bottom">
        <span class="button noclick">
            <?php $tage = array("Sonntag","Montag","Dienstag","Mittwoch","Donnerstag","Freitag","Samstag"); $tag = date("w"); echo $tage[$tag] ?>
            <?php $timestamp = time(); $datum = date("d.", $timestamp); echo $datum; ?>
            <?php $monatsnamen = array(1=>"Januar",2=>"Februar",3=>"März",4=>"April",5=>"Mai",6=>"Juni",7=>"Juli",8=>"August",9=>"September",10=>"Oktober",11=>"November",12=>"Dezember");$monat = date("n");echo $monatsnamen[$monat];?>
            <?php $timestamp = time(); $datum = date("Y", $timestamp); echo $datum; ?>
        </span>&nbsp;
        <span class="button noclick">Version 3.0 (Beta) - created 2019 by Supermicha und HoerMirAuf</span>
    </span>
</footer>
