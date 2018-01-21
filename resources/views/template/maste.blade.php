<html>
<head>
	<title>Latihan Blade Templating</title>
</head>
<body>
	<!-- menambahkan header -->
	@include('part.header')
		<!-- tempat yang bisa di isi -->
		@yield('konten')<br><br>

	<!-- menambahkan sebuah footer -->
	@include('part.footer')
</body>
</html>