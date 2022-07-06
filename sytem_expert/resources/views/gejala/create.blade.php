<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Gejala</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-3">
        <a href="{{ Route('gejala.index')}}" class="btn btn-secondary">Kembali</a>
        <form action="{{ Route('gejala.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="kode_gejala">Kode Gejala</label>
            <input type="text" name="kode_gejala" class="form-control" required>
            <label for="nama_gejala">Nama Gejala</label>
            <input type="text" name="nama_gejala" class="form-control" required>
            <button type="submit" class="btn btn-success mt-3">Tambah</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>
