<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Gejala</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-3">
        <form action="{{ Route('gejala.update', $gejala->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <label for="kode_gejala">Kode Gejala</label>
            <input type="text" hidden name="id" value="{{ $gejala->id }}">
            <input type="text" name="kode_gejala" class="form-control" required value="{{ $gejala->kode_gejala }}">
            <label for="nama_gejala">Nama Gejala</label>
            <input type="text" name="nama_gejala" class="form-control" required value="{{ $gejala->nama_gejala }}">
            <button type="submit" class="btn btn-success mt-3">Update</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>
