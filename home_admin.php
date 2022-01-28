<?php
include 'library/function.php';
$db = new main($conn);
$db->is_loggedin();

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="css/css/all.css">
    <link rel="stylesheet" href="css/css/solid.css">
    <link rel="stylesheet" href="css/css/style.css">
    <link rel="stylesheet" href="css/css/fontawesome.css">
    <link rel="stylesheet" href="css/css2/bootstrap.css">
    <script src="css/js/all.js"></script>
    <script src="css/js/solid.js"></script>
    <script src="css/js/fontawesome.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
</head>
<body>
    <nav>
    <ul>
        <li><a href="?menu=absen"><i class="fas fa-pen"></i> Absen</a></li>
        <li><a href="?menu=hafalan"><i class="fas fa-book"></i> Hafalan</a></li>
        <li><a href="?menu=akun"><i class="fas fa-book"></i> Akun</a></li>
        <li><a href="?menu=logout" onclick="return confirm('Logout?')"><i class="fas fa-sign-out-alt"></i> Log Out</a></li>
    </ul>
    </nav>
    <section>
        
    </section>
</body>
</html>
<?php
        $menu = @$_GET['menu'];

        switch ($menu) {
            case 'absen':
                include 'home/absen.php';
                break;

            case 'hafalan':
                include 'home/hapalan.php';
                break;

            case 'tam':
                include 'home/tam.php';
                break;

            case 'tambahsiswa':
                include 'home/tambahsiswa.php';
                break;

             case 'tlaki':
                 include 'home/tlaki.php';
                 break;
            
            case 'tperem':
               include 'home/tperem.php';
               break;

            case 'tambahadmin':
                include 'home/tambahadmin.php';
                break;
            
            case 'akun':
                include 'home/akun.php';
                break;

            case 'logout':
                include 'logout.php';
                break;
            
        }
        ?>
