<html>
<head>
	<title>Latihan Blade Templating</title>
</head>
<body>
	<!-- menambahkan header -->
	@include('part.header2')
		<!-- tempat yang bisa di isi -->
		@include('part.jumbotron')
		@yield('konten')<br><br>

	<!-- menambahkan sebuah footer -->
	@include('part.footer2')
</body>
</html>