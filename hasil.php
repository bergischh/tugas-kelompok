<?php
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $tanggal = $_POST['tanggal'];
    $usia = $_POST['usia'];
    $sekolah = $_POST['sekolah'];

    echo "<b>BIODATA SISWA</b>"; echo "<br/>";
    echo "Nama : " .$nama; echo "<br/>";
    echo "Alamat : " .$alamat; echo "<br/>";
    echo "Tanggal Lahir : " .$tanggal; echo "<br/>";
    echo "Usia : " .$usia; echo "<br/>";
    echo "Sekolah : " .$sekolah; echo "<br/>";
    
    echo "<br/>";

    $mat = $_POST['mtk'];
    $indonesia = $_POST['indo'];
    $sunda = $_POST['sun'];
    $produktif = $_POST['prod'];
    $sejarah = $_POST['sej'];
    $pipas = $_POST['pip'];
    $pabp = $_POST['agam'];
    $hasil = $mat + $indonesia + $sunda + $produktif + $sejarah +$pipas +$pabp;
    $rata = $hasil / 7;
    
    echo "<b>HASIL NILAI SISWA</b>"; echo "<br/>";
    echo "Matematika : " .$mat;
    if ( $mat >= 90 && $mat <= 100) {
        echo " | (A)";
    }
    else if ( $mat >= 80) {
        echo " | (B)";
    }
    else if ( $mat >= 70 && $mat <= 80) {
        echo " | (C)";
    }
    else {
        echo " | Tidak Lulus";
    }
    echo " <br/>";


    echo "B.Indonesia : " .$indonesia;
    if ( $indonesia >= 90 && $indonesia <= 100) {
        echo " | (A)";
    }
    else if ( $indonesia >= 80) {
        echo " | (B)";
    }
    else if ( $indonesia >= 70 && $indonesia <= 80) {
        echo " | (C)";
    }
    else {
        echo " | Tidak Lulus";
    }
    echo " <br/>";
    

    echo "B.Sunda : " .$sunda;
    if ( $sunda >= 90 && $sunda <= 100) {
        echo " | (A)";
    }
    else if ( $sunda >= 80) {
        echo " | (B)";
    }
    else if ( $sunda >= 70 && $sunda <= 80) {
        echo " | (C)";
    }
    else {
        echo " | Tidak Lulus";
    }
    echo " <br/>";


    echo "produktif : " .$produktif;
    if ( $produktif >= 90 && $produktif <= 100) {
        echo " | (A)";
    }
    else if ( $produktif >= 80) {
        echo " | (B)";
    }
    else if ( $produktif >= 70 && $produktif <= 80) {
        echo " | (C)";
    }
    else {
        echo " | Tidak Lulus";
    }
    echo " <br/>";


    echo "sejarah : " .$sejarah; 
    if ( $sejarah >= 90 && $sejarah <= 100) {
        echo " | (A)";
    }
    else if ( $sejarah >= 80) {
        echo " | (B)";
    }
    else if ( $sejarah >= 70 && $sejarah <= 80) {
        echo " | (C)";
    }
    else {
        echo " | Tidak Lulus";
    }
    echo " <br/>";


    echo "pipas : " .$pipas; 
    if ( $pipas >= 90 && $pipas <= 100) {
        echo " | (A)";
    }
    else if ( $pipas >= 80) {
        echo " | (B)";
    }
    else if ( $pipas >= 70 && $pipas <= 80) {
        echo " | (C)";
    }
    else {
        echo " | Tidak Lulus";
    }
    echo " <br/>";


    echo "PABP : " .$pabp; 
    if ( $pabp >= 90 && $pabp <= 100) {
        echo " | (A)";
    }
    else if ( $pabp >= 80) {
        echo " | (B)";
    }
    else if ( $pabp >= 70 && $pabp <= 80) {
        echo " | (C)";
    }
    else {
        echo " | Tidak Lulus";
    }
    echo " <br/>";
    echo "<br/>";
   
    echo "Hasil Rata-Rata : " .$rata; echo "<br/>";
    echo "Nilai Max : ";
    echo max ($mat , $indonesia , $sunda , $produktif ,$sejarah ,$pipas ,$pabp); echo "<br/>";
    echo "Nilai Min : ";
    echo min ($mat , $indonesia , $sunda , $produktif ,$sejarah ,$pipas ,$pabp); echo "<br/> <br/>";

    echo "<b>Nama Kelompok : </b>"; echo "<br/>";
    echo "Elsa Salsa Billa";
    echo "Celly Nurhaliza <br/>";
    echo "WANDA HALIMATUSYA' DIYAH <br/>";
    echo "NAURA SITI NABILAH <br/>";
    echo "BERGISCH HUMAIRA <br/>";
    echo "<br/>";
    echo "<br/>";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Tugas Kelompok</title>
    </head>
<body>
    <style>
        body{
            background-color : pink;
        }
    </style>
    <a href = "data.php"> input kembali</a>
</body>
</html>
