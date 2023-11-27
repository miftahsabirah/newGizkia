@extends('master.layoutsAdmin')

<!-- MAIN -->
<link rel="stylesheet" href="css/manajemenProfil.css">

@section('isi')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/coba.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
    

</head>
<body>

    <div class="container">
        <div class="title-container">
            <h2>Manajemen Akses</h2>
        </div>
        <div class="table-container">
            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th rowspan="2">NIP</th>                        
                        <th>2</th>
                        <th>3</th>
                        <th rowspan="2">NIP</th>                        
                        <th>5</th>
                        <th>6</th>
                        <th>7</th>
                        <th rowspan="2">NIP</th>                        
                    </tr>
                    <tr>
                        <th>Nama</th>
                        <th>Puskesmas</th>
                        <th>Jabatan</th>
                        <th>Username</th>
                        <th>Status</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>012345678</td>
                        <td>Miftah Sabirah</td>
                        <td>Edinburgh</td>
                        <td>2011-04-25</td>
                        <td>2011-04-25</td>
                        <td>$320,800</td>
                        <td>$320,800</td>
                        <td>$320,800</td>
                    </tr>

                    <tr>
                        <td>012345678</td>
                        <td>Ananda Kusuma</td>
                        <td>Edinburgh</td>
                        <td>2011-04-25</td>
                        <td>2011-04-25</td>
                        <td>$320,800</td>
                        <td>$320,800</td>
                        <td>$320,800</td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>


<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>

<script>
    new DataTable('#example');
</script>

</body>
</html>

@endsection
