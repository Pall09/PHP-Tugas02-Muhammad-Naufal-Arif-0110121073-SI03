<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai Siswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div>
        <p class="font-result">Data Siswa</p>
        <?php
        $proses = $_POST["proses"];
        $nama_siswa = $_POST['nama-lengkap'];
        $matkul = $_POST['mata-kuliah'];
        $nilai_uts = $_POST['uts'];
        $nilai_uas = $_POST['uas'];
        $nilai_tugas = $_POST['tugas'];

        $nilai_rata2 = (intval($nilai_uts + $nilai_uas + $nilai_tugas)) / 3;
        if ($nilai_rata2 > 55) {
            $lulus = "Selamat Anda Dinyatakan Lulus!";
        } else {
            $lulus = "Mohon Maaf Anda Harus Mengulang Pada Tahun Ajaran Mendatang.";
        }

        if ($nilai_rata2 <= 35) {
            $grade = 'E';
        } elseif ($nilai_rata2 <= 55) {
            $grade = 'D';
        } elseif ($nilai_rata2 <= 69) {
            $grade = 'C';
        } elseif ($nilai_rata2 <= 84) {
            $grade = 'B';
        } elseif ($nilai_rata2 <= 100) {
            $grade = 'A';
        } else {
            $grade = 'I';
        }

        switch ($grade) {
            case 'A':
                $keterangan = 'Sangat Memuaskan';
                break;
            case 'B':
                $keterangan = 'Memuaskan';
                break;
            case 'C':
                $keterangan = 'Cukup';
                break;
            case 'D':
                $keterangan = 'Kurang';
                break;
            case 'E':
                $keterangan = 'Sangat Kurang';
                break;
            default:
                $keterangan = 'Tidak Ada';
                break;
        }
        
        echo '<ul>';
        echo '<li>Proses : '. $proses. '</li>';
        echo '<li>Nama Siswa : '. ucwords($nama_siswa). '</li>';
        echo '<li>Mata Kuliah : '. $matkul . '</li>';
        echo '<li>Nilai UTS : '. $nilai_uts. '</li>';
        echo '<li>Nilai UAS : '. $nilai_uas. '</li>';
        echo '<li>Nilai Tugas : '. $nilai_tugas. '</li>';
        echo '</ul>';

        // Hasil Nilai Siswa Keseluruhan.
        echo '<hr>';
        echo '<p class="font-result">Hasil Nilai Keseluruhan</p>';
        echo '<ul>';
        echo '<li>Nilai Rata-Rata : '. round($nilai_rata2). '</li>';
        echo '<li>Pernyataan Lulus : '. $lulus. '</li>';
        echo '<li>Grade Nilai : '. $grade. '</li>';
        echo '<li>Keterangan Grade : '. $keterangan. '</li>';
        echo '</ul>';
        ?>
    </div>
</body>
</html>