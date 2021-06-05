<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Tutorial Laravel #21 : CRUD Eloquent Laravel - www.malasngoding.com</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
               
                <div class="card-body">
                    <a href="/pelanggan/tambah" class="btn btn-primary">Input Pelanggan Baru</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $no=1?>
                @foreach ($pelanggan as $plg)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $plg->nama }}</td>
                    <td>{{ $plg->alamat }}</td>
                    <td>
        <a href="/pelanggan/edit/{{ $plg->id }}" class="btn btn-warning">Edit</a>
        <a href="/pelanggan/hapus/{{ $plg->id }}" class="btn btn-danger">Hapus</a>
    </td>
                    
                    
                </tr> 
                @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>