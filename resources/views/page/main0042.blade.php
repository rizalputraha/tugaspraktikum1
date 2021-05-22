<html>
<head>
	<title>Tugas Kegiatan 1</title>
</head>
<body>
 
	<header>
 
		<h2>Tugas Kegiatan 1 | PTW</h2>
		<nav>
			<a href="/">HOME</a>
			|
			<a href="/artikel">ARTIKEL</a>
			|
			<a href="/kontak">KONTAK</a>
		</nav>
	</header>
	<hr/>
	<br/>
	<br/>
 
	<!-- bagian judul halaman blog -->
	<h3> @yield('judul_halaman') </h3>
 
 
	<!-- bagian konten blog -->
	@yield('konten')
 
 
	<br/>
	<br/>
	<hr/>
</body>
</html>