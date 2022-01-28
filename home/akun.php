<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/css/all.css">
    <link rel="stylesheet" href="../css/css/solid.css">
    <link rel="stylesheet" href="../css/css/fontawesome.css">
    <link rel="stylesheet" href="../css/css2/bootstrap.css">
    <script src="../css/js/all.js"></script>
    <script src="../css/js/solid.js"></script>
    <script src="../css/js/fontawesome.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    <div style="margin:15px;">
        <a href="?menu=tambahadmin" class="btn btn-success">Tambah admin</a>
        <a href="?menu=tambahsiswa" class="btn btn-success">Tambah siswa</a>
    </div>
    <form action="post">
        <table class="table bg-light rounded ">
            <thead class="fw-bold" >
              <th>NO</th>
              <th>ID</th>
              <th>username</th>
              <th>nama</th>
              <th>password</th>
              <th>role</th>
            </thead>
            <?php
            $tabel = "tampilan";
            $redirect = "?menu=akun";
            @$where = "id= $_GET[id]";
            if (isset($_GET['hapus'])) {
                $tabel = "admin";
                $db->hapus($con, $tabel,$where,$redirect);
            }
            $tab = "admin";
                $a = $db->tampiladmin($db, $tab);
                $no = 0;
        
                if ($a == "") {
                    echo "<tr><td>No Record</td></tr>";
                }else {
                    foreach ($a as $r) {
                        $no++;
            ?>
            <tbody>
                <td><?php echo $no; ?></td>
                <td><?php echo $r['id']; ?></td>
                <td><?php echo $r['username']; ?></td>
                <td><?php echo $r['nama']; ?></td>
                <td><?php echo $r['password']; ?></td>
                <td><?php echo $r['role']; ?></td>
                <?php if ($_SESSION['role'] == "admin" || $_SESSION['role'] == "pembimbing") {?>
                <td>
                    <a href="?menu=akun&hapus&id=<?php echo $r['id']; ?>" class="btn btn-danger" onclick="return confirm('hapus?');"><i class="fas fa-trash-alt"></i></a>
                </td>
                <?php }else{}?>
            </tbody>
            <?php } }?>
        </table>
    </form>
</body>
</html>
