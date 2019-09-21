<!DOCTYPE html>
<html>
<head>
	<title>Latihan Nilai Evaluasi</title>
</head>
<body>
	<form method="post">
		<label>Ujian Praktik</label>
		<input type="text" name="ujian_praktik" placeholder="Ujian Praktik">
		<br>
		<label>Ujian Pilihan Ganda</label>
		<input type="text" name="ujian_pilihan_ganda" placeholder="Ujian Pilihan Ganda">
		<br>
		<label>Kehadiran</label>
		<input type="text" name="kehadiran" placeholder="Kehadiran">
		<br>
		<label>Sikap</label>
		<input type="text" name="sikap" placeholder="Sikap">
		<br>
		<button type="submit">Generate Nilai Akhir</button>
	</form>

	<?php
		$ujian_praktik=(int)$_POST['ujian_praktik'];
		$ujian_pilihan_ganda=(int)$_POST['ujian_pilihan_ganda'];
		$kehadiran=(int)$_POST['kehadiran'];
		$sikap=(int)$_POST['sikap'];
		$min_range=0;
		$max_range=100;

		function validasi(){

			$nilai_praktik=(boolean)($GLOBALS['ujian_praktik']<=$GLOBALS['max_range']&&$GLOBALS['ujian_praktik']>=$GLOBALS['min_range']);

			$nilai_pilihan=(boolean)($GLOBALS['ujian_pilihan_ganda']<=$GLOBALS['max_range']&&$GLOBALS['ujian_pilihan_ganda']>=$GLOBALS['min_range']);

			$nilai_kehadiran=(boolean)($GLOBALS['kehadiran']<=$GLOBALS['max_range']&&$GLOBALS['kehadiran']>=$GLOBALS['min_range']);

			$nilai_sikap=(boolean)($GLOBALS['sikap']<=$GLOBALS['max_range']&&$GLOBALS['sikap']>=$GLOBALS['min_range']);

			if ($nilai_praktik==true && $nilai_pilihan==true && $nilai_kehadiran==true && $nilai_sikap==true) {
				return true;
				}

			else
			{
				return false;
			}

		}

		function verifikasi(){
			$nilai='x';
			$nilai_akhir = (0.6*$GLOBALS['ujian_praktik']) + (0.3*$GLOBALS['ujian_pilihan_ganda']) + (0.05*$GLOBALS['kehadiran']) + (0.05*$GLOBALS['sikap']);

			if ($nilai_akhir<=100 && $nilai_akhir>=90) {
				return array($nilai='a',$nilai_akhir);
			}
			elseif ($nilai_akhir<90 && $nilai_akhir>=80) {
				return array($nilai='b',$nilai_akhir);
			}
			elseif ($nilai_akhir<80 && $nilai_akhir>=65) {
				return array($nilai='c',$nilai_akhir);
			}
			else
			{
				return array($nilai='d',$nilai_akhir);
			}
		}

		if (validasi()==true)
		{
			verifikasi();
			if (verifikasi()[0]=='a') {
				echo "Nilai Akhir : "; echo verifikasi()[1]; echo "&nbsp;dengan Akreditasi Baik Sekali";
			}
			elseif (verifikasi()[0]=='b') {
				echo "Nilai Akhir : "; echo verifikasi()[1]; echo "&nbsp;dengan Akreditasi Baik";
			}
			elseif (verifikasi()[0]=='c') {
				echo "Nilai Akhir : "; echo verifikasi()[1]; echo "&nbsp;dengan Akreditasi Cukup";
			}
			else
			{
				echo "Nilai Akhir : "; echo verifikasi()[1]; echo "&nbsp;dengan Akreditasi Tidak Lulus";
			}
		}
		else
		{
			echo "Semua Nilai tidak valid";
		}
			

	?>

</body>
</html>