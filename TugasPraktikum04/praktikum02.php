<?php
require_once 'header.php';
require_once 'sidebar.php';
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Tugas Praktikum 02</h1>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <!-- Default box -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Tugas praktikum 02</h3>

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
              <h1>Form Pembelian</h1>
              <form action="" method="post">
                        <div class="form-group row">
                            <label for="customer" class="col-md-4 col-form-label">Customer</label> 
                            <div class="col-md-8">
                                <input id="customer" name="customer" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4">Pilih Produk</label> 
                            <div class="col-md-8">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input name="pilih_produk" id="pilih_produk_0" type="radio" class="custom-control-input" value="Tv"> 
                                    <label for="pilih_produk_0" class="custom-control-label">Tv</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input name="pilih_produk" id="pilih_produk_1" type="radio" class="custom-control-input" value="Kulkas"> 
                                    <label for="pilih_produk_1" class="custom-control-label">Kulkas</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input name="pilih_produk" id="pilih_produk_2" type="radio" class="custom-control-input" value="MesinCuci"> 
                                    <label for="pilih_produk_2" class="custom-control-label">Mesin Cuci</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="jumlah" class="col-md-4 col-form-label">Jumlah</label> 
                            <div class="col-md-8">
                                <input id="jumlah" name="jumlah" type="text" class="form-control">
                            </div>
                        </div> 
                        <div class="form-group row">
                            <div class="offset-md-4 col-md-8">
                                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <div class="price-list">
                    <h4 class="text-center mb-4">Daftar Harga</h4>
                    <ul class="list-group">
                        <li class="list-group-item">Tv - RP. 4.200.000</li>
                        <li class="list-group-item">Kulkas - RP. 3.100.000</li>
                        <li class="list-group-item">Mesin Cuci - RP. 3.800.000</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $customer = $_POST["customer"];
            $pilih_produk = $_POST["pilih_produk"];
            $jumlah = $_POST["jumlah"];
        }
    ?>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <?php if(isset($customer) && isset($pilih_produk) && isset($jumlah)) : ?>
                <div class="card text-white bg-primary">
                    <div class="card-body">
                        <h4 class="card-title">Data Pembelian Customer</h4>
                        <p class="card-text">Nama Customer: <?= $customer ?></p>
                        <p class="card-text">Produk Pilihan: <?= $pilih_produk ?></p>
                        <p class="card-text">Jumlah Beli: <?= $jumlah ?></p>
                        <?php 
                          if (isset($pilih_produk)) {
                            if ($pilih_produk == "Tv") {
                              echo '<p class="card-text">Jumlah Harga: RP. ' . number_format(4200000 * $jumlah, 0, ",", ".") . '</p>';
                            } elseif ($pilih_produk == 'Kulkas') {
                              echo '<p class="card-text">Jumlah Harga: RP. ' . number_format(3100000 * $jumlah, 0, ",", ".") . '</p>';
                            } elseif ($pilih_produk == 'MesinCuci') {
                              echo '<p class="card-text">Jumlah Harga: RP. ' . number_format(3800000 * $jumlah, 0, ",", ".") . '</p>';
                            } else {
                              echo '<p class="card-text">Data Tidak Ada</p>';
                            }
                          }
                        ?>
                    </div>
                </div>
                <?php endif; ?>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              Footer
            </div>
            <!-- /.card-footer-->
          </div>
          <!-- /.card -->
        </div>
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
require_once 'footer.php';
?>