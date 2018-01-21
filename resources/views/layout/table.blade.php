<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Template Table</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="yuda/css/bootstrap.min.css" rel="stylesheet">
    <link href="yuda/css/style.css" rel="stylesheet">

  </head>
  <body>

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<!-- navbar -->
			@include('patrial.navbar')
			<!-- end navbar -->
			<!-- table -->
			@yield('konten')
			<!-- end table -->
		</div>
	</div>
</div>

    <script src="yuda/js/jquery.min.js"></script>
    <script src="yuda/js/bootstrap.min.js"></script>
    <script src="yuda/js/scripts.js"></script>
  </body>
<yuda