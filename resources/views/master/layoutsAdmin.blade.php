<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="css/layoutsAdmin.css">
	@yield('link')
	<title>@yield('title')</title>
</head>
<body>
	
	<!-- SIDEBAR -->
	<section id="sidebar">
		
		<a href="#" class="brand">
			<div class="profile-container">
			  <img src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8cGVvcGxlfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Admin Photo" class="profile-image">
			  <div class="profile-text">
				<div class="admin">Admin</div>
				<div class="admin-name">Julia</div>
			  </div>
			</div>
		</a>
		  
		  

		<ul class="side-menu">
			<li class="divider" data-text="Utama">Utama</li>
			<li><a href="#" class="a-link"><i class='fi fi-rr-home icon'></i> Dashboard</a></li>
			<li>
				<a href="#" class="a-link"><i class="fi fi-rr-user icon"></i></i> Kelola Profil <i class='bx bx-chevron-right icon-right' ></i></a>
				<ul class="side-dropdown">
					<li><a href="#" class="a-link">Manajemen Akses</a></li>
					<li><a href="#" class="a-link">Manajemen Petugas Kesehatan</a></li>
				</ul>
			</li>

			<li>
				<a href="#" class="a-link"><i class="fi fi-rr-map-marker icon"></i> Lihat Lokasi <i class='bx bx-chevron-right icon-right' ></i></a>
				<ul class="side-dropdown">
					<li><a href="#" class="a-link">Peta Bumil</a></li>
					<li><a href="#" class="a-link">Peta Anak</a></li>
					<li><a href="#" class="a-link">Peta Bumil Belum Terdaftar</a></li>
				</ul>
			</li>

			<li>
				<a href="#" class="a-link"><i class="fi fi-rr-stats icon"></i> Kelola Data <i class='bx bx-chevron-right icon-right' ></i></a>
				<ul class="side-dropdown">
					<li><a href="#" class="a-link">Data Bumil</a></li>
					<li><a href="#" class="a-link">Data Anak</a></li>
					<li><a href="#" class="a-link">Data Imunisasi</a></li>
				</ul>
			</li>

			<li>
				<a href="#" class="a-link"><i class="fi fi-rr-memo-circle-check icon"></i> Kelola Rekapitulasi <i class='bx bx-chevron-right icon-right' ></i></a>
				<ul class="side-dropdown">
					<li><a href="#" class="a-link">Rekapitulasi Bumil</a></li>
					<li><a href="#" class="a-link">Rekapitulasi Anak</a></li>
					<li><a href="#" class="a-link">Rekapitulasi Imunisasi</a></li>
					<li><a href="#" class="a-link">Rekapitulasi Gizi</a></li>
				</ul>
			</li>
			


			<li class="divider" data-text="Pengaturan">Pengaturan</li>
			<li>
				<a href="#" class="a-link"><i class="fi fi-rr-settings icon"></i></i> Pengaturan <i class='bx bx-chevron-right icon-right' ></i></a>
				<ul class="side-dropdown">
					<li><a href="#" class="a-link">Basic</a></li>
					<li><a href="#" class="a-link">Select</a></li>
					<li><a href="#" class="a-link">Checkbox</a></li>
					<li><a href="#" class="a-link">Radio</a></li>
				</ul>
			</li>
		</ul>

		<ul class="side-menu">
			<li><a href="#" class="a-link"><i class="fi fi-rr-interrogation icon"></i> Bantuan</a></li>
			<li><a href="#" class="a-link"><i class="fi fi-rr-exit icon" id="red-color"></i> <span id="red-color">Keluar</span></a></li>
		</ul>

	</section>
	<!-- SIDEBAR -->

	<!-- NAVBAR -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu toggle-sidebar' ></i>
			<form action="#" class="custom-form">
				<div class="form-group">
					<h1 class= "NavTitle">BANK DATA GIZKIA</h1>
				</div>
			</form>
			
			<div class="profile">
				<img src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8cGVvcGxlfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="">
				<ul class="profile-link">
					<li><a href="#" class="a-link"><i class='bx bxs-user-circle icon' ></i> Profile</a></li>
					<li><a href="#" class="a-link"><i class='bx bxs-cog' ></i> Settings</a></li>
					<li><a href="#" class="a-link"><i class='bx bxs-log-out-circle' ></i> Logout</a></li>
				</ul>
			</div>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
		
		@yield('isi')
			
			
	</section>
	<!-- NAVBAR -->

<script src="js/script.js"></script>
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
@yield('addScript')

</body>
</html>