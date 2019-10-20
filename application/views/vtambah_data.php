<!DOCTYPE html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title></title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
	</head>
	<body>
		<right><a href="<?= site_url('Hp/tampil') ?>" class="btn btn-info"><< KEMBALI</a></right>
		<center><h1>TAMBAH DATA GADGET</h1></center>
		<table class="table table-bordered">
			<form action="<?= site_url('Hp/tambah_data_action') ?>" method="post">
				<thead>
					<tr>
						<th>ID</th>
						<th>:</th>
						<th><input type="text" name="id" required /></th>
					</tr>
					<tr>
						<th>Nama</th>
						<th>:</th>
						<th><input type="text" name="nama" required/></th>
					</tr>
					<tr>
						<th>Tipe</th>
						<th>:</th>
						<th><input type="text" name="tipe" required/></th>
					</tr>
					<tr>
						<th>Warna</th>
						<th>:</th>
						<th><input type="text" name="warna" required/></th>
					</tr>
					<tr>
						<th colspan="3"><center><input type="submit" value="TAMBAH DATA" /></center></th>
					</tr>
				</thead>
			</form>
		</table>
	</body>
</html>
