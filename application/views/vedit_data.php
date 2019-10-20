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
		<center><h1>UBAH DATA GADGET</h1></center>
		<table class="table table-bordered">
			<form action="<?= site_url('Hp/edit_data_action') ?>" method="post">
				<thead>
					<input type="text" name="id" required hidden value="<?= $dat->id ?>"/></
					<tr>
						<th>Nama</th>
						<th>:</th>
						<th><input type="text" name="nama" required value="<?= $dat->nama ?>" /></th>
					</tr>
					<tr>
						<th>Tipe</th>
						<th>:</th>
						<th><input type="text" name="tipe" required value="<?= $dat->tipe ?>" /></th>
					</tr>
					<tr>
						<th>Warna</th>
						<th>:</th>
						<th><input type="text" name="warna" required value="<?= $dat->warna ?>" /></th>
					</tr>
					<tr>
						<th colspan="3"><center><input type="submit" value="UBAH DATA" /></center></th>
					</tr>
				</thead>
			</form>
		</table>
	</body>
</html>
