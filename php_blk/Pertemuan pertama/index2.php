<?
// PHP di dalam HTML
// cara membuat variabel di php
// keyword : const, let, var
// variabel $
// scope =cangkupan 
// variabel global && variabel local
// variabel global = variabel yang bisa diakses dimana saja 
// variabel local = variabel yang hanya bisa di akses dibagian tertentu
$angka = 20

echo $angka;

$nama "Naufal Zian Andhika";

//gaboleh pake spasi
// gaboleh di awali nomor 
// kalo mau pake, tanda underscore(_)

$nama_depan = "Budi";
$nama_depan = "oetomo";

// operator aritmatika = +, -, *, /, %
// operator assignment = =, +=, -=, *=,
// operator perbandingan = <, >, <=, >= 
// ==, !=, ===, !==
// operator logika = &&, ||, !

var_dump(1 === "1");



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo "Selamat datang " . $nama ?></h1>
</body>
</html>