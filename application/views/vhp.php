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
		<center><h1>DATA GADGET</h1></center>
		<a href="<?= site_url('Hp/tambah_data') ?>" class="btn btn-info">TAMBAH DATA</a>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>ID</th>
					<th>NAMA</th>
					<th>TIPE</th>
					<th>WARNA</th>
					<th>EDIT</th>
					<th>DELETE</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($dat as $row){ ?>
					<tr>
						<td><?= $row->id ?></td>
						<td><?= $row->nama ?></td>
						<td><?= $row->tipe ?></td>
						<td><?= $row->warna ?></td>
						<td><a href="<?= site_url('Hp/edit_data/'.$row->id) ?>" class="btn btn-warning">EDIT</a></td>
						<td><a href="<?= site_url('Hp/delete_data/'.$row->id) ?>"  class="btn btn-danger" onclick="return confirm('yakin anda akan menghapus data ini ?');">DELETE</a></td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</body>
</html>
