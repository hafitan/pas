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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
<div style="margin:15px;">
        <a href="?menu=tam" class="btn btn-success">Absen</a>
    </div>
    <form action="post">
        <?php
        $tabel = "admin";
        $data = $db->tampil($db,$tabel);
        if ($_SESSION['role'] == "admin" || $_SESSION['role'] == "pembimbing") {

            ?>
            <?php }else { } ?>
        <table class="table bg-light rounded " style="float:left; margin-top:120px; position:absolute;">
            <thead class="fw-bold" >
              <th>NO</th>
              <th>Nis</th>
              <th>Nama</th>
              <td>jk</td>
              <th>tanggal</th>
              <th>tahajud</th>
              <th>subuh</th>
              <th>Dhuha</th>
              <th>Zuhur</th>
              <th>Ashar</th>
              <th>magrib</th>
              <th>Isya</th>
              <th>Surat</th>
              <th>Ayat</th>
              <?php if ($_SESSION['role'] == "admin" || $_SESSION['role'] == "pembimbing") {?>
              <th>Opsi &check;</th>
              <?php }else{}?>
              <th>#</th>
            </thead>
            <?php
            $tabel = "tampilan";
            $redirect = "?menu=absen";
            @$where = "id_pencatatan = $_GET[id]";
            
            if (isset($_GET['hapus'])) {
                $tabel = "pencatatan";
                $db->hapus($con, $tabel,$where,$redirect);
            }
            if ($_SESSION['role'] == "admin" || $_SESSION['role'] == "pembimbing") {
                $a = $db->tampil($con,$tabel);
            }else{
                $whereAbsen = "nis = $_SESSION[id]"; 
                $a = $db->tampilAbsen($con, $tabel, $whereAbsen);
            }
                $no = 0;
                if ($a == "") {
                    echo "<tr><td>No Record</td></tr>";
                }else {
                    foreach ($a as $r) {
                        $no++;
                
                        $teks = $r['tahajud'] . $r['subuh'] . $r['dhuha'] . $r['dzuhur'] . $r['ashar'] . $r['magrib'] . $r['isya'];     
            ?>
            <tbody>
                <td><?php echo $no; ?></td>
                <td><?php echo $r['nis']; ?></td>
                <td><?php echo $r['nama']; ?></td>
                <td><?php echo $r['jk']; ?></td>
                <td><?php echo $r['tanggal']; ?></td>
                <td><?php echo $r['tahajud']; ?></td>
                <td><?php echo $r['subuh']; ?></td>
                <td><?php echo $r['dhuha'] ?></td>
                <td><?php echo $r['dzuhur'] ?></td>
                <td><?php echo $r['ashar'] ?></td>
                <td><?php echo $r['magrib'] ?></td>
                <td><?php echo $r['isya'] ?></td>
                <td><?php echo $r['id_surat'] ?></td>
                <td><?php echo $r['ayat'] ?></td>
                <!-- echo keterangan -->
                <?php if ($_SESSION['role'] == "admin" || $_SESSION['role'] == "pembimbing") {?>
                <td><?php if($r['jk'] == "Perempuan"){ ?>
                    <a href="?menu=tperem&edit&id=<?php echo $r['id_pencatatan']; ?>" class="btn btn-success"><i class="i fas fa-edit"></i>edit</a>
                    <?php }else{?>
                    <a href="?menu=tlaki&edit&id=<?php echo $r['id_pencatatan']; ?>" class="btn btn-success"><i class="i fas fa-edit"></i>edit</a>
                    <?php }?>
                    <a href="?menu=absen&hapus&id=<?php echo $r['id_pencatatan']; ?>" class="btn btn-danger" onclick="return confirm('hapus?');"><i class="fas fa-trash-alt"></i></a>
                </td>
                <?php }else{}?>
            </tbody>
            <?php } } ?>
        </table>
    </form>
</body>
</html>
<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="Tambah" tabindex="-1" aria-labelledby="Tambah" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Pilh Nama</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <select class="form-select" aria-label="Default select example">
            <?php
        $a = $db->tampil($con, "pencatatan");
        
        ?>
            <option selected>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
        </select>   
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Tambah Absen</button>
      </div>
    </div>
  </div>
</div
