<?php $__env->startSection('content'); ?>

	<!DOCTYPE html>
<html>
<head>
	<title>Simple CRUD</title>
	<style>
        h2 {
        background-color:#FFB6C1;
        color:white;
		text-align:center;
		padding: 1em;
        }
		footer, h3 {
        background-color:#FFB6C1;
        color:white;
		text-align:center;
        }
		body{
background: url('sakura2.jpg') no-repeat scroll;
background-size: 100% 100%;
min-height: 700px;
}
    </style>
</head>
<body>
	<h2>HALAMAN TAMBAH</h2>
	<nav>
				<ul>
					<li><b>MENU</b></li>
					<li><a href="">Beranda</a></li>
					<li><a href="tambah">Tambah Data</a></li>
					<li><a href="/">Logout</a></li>
				</ul>
			</nav>
	
	
	<form action="../../../../../xampp/htdocs/Fuja/karyawan/tambah-proses.php" method="post">
		<table cellpadding="3" cellspacing="0" align="center">
			<tr>
				<td>NIP</td>
				<td>:</td>
				<td><input type="text" name="nip" required></td>
			</tr>
			<tr>
				<td>Nama Lengkap</td>
				<td>:</td>
				<td><input type="text" name="nama" size="30" required></td>
			</tr>
			<tr>
				<td>Gudang</td>
				<td>:</td>
				<td>
					<select name="gudang" required>
						<option value="">Pilih Gudang</option>
						<option value="I">I</option>
						<option value="II">II</option>
						<option value="III">III</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Bagian</td>
				<td>:</td>
				<td>
					<select name="bagian" required>
						<option value="">Pilih Bagian</option>
						<option value="Finishing">Finishing</option>
						<option value="Operator">Operator</option>
						<option value="Mekanik">Mekanik</option>
						<option value="Admin">Admin</option>
						<option value="Security">Security</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="tambah" value="Tambah"></td>
			</tr>
		</table>
	</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>