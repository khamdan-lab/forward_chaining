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
        <a href="{{ Route('rulebase.index')}}" class="btn btn-secondary">Kembali</a>
        <form action="{{ Route('rulebase.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="kode_penyakit">Nama Penyakit</label>
            <select name="kode_penyakit" id="" required  class="form-control">
                @foreach ($penyakit as $item)
                    <option value="" style="display:none">Pilih Penyakit...</option>
                    <option value="{{ $item->kode_penyakit }}">{{ $item->nama_penyakit }}</option>
                @endforeach

            </select>
            <label for="kode_gejala"> Gejala</label>
            <select name="kode_gejala" id="" required class="form-control">
                @foreach ($gejala as $item)
                    <option value="" style="display: none">Pilih Gejala...</option>
                    <option value="{{ $item->kode_gejala }}">{{ $item->nama_gejala }}</option>
                @endforeach
            </select>
            <button type="submit" class="btn btn-success mt-3">Tambah</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>
