@extends('master.layoutsAdmin')

@section('link')
<link rel="stylesheet" href="css/manajemenProfil.css">
@endsection

@section('title')
Manajemen Akses
@endsection

@section('isi')

    <div class="main-container">
        <div class="title-container rounded-top border-bottom">
            <h2>Manajemen Akses</h2>
        </div>
        <div class="table-container">
            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                      <th style="text-align: center;">NIP</th>
                      <th style="text-align: center;">Nama</th>
                      <th style="text-align: center;">Puskesmas</th>
                      <th style="text-align: center;">Tanggal Lahir</th>
                      <th style="text-align: center;">Jabatan</th>
                      <th style="text-align: center;">Username</th>
                      <th style="text-align: center;">Status</th>
                      <th style="text-align: center;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>012345671</td>
                        <td>
                          <div class="profile">
                              <img src="img/bgRegisterLogin.png" alt="Profile Image">
                              Miftah Sabirah
                          </div>
                        </td>                        
                        <td>Edinburgh</td>
                        <td>2011-04-25</td>
                        <td>2011-04-25</td>
                        <td>$320,800</td>
                        <td><span class="badge rounded-pill bg-success">Terima</span></td>
                        <td>
                          <button class="icon-button">
                              <i class="fi fi-rr-square-x" style="color: red;"></i> <!-- Ikon pertama menjadi merah -->
                          </button>
                          <button class="icon-button">
                              <i class="fi fi-rr-checkbox" style="color: green;"></i> <!-- Ikon kedua menjadi hijau -->
                          </button>
                        </td>
                      
                    </tr>

                    <tr>
                        <td>012345672</td>
                        <td>
                          <div class="profile">
                              <img src="img/bgRegisterLogin.png" alt="Profile Image">
                              Ananda Kusuma 
                          </div>
                        </td>                         
                        <td>Edinburgh</td>
                        <td>2011-04-25</td>
                        <td>2011-04-25</td>
                        <td>$320,800</td>
                        <td><span class="badge rounded-pill bg-danger">Tolak</span></td>
                        <td>
                          <button class="icon-button">
                              <i class="fi fi-rr-square-x" style="color: red;"></i> <!-- Ikon pertama menjadi merah -->
                          </button>
                          <button class="icon-button">
                              <i class="fi fi-rr-checkbox" style="color: green;"></i> <!-- Ikon kedua menjadi hijau -->
                          </button>
                        </td>
                    </tr>

                    <tr>
                        <td>012345673</td>
                        <td>
                          <div class="profile">
                              <img src="img/bgRegisterLogin.png" alt="Profile Image">
                              Nauval Tri
                          </div>
                        </td>                         
                        <td>Edinburgh</td>
                        <td>2011-04-25</td>
                        <td>2011-04-25</td>
                        <td>$320,800</td>
                        <td><span class="badge rounded-pill bg-danger">Tolak</span></td>
                        <td>
                          <button class="icon-button">
                              <i class="fi fi-rr-square-x" style="color: red;"></i> <!-- Ikon pertama menjadi merah -->
                          </button>
                          <button class="icon-button">
                              <i class="fi fi-rr-checkbox" style="color: green;"></i> <!-- Ikon kedua menjadi hijau -->
                          </button>
                        </td>
                    </tr>

                    <tr>
                        <td>012345674</td>
                        <td>
                          <div class="profile">
                              <img src="img/bgRegisterLogin.png" alt="Profile Image">
                              Muhammad Fadhillah
                          </div>
                        </td>                         
                        <td>Edinburgh</td>
                        <td>2011-04-25</td>
                        <td>2011-04-25</td>
                        <td>$320,800</td>
                        <td><span class="badge rounded-pill bg-danger">Tolak</span></td>
                        <td>
                          <button class="icon-button">
                              <i class="fi fi-rr-square-x" style="color: red;"></i> <!-- Ikon pertama menjadi merah -->
                          </button>
                          <button class="icon-button">
                              <i class="fi fi-rr-checkbox" style="color: green;"></i> <!-- Ikon kedua menjadi hijau -->
                          </button>
                        </td>
                    </tr>

                    <tr>
                        <td>012345675</td>
                        <td>
                          <div class="profile">
                              <img src="img/bgRegisterLogin.png" alt="Profile Image">
                              Ananda Kusuma 
                          </div>
                        </td>                         
                        <td>Edinburgh</td>
                        <td>2011-04-25</td>
                        <td>2011-04-25</td>
                        <td>$320,800</td>
                        <td><span class="badge rounded-pill bg-danger">Tolak</span></td>
                        <td>
                          <button class="icon-button">
                              <i class="fi fi-rr-square-x" style="color: red;"></i> <!-- Ikon pertama menjadi merah -->
                          </button>
                          <button class="icon-button">
                              <i class="fi fi-rr-checkbox" style="color: green;"></i> <!-- Ikon kedua menjadi hijau -->
                          </button>
                        </td>
                    </tr>

                    <tr>
                        <td>012345675</td>
                        <td>
                          <div class="profile">
                              <img src="img/bgRegisterLogin.png" alt="Profile Image">
                              Ananda Kusuma 
                          </div>
                        </td>                         
                        <td>Edinburgh</td>
                        <td>2011-04-25</td>
                        <td>2011-04-25</td>
                        <td>$320,800</td>
                        <td><span class="badge rounded-pill bg-danger">Tolak</span></td>
                        <td>
                          <button class="icon-button">
                              <i class="fi fi-rr-square-x" style="color: red;"></i> <!-- Ikon pertama menjadi merah -->
                          </button>
                          <button class="icon-button">
                              <i class="fi fi-rr-checkbox" style="color: green;"></i> <!-- Ikon kedua menjadi hijau -->
                          </button>
                        </td>
                    </tr>
                    <tr>
                        <td>012345675</td>
                        <td>
                          <div class="profile">
                              <img src="img/bgRegisterLogin.png" alt="Profile Image">
                              Ananda Kusuma 
                          </div>
                        </td>                         
                        <td>Edinburgh</td>
                        <td>2011-04-25</td>
                        <td>2011-04-25</td>
                        <td>$320,800</td>
                        <td><span class="badge rounded-pill bg-danger">Tolak</span></td>
                        <td>
                          <button class="icon-button">
                              <i class="fi fi-rr-square-x" style="color: red;"></i> <!-- Ikon pertama menjadi merah -->
                          </button>
                          <button class="icon-button">
                              <i class="fi fi-rr-checkbox" style="color: green;"></i> <!-- Ikon kedua menjadi hijau -->
                          </button>
                        </td>
                    </tr>
                    <tr>
                        <td>012345675</td>
                        <td>
                          <div class="profile">
                              <img src="img/bgRegisterLogin.png" alt="Profile Image">
                              Ananda Kusuma 
                          </div>
                        </td>                         
                        <td>Edinburgh</td>
                        <td>2011-04-25</td>
                        <td>2011-04-25</td>
                        <td>$320,800</td>
                        <td><span class="badge rounded-pill bg-danger">Tolak</span></td>
                        <td>
                          <button class="icon-button">
                              <i class="fi fi-rr-square-x" style="color: red;"></i> <!-- Ikon pertama menjadi merah -->
                          </button>
                          <button class="icon-button">
                              <i class="fi fi-rr-checkbox" style="color: green;"></i> <!-- Ikon kedua menjadi hijau -->
                          </button>
                        </td>
                    </tr>
                    <tr>
                        <td>012345675</td>
                        <td>
                          <div class="profile">
                              <img src="img/bgRegisterLogin.png" alt="Profile Image">
                              Ananda Kusuma 
                          </div>
                        </td>                         
                        <td>Edinburgh</td>
                        <td>2011-04-25</td>
                        <td>2011-04-25</td>
                        <td>$320,800</td>
                        <td><span class="badge rounded-pill bg-danger">Tolak</span></td>
                        <td>
                          <button class="icon-button">
                              <i class="fi fi-rr-square-x" style="color: red;"></i> <!-- Ikon pertama menjadi merah -->
                          </button>
                          <button class="icon-button">
                              <i class="fi fi-rr-checkbox" style="color: green;"></i> <!-- Ikon kedua menjadi hijau -->
                          </button>
                        </td>
                    </tr>
                    <tr>
                        <td>012345675</td>
                        <td>
                          <div class="profile">
                              <img src="img/bgRegisterLogin.png" alt="Profile Image">
                              Ananda Kusuma 
                          </div>
                        </td>                         
                        <td>Edinburgh</td>
                        <td>2011-04-25</td>
                        <td>2011-04-25</td>
                        <td>$320,800</td>
                        <td><span class="badge rounded-pill bg-danger">Tolak</span></td>
                        <td>
                          <button class="icon-button">
                              <i class="fi fi-rr-square-x" style="color: red;"></i> <!-- Ikon pertama menjadi merah -->
                          </button>
                          <button class="icon-button">
                              <i class="fi fi-rr-checkbox" style="color: green;"></i> <!-- Ikon kedua menjadi hijau -->
                          </button>
                        </td>
                    </tr>
                    <tr>
                        <td>012345675</td>
                        <td>
                          <div class="profile">
                              <img src="img/bgRegisterLogin.png" alt="Profile Image">
                              Ananda Kusuma 
                          </div>
                        </td>                         
                        <td>Edinburgh</td>
                        <td>2011-04-25</td>
                        <td>2011-04-25</td>
                        <td>$320,800</td>
                        <td><span class="badge rounded-pill bg-danger">Tolak</span></td>
                        <td>
                          <button class="icon-button">
                              <i class="fi fi-rr-square-x" style="color: red;"></i> <!-- Ikon pertama menjadi merah -->
                          </button>
                          <span style="margin-right: 10px;"></span>
                          <button class="icon-button">
                              <i class="fi fi-rr-checkbox" style="color: green;"></i> <!-- Ikon kedua menjadi hijau -->
                          </button>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>

@endsection

@section('addScript')
<script>
    $(document).ready(function () {
        $('#example').DataTable({
            columnDefs: [
                { targets: [7], orderable: false }  // Kolom 10, 11, dan 16 tidak dapat di-sorting
            ]
        });
    });
</script>
@endsection

</body>
</html>
