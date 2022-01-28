<?php
    $field2 = array(
        'id' => @$_POST['id'],
        'username' => @$_POST['username'],
        'nama' => @$_POST['nama'],
        'password' => @$_POST['password'],
        'role' => "admin"
        );

        @$where = "id = $_GET[id]";
        
        $redirect = "?menu=akun";
        if (isset($_POST['simpan'])) {
            $tabel2 = "admin";  
            $db->simpan2($con,$tabel2,$field2,$redirect);
        }
        
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Absen</title>
    <link rel="stylesheet" href="../css/css/all.css">
    <link rel="stylesheet" href="../css/css/solid.css">
    <link rel="stylesheet" href="../css/css/fontawesome.css">
    <link rel="stylesheet" href="../css/css2/bootstrap.css">
    <script src="../css/js/all.js"></script>
    <script src="../css/js/solid.js"></script>
    <script src="../css/js/fontawesome.js"></script>
</head>
<body>
    <div class="container">
        <div class="row g-0">
            <div class="col">
                <form action="" method="POST">
                <div class="mb-3 row py-3">
                    <label for="inputPassword" class="col-sm-2 col-form-label">ID</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="id" placeholder="Masukkan id">
                </div>
                <div class="mb-3 row py-3">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama">
                </div>
                <div class="mb-3 row py-3">
                <label for="inputPassword" class="col-sm-2 col-form-label">username</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="username" placeholder="Masukkan username">
                </div>
                <div class="mb-3 row py-3">
                    <label for="inputPassword" class="col-sm-2 col-form-label">password</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="password" placeholder="Masukkan password">
                </div>
                <?php if(@$_GET['id'] == ""){ ?>
                <button class="btn btn-primary btn-lg" name="simpan">Input Data</button>
                <?php }else{?>
                <button class="btn btn-success btn-lg" name="ubah">Edit Data</button>
                <?php } ?>
                </form>
            </div>
        </div>
    </div>
</body>
</html>