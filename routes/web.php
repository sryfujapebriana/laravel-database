<?php
use App\Mahasiswa;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/tambah',function () {
$mahasiswa = new Mahasiswa;
$mahasiswa -> nama = "SryFujaPebriana";
$mahasiswa -> nim = "14111161";
$mahasiswa -> alamat = "Bandung";
$mahasiswa -> save () ;
echo "<b>DATA BERHASIL DISIMPAN</b>";
});

Route::get('/ubah',function () {
$mahasiswa = Mahasiswa::find(3);
$mahasiswa -> nama = "SryFujaPebriana";
$mahasiswa -> nim = "14111161";
$mahasiswa -> alamat = "KOPO";
$mahasiswa -> save () ;
echo "<b>DATA BERHASIL DIUBAH</b>";
});

Route::get('/tampil',function () {
$mahasiswa = Mahasiswa::all();
foreach($mahasiswa as $mhs)
{
echo "<br> <b>Nama</b> : ";
echo $mhs->nama;
echo "<br> <b>Nim</b> : ";
echo $mhs->nim;
echo "<br> <b>Alamat</b> : ";
echo $mhs->alamat;
}
});

Route::get('/hapus',function () {
$mahasiswa = Mahasiswa::find(5);
$mahasiswa-> delete();
echo "<b>DATA BERHASIL DIHAPUS</b>";
});