<!DOCTYPE html>
<html>
<head>
	<title>Simple CRUD</title>
	<style>
        h2 {
        background-color:red;
        color:white;
		text-align:center;
		padding: 1em;
        }
		footer {
        background-color:red;
        color:white;
		text-align:center;
        }
		h3 {
        background-color:red;
        color:white;
		text-align:center;
        }
		body{
background: url('sun.jpg') no-repeat scroll;
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
					<li><a href="index.php">Beranda</a></li>
					<li><a href="tambah.php">Tambah Data</a></li>
					<li><a href="../login/logout.php">Logout</a></li>
				</ul>
			</nav>
	<h3>Data Siswa</h3>
	
	<table cellpadding="5" cellspacing="0" border="1" align="center">
      <tr bgcolor="#FF0000">
        <th>No.</th>
        <th>NIS</th>
        <th>Nama Lengkap</th>
        <th>Kelas</th>
        <th>Jurusan</th>
        <th>Opsi</th>
      </tr>
      
    </table>
	<footer>Yuda Pradana Bagaswara - 14.111.107</footer>
</body>
</html>