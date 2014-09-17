<?php
	/*
		Bao Yang
		September 16, 2014
		Purpose: Output the electro magnetic spectrum band
	*/
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Electro Magnetic Spectrum</title>
</head>

<body>
<?php
	$wave = $_GET['wave'];
	
	echo "<p>You entered $wave</p>";
	
	if ($wave>=pow(10,.05)) {
		echo "<p>The wavelength you entered is Radio.</p>";
	} elseif ($wave>=pow(10,-3.5)) {
		echo "<p>The wavelength you entered is Microwave.</p>";
	} elseif ($wave>=pow(10,-5.5)) {
		echo "<p>The wavelength you entered is Infrared.</p>";
	} elseif ($wave>=pow(10,-7)) {
		echo "<p>The wavelength you entered is Visiable.</p>";
	} elseif ($wave>=pow(10,-9)) {
		echo "<p>The wavelength you entered is Ultraviolet.</p>";
	} elseif ($wave>=pow(10,-11)) {
		echo "<p>The wavelength you entered is X-Ray</p>.";
	} else {
		echo "<p>The wavelength you entered is Gamma Ray.</p>";
	}
?>
</body>
</html>