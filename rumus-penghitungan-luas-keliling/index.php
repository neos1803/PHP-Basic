<!DOCTYPE HTML>
<html>
<head>
    <title>Kompetensi</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body style="background-color: blue;">
        <div class="menu" style="margin-left: 250px; margin-right: 200px; margin-top: 100px; padding: 0; background-color: white">
            <center><img src="logo.png"></center>
            <br>
            <br>
            <form method="post">
                <div class="form-group">
                    <center><label for="Username">Username: </label></center>
                    <center><input type="text" class="form-control" name="username" style="width: 25%;" required/></center>
                </div>
                <div class="form-group">
                    <center><label for="Password">Password: </label></center>
                    <center><input type="password" class="form-control" name="password" style="width: 25%;" required/></center>
                </div>
                <center><button class="btn btn-success btn-block" name="masuk" style="width: 25%;" type="submit">Masuk</button></center>
                <br>
            </form>
        </div>
    
        <?php
            if(isset($_POST['masuk'])){
                $username = $_POST['username'];
                $password = $_POST['password'];

                if($username == "nanda" && $password= "admin") {
                    echo "<script>alert('Welcome Back')</script>";
                    header("Location: ". "http://localhost/kompetensi/main_menu.html");
                }
                else {
                    echo "<script>alert('Wrong password or username')</script>";
                }
            }
        ?>
</body>
</html>