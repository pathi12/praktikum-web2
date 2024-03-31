<?php
require_once 'header.php';
require_once 'sidebar.php';

$mataKuliah = $nim = $nilai = "";
$showMessage = false;
$hasilUjian = $grade = "";

// Memeriksa apakah formulir telah dikirimkan
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari formulir
    $nim = $_POST['nim'];
    $mataKuliah = $_POST['matkul'];
    $nilai = $_POST['nilai'];
    $showMessage = true; // Menampilkan pesan terima kasih setelah mengisi formulir

    // Menentukan hasil ujian dan grade berdasarkan nilai
    if ($nilai >= 90 && $nilai <= 100) {
        $hasilUjian = "A";
        $grade = "Lulus";
    } elseif ($nilai >= 70 && $nilai <= 80) {
        $hasilUjian = "B";
        $grade = "Lulus";
    } elseif ($nilai >= 50 && $nilai <= 60) {
        $hasilUjian = "C";
        $grade = "Tidak Lulus";
    } else {
        $hasilUjian = "D";
        $grade = "Gagal";
    }
}
?>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tugas Praktikum</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Praktikum 05</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                        <h1 class="text-center mb-5">Form Nilai Ujian</h1>
                            <div class="container mt-5">
                                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                                    <div class="form-group row">
                                        <label for="nim" class="col-4 col-form-label">NIM</label>
                                        <div class="col-8">
                                            <input id="nim" name="nim" type="text" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="matkul" class="col-4 col-form-label">Pilih Mata Kuliah</label>
                                        <div class="col-8">
                                            <select id="matkul" name="matkul" class="custom-select" required="required">
                                                <option value="User Interface & User Experience">User Interface & User Experience</option>
                                                <option value="Basis Data">Basis Data</option>
                                                <option value="Statistik dan Probabilitas">Statistik dan Probabilitas</option>
                                                <option value="Bahasa Inggris 1">Bahasa Inggris 1</option>
                                                <option value="Pendidikan Pancasila dan Kewarganegaraan">Pendidikan Pancasila dan Kewarganegaraan</option>
                                                <option value="Pemrograman Web 2">Pemrograman Web 2</option>
                                                <option value="Komunikasi Efektif">Komunikasi Efektif</option>
                                                <option value="Jaringan Komputer">Jaringan Komputer</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nilai" class="col-4 col-form-label">Nilai</label>
                                        <div class="col-8">
                                            <input id="nilai" name="nilai" type="text" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="offset-4 col-8">
                                            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </form>
                                <?php if ($showMessage) : ?>
                                    <div class="card text-white bg-primary">
                                    <div class="mt-5">
                                        <h5>NIM : <?php echo $nim; ?></h5>
                                        <h5>Nama Mata Kuliah : <?php echo $mataKuliah; ?></h5>
                                        <h5>Nilai : <?php echo $nilai; ?></h5>
                                        <h5>Hasil Ujian : <?php echo $hasilUjian; ?></h5>
                                        <h5>Grade : <?php echo $grade; ?></h5>
                                    </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="card-footer">
                            Footer
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php
require_once 'footer.php';
?>