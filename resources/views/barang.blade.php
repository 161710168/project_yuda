<html>
<head>
	<title>Data Barang</title>
</head>
<body>
	<h2>Data barang</h2><br><br>
	@foreach($barang as $key)
	{{$key->harga_barang}}+{{$key->nama_barang}}<hr>
	@endforeach
</body>
</html>