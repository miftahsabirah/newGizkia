<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
	<link rel="stylesheet" href="css/layoutsAdmin.css">
	<title>SidebarNavbar</title>
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
			<li><a href="#"><i class='fi fi-rr-home icon'></i> Dashboard</a></li>
			<li>
				<a href="#"><i class="fi fi-rr-user icon"></i></i> Kelola Profil <i class='bx bx-chevron-right icon-right' ></i></a>
				<ul class="side-dropdown">
					<li><a href="#">Manajemen Akses</a></li>
					<li><a href="#">Manajemen Petugas Kesehatan</a></li>
				</ul>
			</li>

			<li>
				<a href="#"><i class="fi fi-rr-map-marker icon"></i> Lihat Lokasi <i class='bx bx-chevron-right icon-right' ></i></a>
				<ul class="side-dropdown">
					<li><a href="#">Peta Bumil</a></li>
					<li><a href="#">Peta Anak</a></li>
					<li><a href="#">Peta Bumil Belum Terdaftar</a></li>
				</ul>
			</li>

			<li>
				<a href="#"><i class="fi fi-rr-stats icon"></i> Kelola Data <i class='bx bx-chevron-right icon-right' ></i></a>
				<ul class="side-dropdown">
					<li><a href="#">Data Bumil</a></li>
					<li><a href="#">Data Anak</a></li>
					<li><a href="#">Data Imunisasi</a></li>
				</ul>
			</li>

			<li>
				<a href="#"><i class="fi fi-rr-memo-circle-check icon"></i> Kelola Rekapitulasi <i class='bx bx-chevron-right icon-right' ></i></a>
				<ul class="side-dropdown">
					<li><a href="#">Rekapitulasi Bumil</a></li>
					<li><a href="#">Rekapitulasi Anak</a></li>
					<li><a href="#">Rekapitulasi Imunisasi</a></li>
					<li><a href="#">Rekapitulasi Gizi</a></li>
				</ul>
			</li>
			


			<li class="divider" data-text="Pengaturan">Pengaturan</li>
			<li>
				<a href="#"><i class="fi fi-rr-settings icon"></i></i> Pengaturan <i class='bx bx-chevron-right icon-right' ></i></a>
				<ul class="side-dropdown">
					<li><a href="#">Basic</a></li>
					<li><a href="#">Select</a></li>
					<li><a href="#">Checkbox</a></li>
					<li><a href="#">Radio</a></li>
				</ul>
			</li>
		</ul>

		<ul class="side-menu">
			<li><a href="#"><i class="fi fi-rr-interrogation icon"></i> Bantuan</a></li>
			<li><a href="#"><i class="fi fi-rr-exit icon" id="red-color"></i> <span id="red-color">Keluar</span></a></li>
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
			<a href="#" class="nav-link">
				<i class='bx bxs-bell icon with-background1'></i>
				<span class="badge">21</span>
			</a>
			
			<a href="#" class="nav-link">
				<i class='bx bxs-message-square-dots icon with-background2' ></i>
				<span class="badge">11</span>
			</a>
			<span class="divider"></span>
			<div class="profile">
				<img src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8cGVvcGxlfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="">
				<ul class="profile-link">
					<li><a href="#"><i class='bx bxs-user-circle icon' ></i> Profile</a></li>
					<li><a href="#"><i class='bx bxs-cog' ></i> Settings</a></li>
					<li><a href="#"><i class='bx bxs-log-out-circle' ></i> Logout</a></li>
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


</body>
</html>