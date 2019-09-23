<!DOCTYPE html>
<html>
<head>
	<title>Latihan Pencabangan</title>
</head>
<body>
	<form method="post">
		<label>Bilangan Pertama: </label>
		<input type="text" name="bilangan_pertama">
		<br>
		<label>Bilangan Kedua: </label>
		<input type="text" name="bilangan_kedua">
		<br>
		<button type="submit" name="submit">Generate Nilai</button>
	</form>
	<?php
		/*
			check if there is input when 'submit' button is clicked with isset
		*/
		if (isset($_POST['submit'])) {
			$awal=(int)$_POST['bilangan_pertama'];
			$akhir=(int)$_POST['bilangan_kedua'];
			
			/*
				function gol1() untuk mengecek apakah inputan habis dibagi 3
			*/
			function gol1(){
				for ($i=$GLOBALS['awal']; $i<=$GLOBALS['akhir'] ; $i++) { 
					if ($i%3==0) {
						echo "$i\t";
					}
				}
			}
			/*
				function gol1() untuk mengecek apakah inputan
				habis dibagi 5
			*/
			function gol2(){
				for ($i=$GLOBALS['awal']; $i<=$GLOBALS['akhir'] ; $i++) { 
					if ($i%5==0) {
						echo "$i\t";
					}
				}
			}
			/*
				function gol1() untuk mengecek apakah inputan
				habis dibagi 3 dan 5
			*/
			function gol3(){
				for ($i=$GLOBALS['awal']; $i<=$GLOBALS['akhir'] ; $i++) { 
					if ($i%3==0 && $i%5==0) {
						echo "$i\t";
					}
				}
			}

			echo "Bilangan habis dibagi 3: \n";
			gol1();
			echo "<br>";
			echo "Bilangan habis dibagi 5: \n";
			gol2();
			echo "<br>";
			echo "Bilangan habis dibagi 3 dan 5: \n";
			gol3();
			echo "<br>";
		}
	?>
</body>
</html>