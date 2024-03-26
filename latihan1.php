<?php
// variable

//cetak
echo 'Belajar PHP <br>';
echo "Saya Senang Belajar PHP";
echo '<br>';
print "Belajar MySQL";
echo "<hr>";

//variable user 
$nama="Andre"; //data string
$alamat="Bekasi"; //data string
$umur=21; //data integer
$berat=80; //tipe desimal 
$_pekerjaan= "Mahasiswa"; //data string
echo $nama;
echo $alamat;
echo $umur;
echo $berat;
echo $_pekerjaan;
echo '<br>';
echo "nama saya $nama alamat di $alamat <br>";
echo 'nama saya ' . $nama. ' alamat di ' .$alamat;
echo "umur saya: $umur";
echo "berat saya: $berat";
echo "pekerjaan saya: $_pekerjaan";
echo "<hr>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variabel User</title>
</head>
<body>
    <!-- cetak di dalam html -->
    <h2>Nama Saya: <?php echo $nama ?></h2>
    <h2>Umur Saya: <?= $umur ?> Tahun</h2>
    <h2>Berat Saya: <?= $berat ?> Kg</h2>
    <h2>Pekerjaan Saya: <?php echo $_pekerjaan ?></h2>
    <hr>
    
</body>
</html>

<?php 


//variable system
echo $_SERVER['SERVER_ADMIN'];
echo "<br>";
echo $_SERVER['SERVER_PORT'];
echo "<hr>";


//Variable Konstanta 
//define: untuk memanggil variable konstanta
define('PELAJARAN', 'PHP Dasar');
echo "Ini Matakuliah:". PELAJARAN;
echo "<hr>";

//oprator aritmatika
$a=5;
$b=3;
echo $a+$b.'<br>';
echo $a-$b.'<br>';
echo $a*$b.'<br>';
echo $a/$b.'<br>';
echo $a%$b.'<br>'; //modulus(%), =
echo $a**$b.'<br>'; //pangkat
echo pow($a,$b). '<br>'; //pangkat
echo pow (2,3); //pangkat 

echo "<hr>";



//SOAL:
// Diketahui jari-jarinya 15, maka berapa luas lingkaran dan keliling lingkaran dengan jari-jari tersebut?
// jika jari2: 15
// rumus phi: 3.14
// rumus luas: phi*(jari2*jari2)
// rumus keliling: 2*phi*jari2
define('PHI', '3.14');
$jari2=15;
$luas=PHI*($jari2*$jari2);
$keliling=2*PHI*$jari2;

echo $jari2;
echo "<br>";
echo $luas;
echo "<br>";
echo $keliling;
echo "<hr>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <p>Jari-jarinya adalah: <?=$jari2 ?></p>
    <p>Luas nya adalah: <?=$luas ?></p>
    <p>Kelilingnya adalah: <?=$keliling ?></p>
    
</body>
</html>

<?php 
//tipe data string 
$itungstring= "Belajar PHP di Kampus Merdeka";
var_dump($itungstring);
echo "<br>";

//menghitung tipe variabel
$huruf="Andre";
$hasil=gettype($huruf);
echo $hasil;
echo "<br>";

$bil=100;
$hasil=gettype($bil);
echo $hasil;
echo "<br>";

$bil2=7.50;
$hasil=gettype($bil2);
echo $hasil;
echo "<br>";

?>

<!-- buat nama lengkap dan alamat, cetak dengan style css, misal style warna dan menggunakan echo -->