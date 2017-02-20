<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device=width, initial-scale=1">
	<title>CRUD</title>

	<link href="css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
	<nav class="navbar navbar-default">
  		<div class="container">
    		<div class="navbar-header">
      		<a class="navbar-brand" href="#">Operasi CRUD</a>
    	</div>
    		<ul class="nav navbar-nav">
     			<li class="active"><a href="home">Master Data</a></li>
      			<li><a href="#">Menu 1</a></li>
     			 <li><a href="#">Menu 2</a></li>
     			 <li><a href="#">Menu 3</a></li>
   			</ul>
	</nav>

	<div class="container">
		<div class="content">
			<h4>Data Mahasiswa</h4>
			<hr />

		<table class="table table-striped table-hover">
			<a href="add" class="btn btn-link btn-sm">Tambah <span class="glyphicon glyphicon-plus-sign"></span></a>
			<tr>
				<td><b>No</b></td>
				<td><b>Nim</b></td>
				<td><b>Nama</b></td>
				<td><b>Alamat</b></td>
				<td><b>Aksi</b></td>
			</tr>

		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>

			<td>
			<a href="edit.php">Edit</a>
			<a href="index.php" </a>Delete</td>
		</tr>

	</div>
		</div>
		</table>
		<div class="panel-footer">Dede Yusuf - 14.111.120</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
</body>
</html>