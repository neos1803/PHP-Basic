<!DOCTYPE html>
<html>
    <head>
        <title>Kompetensi</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body style="background-color: blue;">
        <div class="main-menu" style="margin-bottom: 100px; margin-left: 250px; margin-right: 200px; margin-top: 100px; padding: 0; background-color: white">
            <img src="logo.png">
            <hr style="border-color: black;">
            <div class="text-home" style="background-color: white">
                <center><a href="main_menu.html"><h3>Home</h3></a></center>
            </div>
            <hr style="border-color: black;">
            <div class="menu-persegi">
                <br>
                <form method="POST">
                    <div class="form-group">
                        <center><label>Masukkan nilai panjang</label></center>
                        <center><input type="number" name="panjang" class="form-control" style="width: 50%;" required></center>
                    </div>
                    <div class="form-group">
                        <center><label>Masukkan nilai lebar</label></center>
                        <center><input type="number" name="lebar" class="form-control" style="width: 50%;" required></center>
                    </div>
                    <center><button type="submit" class="btn btn-success btn-block" name="luas" style="width: 25%;">Hitung Luas</button></center>
                    <br>
                    <center><button type="submit" class="btn btn-success btn-block" name="keliling" style="width: 25%;">Hitung Keliling</button></center>
                    <hr style="border-color: black;">
                </form>
            </div>
            <?php
                if(isset($_POST['luas'])) {
                    $panjang = $_POST['panjang'];
                    $lebar = $_POST['lebar'];
                    $luas = $panjang * $lebar;
                    echo "<center><h3>Luas = $luas</h3></center>";
                }
                if(isset($_POST['keliling']))
                {
                    $panjang = $_POST['panjang'];
                    $lebar = $_POST['lebar'];
                    $keliling = 2 * $panjang + 2 * $lebar;
                    echo "<center><h3>Keliling = $keliling</h3></center>";
                }
            ?>
        </div>
    </body>
</html>