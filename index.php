<?php

    include_once 'config.php';
    session_start();
    
    if (isset($_SESSION['username'])) {
        header("Location: dashboard.php");
    }

    if(isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        $sql = "SELECT * FROM tbadmin WHERE username='$username' AND password='".md5($password)."'";
        $result = mysqli_query($conn, $sql);

        if($result->num_rows > 0) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['username'] = $row['username'];
            header("Location: dashboard.php");
        } else {
            echo "<script>
                    alert('Username atau Password salah!');
                </script>";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bersama - Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/loginpage.css" rel="stylesheet">

</head>

<body class="bg-gradient-dark">

    <div class="main">  	
        <input type="checkbox" id="chk" aria-hidden="true">

            <div class="login">
                <form action="index.php" method="POST" autocomplete="off">
                    <label for="chk" aria-hidden="true">Login</label>
                    <input type="text" name="username" placeholder="Username" required="">
                    <input type="password" name="password" placeholder="Password" required="">
                    <button type="submit" name="login">Login</button>
                    
                </form>
                <div class="text-center">
                    <a class="small" href="forgot-password.html">Lupa Password?</a>
                </div>
                <br>
                <div class="text-center">
                    <a class="small" href="register.php">Buat Akun Baru!</a>
                </div>
            </div>

    </div>
                                    
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>