<?php

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jenisKelamin = $_POST['jenis_kelamin'];
$prodi = $_POST['prodi'];
$keahlian = $_POST['keahlian'];
$domisili = $_POST['domisilo'];
$email = $_POST['email'];
?>

<h1>Terima Kasih Sudah Mendaftar di TI Club data Science</h1>
<h5>Nama Lengkap  : <?php echo $nama ?></h5>
<h5>Nim  : <?php echo $nim?></h5>
<h5>Jenis Kelamin : <?php echo $jenisKelamin ?></h5>
<h5>Prodi : <?php echo $prodi ?></h5>
<h5>Domisili : <?php echo $domisili ?></h5>
<h5>Keahlian : <?php echo $keahlian ?></h5>
<h5>Email : <?php echo $email ?></h5>
