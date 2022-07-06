<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>penyakit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-3">
        <a href="{{ Route('penyakit.create') }}" class="btn btn-primary">Tambah penyakit</a>
        <a href="/" class="btn btn-secondary">Kembali</a>
        <table class="table table-bordered mt-2">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode penyakit</th>
                    <th>Nama penyakit</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach ($penyakit as $item)
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->kode_penyakit }}</td>
                    <td>{{ $item->nama_penyakit }}</td>
                    <td>
                        <form action="{{ route('penyakit.destroy', $item->id) }}" method="POST">
                            {{-- <a href="{{ route('penyakit.show', $item->id) }}" title="show"
                                class="btn btn-primary fas fa-eye"></a> --}}
                            <a href="{{ route('penyakit.edit', $item->id) }}" class="btn btn-primary ">edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" title="delete" class="btn btn-danger "> delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>
