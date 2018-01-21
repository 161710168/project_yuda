<html>
<head>
	<title>Custom Blade</title>
</head>
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
<body>
	<!-- menambahkan header -->
	@include('patrial.navbar')
		<!-- tempat yang bisa di isi -->
		@include('patrial.jumbotron')	

	<!-- menambahkan sebuah footer -->
	@include('patrial.slider')

	<script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>
</html>