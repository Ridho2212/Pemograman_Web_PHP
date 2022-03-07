<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>From Belanja </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <h1 class="text-center">From Belanja</h1>
    <form action="form_belanja.php" method="POST">
        <div class="container">
            <div class="form-group row">
                <label for="name" class="col-4 col-form-label">Customer</label>
                <div class="col-6">
                    <input id="name" name="cst" placeholder="nama customer" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Pilih Produk</label>
                <div class="col-8">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="pp" id="pp_0" type="radio" class="custom-control-input" value="TV">
                        <label for="pp_0" class="custom-control-label">TV</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="pp" id="pp_1" type="radio" class="custom-control-input" value="KULKAS">
                        <label for="pp_1" class="custom-control-label">KULKAS</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="pp" id="pp_2" type="radio" class="custom-control-input" value="MESIN CUCI">
                        <label for="pp_2" class="custom-control-label">MESIN CUSI</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
                <div class="col-6">
                    <input id="jumlah" name="jumlah" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="simpan" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </form>

    <?php
        $customer = $_POST["cst"];
        $produk = $_POST["pp"];
        $jmlh = $_POST["jumlah"];
        $simpan = $_POST["simpan"];

        if ($produk == "TV") {
            $harga = 4200000;
        }
        elseif ($produk == "KULKAS"){
            $harga = 3100000;
        }
        else {
            $harga = 3800000;
        }
        
        $hasil = $jmlh * $harga;

        echo "TOTAL BELANJA";
        echo "</br> Nama Customer : $customer";
        echo "</br> Nama Produk : $produk";
        echo "</br> Jumlah Produk : $jmlh";
        echo "</br> Total Harga : $hasil";
    
    ?>
</body>

</html>