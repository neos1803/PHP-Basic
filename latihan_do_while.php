<!DOCTYPE html>
<html>
<head>
	<title>Latihan Do While</title>
</head>
<body>
	<form method="post">
		<label>Masukkan Angka: </label>
		<input type="text" name="bilangan_pertama">
		<br>
		<button type="submit">Cek apakah bilangan prima?</button>
	</form>
	<?php
	/**
	 * 
	 */
		if (isset($_POST['bilangan_pertama'])) {
			$angka = (int)$_POST['bilangan_pertama'];
			echo "Angka yang dimasukkan ialah : $angka <br>";
			$i=2;
			$akar=1;
			do {
				$prima = $angka%$i;
				if ($prima == 0) {
					$akar++;
				}
				$i++;
			} while ( $i <= $angka);
			if ($akar == 2) {
				echo "Bilangan prima";
			}
			else {
				echo "Bukan bilangan prima";
			}
		}
	?>
</body>
</html>