<?php
//variabel
$batas = 10 ;
$balik = 14;
$bpel = 1000;
$bcerpen = 1500;
$bnovel= 2000;
	$ttlvel= wktupinjaman($balik,$batas)*$bnovel;
    $ttlpel= wktupinjaman($balik,$batas)*$bpel;
    $ttlcer= wktupinjaman($balik,$batas)*$bcerpen;
$ttldnd= $ttlcer+$ttlpel+$ttlvel;
//function waktu pinjam (variabel)
function wktupinjaman($balik){
	$tltpengembalian=$balik-10;
	return $tltpengembalian;
}//runing data
echo "Meminjam selama  : ",$balik," hari</br>"; 
echo "Terlambat selama : ".wktupinjaman(14)," hari</br>";
echo "Denda Buku Novel: Rp",$ttlvel,"</br>";
echo "Denda Buku Pelajaran: Rp",$ttlpel,"</br>";
echo "Denda Buku Cerpen: Rp",$ttlcer,"</br>";
echo "Denda Total : Rp ",$ttldnd,"</br>";
?>