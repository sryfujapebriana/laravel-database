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
	<h2>HALAMAN UTAMA</h2>
	<nav>
				<ul>
					<li><b>MENU</b></li>
					<li><a href="">Beranda</a></li>
					<li><a href="tambah">Tambah Data</a></li>
					<li><a href="/">Logout</a></li>
				</ul>
			</nav>
	
	
	
	
		
		<table cellpadding="3" cellspacing="0" align="center">
			<tr>
				<td>NIP</td>
				<td>:</td>
				<td><input type="text" name="nip" value="" required></td>	<!-- value diambil dari hasil query -->
			</tr>
			<tr>
				<td>Nama Lengkap</td>
				<td>:</td>
				<td><input type="text" name="nama" size="30" value="" required></td> <!-- value diambil dari hasil query -->
			</tr>
			<tr>
				<td>Gudang</td>
				<td>:</td>
				<td>
					<select name="gudang" required>
						<option value="">Pilih Gudang</option>
						
					</select>
				</td>
			</tr>
			<tr>
				<td>Bagian</td>
				<td>:</td>
				<td>
					<select name="bagian" required>
						<option value="">Pilih Bagian</option>
						
					</select>
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="simpan" value="Simpan"></td>
			</tr>
		</table>
	</form>
</body>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>