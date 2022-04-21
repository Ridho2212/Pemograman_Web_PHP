<?php
require_once "class.php";

$nama_pasien = $_POST['nama'];
$tmp_lahir = $_POST['tmp_lahir'];
$tgl_periksa = $_POST['tgl_periksa'];
$email = $_POST['email'];
$jk = $_POST['jenis_kelamin'];
$bb = $_POST['bb'];
$tb = $_POST['tb'];
$hasilbmi = new bmiPasien($nama_pasien, $tmp_lahir, $tgl_periksa, $email, $jk, $bb, $tb, $ket); 
$ket = $hasilbmi -> nilai();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil BMI</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container">
        <h3 class="text-center p-2">Hasil BMI</h3>
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <td class="col-md-6">Nama</td>
                    <td class="col-md-6"><?php echo $nama_pasien ;?></td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td><?php echo $tmp_lahir;?></td>
                </tr>
                <tr>
                    <td>Tanggal Periksa</td>
                    <td><?php echo $tgl_periksa;?></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><?php echo $email;?></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td><?php echo $jk;?></td>
                </tr>
                <tr>
                    <td>Berat Badan</td>
                    <td><?php echo $bb;?></td>
                </tr>
                <tr>
                    <td>Tinggi Badan</td>
                    <td><?php echo $tb;?></td>
                </tr>
                <tr>
                    <td>Nilai BMI</td>
                    <td><?php echo $hasilbmi->nilai();?></td>
                </tr>
                <tr>
                    <td>Keterangan</td>
                    <td><?php echo $hasilbmi->status($ket);?></td>
                </tr>

            </tbody>
        </table>
    </div>
</body>

</html>