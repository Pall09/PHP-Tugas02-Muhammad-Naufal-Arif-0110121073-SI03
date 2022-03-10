<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Header -->
    <header>
        <h4>Sistem Penilaian</h4>
    </header>

    <!-- Bagian Form -->
    <div class="section">

        <h3 class="text-center">Form Nilai Siswa</h3>

        <!-- Form -->
        <form method="POST" action="nilai_siswa.php">
            <div class="form-group row">
                <label for="nama-lengkap" class="col-4 col-form-label">Nama Lengkap</label> 
                <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-user"></i>
                    </div>
                    </div> 
                    <input id="nama-lengkap" name="nama-lengkap" placeholder="Nama Lengkap" type="text" class="form-control" required="required">
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="mata-kuliah" class="col-4 col-form-label">Mata Kuliah</label> 
                <div class="col-8">
                <select id="mata-kuliah" name="mata-kuliah" class="custom-select">
                    <option value="DDP">Dasar-Dasar Pemograman</option>
                    <option value="PW2">Pemograman Web 2</option>
                    <option value="BD">Basis Data</option>
                </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="uts" class="col-4 col-form-label">Nilai UTS</label> 
                <div class="col-8">
                <input id="uts" name="uts" placeholder="Nilai UTS" value="" type="number" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="uas" class="col-4 col-form-label">Nilai UAS</label> 
                <div class="col-8">
                <input id="uas" name="uas" placeholder="Nilai UAS" value="" type="number" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="tugas" class="col-4 col-form-label">Nilai Tugas/Praktikum</label> 
                <div class="col-8">
                <input id="tugas" name="tugas" placeholder="Nilai Tugas" value="" type="number" class="form-control">
                </div>
            </div> 
            <div class="form-group row">
                <div class="offset-4 col-8">
                <button name="proses" type="submit" class="btn btn-primary" value="Simpan">Simpan</button>
                </div>
            </div>
        </form>
    </div>

    <!-- Footer -->
    <footer>
        <p class="created">Develop by @nopall_donat</p>
    </footer>
</body>
</html>