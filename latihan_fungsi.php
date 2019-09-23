<!DOCTYPE html>
<html>
<head>
	<title>Latihan Do While</title>
</head>
<body>
	<form method="post">
		<label>Masukkan Angka Awal: </label>
		<input type="text" name="bilangan_pertama">
		<br>
		<label>Masukkan Angka Akhir: </label>
		<input type="text" name="bilangan_kedua">
		<br>
		<button type="submit">Cek bilangan prima</button>
	</form>
	<?php
		/**
		 * Checking if $x a prime number or not by the number of $akar
		 * if $akar is equal with 0, increment $akar
		 * 
		 * @parram int $x Mod $x with increment of $i.
		 *
		 * 
		 * @return true|false
		 */
		function prima($x) {
			$i=2;
			$akar=1;
			do {
				$prima = $x % $i;
				if ($prima == 0) {
					$akar++;
				}
				$i++;
			} while ( $i <= $x);
			if ($akar == 2) {
				return true;
			}
			else {
				return false;
			}
		}
		if (isset($_POST['bilangan_pertama'])&&isset($_POST['bilangan_kedua'])) {
			$angka1 = (int)$_POST['bilangan_pertama'];
			$angka2 = (int)$_POST['bilangan_kedua'];
			echo "Bilangan $angka1 dan $angka2";
			echo "<br>";
			/**
			 * Incrementing $i while $i less and equal to $angka2.
			 */
			for ($i=$angka1; $i<=$angka2; $i++)
			{
				if (prima($i) == true){
					echo $i." ";
				}
			}
		}
	?>
</body>
</html>