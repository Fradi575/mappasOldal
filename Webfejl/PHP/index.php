<!DOCTYPE html>
<html lang="en">
<head>
    <title>Php</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php
		$tarolo = "felhasznalo";
		$$tarolo = "Anna";
		// lehetne egyszerűen csak:
		// $felhasznalo = "Anna";
		// vagy
		// ${"felhasznalo"} = "Anna"
		// persze ekkor nem kellenek dinamikus változók
		print "$felhasznalo<br>";
		print $$tarolo;
		print "<br>";
		print "${$tarolo}<br>";
		print "${'felhasznalo'}<br>";
	?>
</body>
</html>