<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <link rel="stylesheet" href="{{asset('css/layoutsUser.css')}}">

    @yield('link')
    <title>@yield('title')</title>
</head>
<body>

    <div>
        <nav class="navbar1 navbar-expand-md">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><b>BANK DATA GIZKIA</b></a>
            </div>
        </nav>

        <nav class="navbar navbar-expand-lg nav">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('home')}}">
                                <i class="fa fa-home"></i>
                                <b>Home</b>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-female" aria-hidden="true"></i>
                                <b>Bumil</b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('dataBumilUser')}}">Ibu Hamil</a></li>
                                <li><a class="dropdown-item" href="{{ route('dataBumilRistiUser')}}">Ibu Hamil Risti</a></li>
                                <li><a class="dropdown-item" href="{{ route('dataIbuMelahirkanUser')}}">Ibu Melahirkan</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-tasks" aria-hidden="true"></i>
                                <b>Rekapitulasi</b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('rekapDataBumilUser')}}">Rekap Bumil</a></li>
                                <li><a class="dropdown-item" href="{{ route('rekapDataAnakUser')}}">Rekap Anak</a></li>
                                <li><a class="dropdown-item" href="{{ route('rekapDataImunisasiUser')}}">Rekap Imunisasi</a></li>
                                <li><a class="dropdown-item" href="{{ route('rekapDataGiziUser')}}">Rekap Gizi</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-map-marked"></i>
                                <b>Peta Temuan</b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('petaBumilUser')}}">Peta Bumil</a></li>
                                <li><a class="dropdown-item" href="{{ route('petaAnakUser')}}">Peta Anak</a></li>
                                <li><a class="dropdown-item" href="{{ route('petaBelumTerdaftarUser')}}">Peta Bumil Belum Terdaftar</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-chart-bar"></i>
                                <b>Visualisasi Data</b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('grafikDataBumil')}}">Grafik Data Bumil</a></li>
                                <li><a class="dropdown-item" href="{{ route('grafikDataAnak')}}">Grafik Data Anak</a></li>
                                <li><a class="dropdown-item" href="{{ route('grafikDataImunisasi')}}">Grafik Data Imunisasi</a></li>
                                <li><a class="dropdown-item" href="{{ route('visualisasi')}}">Visualisasi Data</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>


		
		
@yield('isi')
  

<div class="footer">
    <div class="d-flex flex-wrap justify-content-between align-items-center py-2 batas">
        <div class="col-md-4 d-flex align-items-center">
          <p class="mb-3 mb-md-0">© 2023 Gizkia. All rights reserved.</p>
        </div>
    
        <div class="col-md-4 d-flex align-items-center justify-content-end">
            <a href="#" class="mb-3 me-3 mb-md-0 text-dark">Terms of Service</a>
            <a href="#" class="mb-3 me-3 mb-md-0 text-dark">Privacy Policy</a>
            <a href="#" class="mb-3 mb-md-0 text-dark">Cookies</a>
        </div>
                 
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


@yield('addScript')

</body>


</html>
