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
			<h4>Data Mahasiswa &raquo; Tambah Data</h4>
			<hr />

	<form class="form-horizontal" name="input" method="POST" action="">
		<div class="form-group">
			<label class="col-sm-3 control-label">NIM :</label>
				<div class="col-sm-4">
					<input class="form-control" type="text" name="nim" maxlenght="10" placeholder="NIM" required>
				</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label">Nama :</label>
				<div class="col-sm-4">
					<input class="form-control" type="text" name="nama" maxlenght="50" placeholder="Nama" required>
				</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label">Alamat :</label>
				<div class="col-sm-4">
					<input class="form-control" type="text" name="alamat" maxlenght="50" placeholder="Alamat" required>
				</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label">&nbsp;</label>
			<div class="col-sm-6">
				<button type="submit" name="add" class="btn btn-sm btn-info">Send <span class="glyphicon glyphicon-send"></span></button>
				<a href="home" class="btn btn-sm btn-danger">Batal <span class="glyphicon glyphicon-remove"></span></a>
			</div>
		</div>
	</form>
<div class="panel-footer">Dede Yusuf - 14.111.120</div>
</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

</body>
</html>