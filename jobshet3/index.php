<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
echo "A. <br>";

echo "Nis : 2233273<br>";
echo "Nama : Safira Laili Andriana salindeho<br>";
echo "Alamat : DS.Sriwulan, Sayung<br>";
echo "Telp : 6285600640208<br>";
echo "Email : safiraandrianaslindeho@gmail.com<br>";
echo "B.<br><br>";
?>
<form action="index.php" method="GET">
Nilai Tugas: <input type="text" name="tugas"><br>
Nilai UTS: <input type="text" name="uts"><br>
Nilai UAS: <input type="text" name="uas"><br>
<input type="submit">
</form>

<?php

$tugas =$_GET["tugas"];
$uts =$_GET["uts"];
$uas =$_GET["uas"];

$nilai_akhir = ($tugas * 0.20) + ($uts * 0.35) + ($uas *0.45);

$e = '';
if ($nilai_akhir >=90) {
    $grade= 'A';
}
elseif ($nilai_akhir >=80) {
    $grade= 'B';
}
elseif($nilai_akhir >=75) {
    $grade= 'C';
}
else{
    $grade= 'D';
}


echo "Nis : 2233273<br>";
echo "Safira Laili Andrianasalindeho<br>";
echo "N. Tugas : $tugas<br>";
echo "N. UTS : $uts<br>";
echo "N. UAS : $uas<br>";
echo "N. AKHIR : $nilai_akhir<br>";
echo "N. HURUF ; $grade<br>";
?>
</body>
</html>