<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>From Nilai</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <h1 class="text-center"> Form Nilai </h1>
    <form action="hasil.php" method="POST">
        <div class="container">
            <div class="form-group row">
                <label for="name" class="col-4 col-form-label">Nama Lengkap</label>
                <div class="col-6">
                    <input id="name" name="nama" placeholder="Nama Mahasiswa" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label>
                <div class="col-6">
                    <select id="matkul" name="matkul" class="custom-select">
                        <option value="PKN">PKN</option>
                        <option value="Statistika">Statistika</option>
                        <option value="Jaringan Komputer">Jaringan Komputer</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label>
                <div class="col-6">
                    <input id="nilai_uts" name="nilai_uts" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label>
                <div class="col-6">
                    <input id="nilai_uas" name="nilai_uas" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas/Praktikum</label>
                <div class="col-6">
                    <input id="nilai_tugas" name="nilai_tugas" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="proses" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </form>

</body>

</html>