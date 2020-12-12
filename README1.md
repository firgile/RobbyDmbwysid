# RobbyDmbwysid
Keterangan jawaban nomor 1.php
dan program untuk saya coding adalah notepad++ ,
saya mengcompile data php menggunakan xampp myapache dan mySQL
dan menyimpan file di dalam D:/xampp/htdocs 
dengan cara http://localhost/1.php <- memasukan di kolom http:// browser.
jika coding yang ada tidak dapat tercompile atau runing di https://www.onlinegdb.com/
silahkan ke line 36 dari halaman readme.md ini 
//variabel yang ada di dalam program 1.php seperti ini
$batas = 10 ;
$balik = 14;
$bpel = 1000;
$bcerpen = 1500;
$bnovel= 2000;
//berikut adalah variabel yang saya gunakan dengan gabungan variabel sebelum 
//dan gabungan dari function 
	$ttlvel= wktupinjaman($balik,$batas)*$bnovel;
    $ttlpel= wktupinjaman($balik,$batas)*$bpel;
    $ttlcer= wktupinjaman($balik,$batas)*$bcerpen;
$ttldnd= $ttlcer+$ttlpel+$ttlvel;
//function waktu peminjaman (variabel) dan function yang saya gunakan
//hanya meliputi selisih batas waktu dan pengembalian buku memi
function wktupinjaman($balik){
	$tltpengembalian=$balik-10;
	return $tltpengembalian;
  }
 //berikut seperti ini yang saya gunakan untuk compile
 // untuk outputnya sendiri hanya mengikut yang ada di soal
echo "Meminjam selama  : ",$balik," hari</br>"; 
echo "Terlambat selama : ".wktupinjaman(14)," hari</br>";
echo "Denda Buku Novel: Rp",$ttlvel,"</br>";
echo "Denda Buku Pelajaran: Rp",$ttlpel,"</br>";
echo "Denda Buku Cerpen: Rp",$ttlcer,"</br>";
echo "Denda Total : Rp ",$ttldnd,"</br>";
?>
//berikut adalah coding untuk runing di http://www.onlinegdb.com/
//karena cara penulisannya pun akan berbeda dengan yang saya gunakan
<?php
$batas = 10 ;
$balik = 14;
$bpel = 1000;
$bcerpen = 1500;
$bnovel= 2000;
	$ttlvel= wktupinjaman($balik,$batas)*$bnovel;
    $ttlpel= wktupinjaman($balik,$batas)*$bpel;
    $ttlcer= wktupinjaman($balik,$batas)*$bcerpen;
$ttldnd= $ttlcer+$ttlpel+$ttlvel;
function wktupinjaman($balik,$batas){
	$a = $balik;
	$b = $batas;
	$tltpengembalian=$a-$b;
	return $tltpengembalian;
}
echo "Meminjam selama  : ",$balik; echo" hari
";
echo "Terlambat selama : ".wktupinjaman($balik,$batas);echo " hari
";
echo "Denda Buku Novel : Rp",$ttlvel;echo "
";
echo "Denda Buku Pelajaran : Rp",$ttlpel;echo "
";
echo "Denda Buku Cerpen : Rp",$ttlcer;echo"
";
echo "Denda Total : Rp ",$ttldnd;echo"
";
?>
