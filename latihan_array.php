<DOCTYPE! HTML>
<html>
<head>
    <title>Latihan Array</title>
</head>
<body>
    <form method="post">
        <label>Submit jumlah data : </label>
        <input type="text" name="data">
        <br>
        <button type="submit" name="submit1">Submit</button>
    </form>
    <?php
        if(isset($_POST['submit1'])) {
            $data = $_POST['data'];
            echo "<form method='get'>";
            echo "<input type='hidden' name='data' value='$data'></input>";
            for ($i=1 ; $i<=$data ; $i++) {
                echo "<label>Suhu ke-$i </label>";
                echo "<input type='text' name='suhu".$i."'>";
                echo "<br>";
            }
            echo "<button type='submit' name='submit2'>Submit Data</button>";
            echo "</form>";
        }
    ?>
    <?php
        if (isset($_GET['submit2'])) {
            $arr = array();
            for ($i=1 ; $i<=$_GET['data'] ; $i++) {
                $arr[$i] = (int)$_GET['suhu'.$i];
            }
            $jumlah = array_sum($arr);
            echo "Jumlah isi Array = $jumlah";
        }
    ?>
</body>
</html>