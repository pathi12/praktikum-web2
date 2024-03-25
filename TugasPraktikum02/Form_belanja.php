<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }

        .container {
            margin-top: 50px;
        }

        .form-box {
            background-color: #ffffff;
            border: 1px solid #dee2e6;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        .price-list {
            border: 1px solid #dee2e6;
            border-radius: 10px;
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="form-box">
                    <h2 class="text-center mb-4">Form Belanja</h2>
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
        </div>
    </div>
</body>
</html>
