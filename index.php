<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
   		<title>harjutus 8 - Kontrollstruktuuride funktsioonid</title>
	</head>
	<body>
		<h2>Funktsioon "continue"</h2>
		<?php for ($number = 1; $number <= 10; $number++) {
    	if ($number == 5) {
        continue; // Kui $nr == 5, siis jääb alljärgnev vahele ning tsükkel käivitub uuesti.
    	}
    	echo $number . ", ";
    	}
		?>

		<?php $number = 1; // Kui $nr==5, siis pöördub while algusesse ning tsükkel käivitub uuesti.
		/*while ($number <= 10) {
		if ($number == 5) {
		continue;
		}
		echo $number . ", ";
		$number++;
		}*/
		?>
		<h2>Funktsioon "break"</h2>
		<?php for ($number=1; $number <=10 ; $number++) { 
		if ($number==6) {
		break;
		}
		echo $number . ", ";
		}

		?>
	</body>
</html>