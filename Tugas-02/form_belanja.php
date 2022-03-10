<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
</head>
    <body>
        <!-- Header -->
        <header>
            <h4 class="text-center">Toko Online</h4>
        </header>

        <h3>Belanja Online</h3>
        <!-- Form Section -->
        <div class="form-section">
            <!-- Form Belanja -->
            <form class="form-belanja" method="POST" action="form_belanja.php">
                <div class="form-group row">
                    <label for="costumer" class="col-3 col-form-label">Costumer</label> 
                    <div class="col-9">
                    <input id="costumer" name="costumer" placeholder="Nama Costumer" type="text" class="form-control" required="required">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-3">Pilih Produk</label> 
                    <div class="col-9">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="produk" id="produk_0" type="radio" aria-describedby="produkHelpBlock" class="custom-control-input" value="TV" required="required"> 
                        <label for="produk_0" class="custom-control-label">TV</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="produk" id="produk_1" type="radio" aria-describedby="produkHelpBlock" class="custom-control-input" value="Kulkas" required="required"> 
                        <label for="produk_1" class="custom-control-label">Kulkas</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="produk" id="produk_2" type="radio" aria-describedby="produkHelpBlock" class="custom-control-input" value="Mesin Cuci" required="required"> 
                        <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
                    </div> 
                    <span id="produkHelpBlock" class="form-text text-muted">Pilih Produk yang akan dibeli</span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jumlah" class="col-3 col-form-label">Jumlah</label> 
                    <div class="col-9">
                    <input id="jumlah" name="jumlah" placeholder="jumlah" type="number" class="form-control" required="required">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-3 col-9">
                    <button name="proses" type="submit" value="Kirim" class="btn btn-success">Kirim</button>
                    </div>
                </div>
            </form>

            <!-- Aside Daftar Harga -->
            <aside>
                <div class="daftar-harga">
                    <p class="harga-barang ket">Daftar Harga</p>
                    <p class="harga-barang">TV : Rp 4.200.000</p>
                    <p class="harga-barang">Kulkas : Rp 2.100.000</p>
                    <p class="harga-barang">Mesin Cuci : Rp 3.800.000</p>
                    <p class="harga-barang ket">Harga dapat berubah setiap saat!</p>
                </div>
            </aside>
        </div>

        <!-- div result data -->
        <div>
            <div class="result">
                <p class="font-result">Result Data</p>
                <?php
                    $proses = $_POST['proses'];
                    $_costumer = $_POST['costumer'];
                    $_barang = $_POST['produk'];
                    $_jumlah = $_POST['jumlah'];

                    $tv = 4200000;
                    $kulkas = 2100000;
                    $mesinCuci = 3800000;

                    if ($_barang == 'TV') {
                        $hargaBarang = $tv;
                    } elseif ($_barang == 'Kulkas') {
                        $hargaBarang = $kulkas;
                    } elseif ($_barang == 'Mesin Cuci') {
                        $hargaBarang = $mesinCuci;
                    }

                    $totalHarga = intval($_jumlah) * $hargaBarang;
                    

                    echo '<ul>';
                    echo '<li>Nama Costumer : '. ucwords($_costumer). '</li>';
                    echo '<li>Produk Pilihan : '. $_barang. '</li>';
                    echo '<li>Harga Barang: Rp '. number_format($hargaBarang,2,',','.'). '</li>';
                    echo '<li>Jumlah Beli : '. $_jumlah . '</li>';
                    echo '<li>Total Harga : Rp '. number_format($totalHarga,2,',','.'). '</li>';
                    echo '</ul>';

                ?>
            </div>
        </div>

        <!-- Footer -->
        <footer>
            <p class="created">Develop by @nopall_donat</p>
        </footer>
    </body>
</html>