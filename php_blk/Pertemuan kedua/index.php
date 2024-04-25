<?php
// Function -> program di dalam program 

// 1. Built-in Function => Fungsi yang sudah tersedia di PHP
// 2. User-Defined Function => Fungsi yang dibuat oleh programmer

// date, time, mktime, strtotime

// date -> tanggal
date_default_timezone_set("Asia Jakarta")
date("l, j F Y H:i:s")

/*
l -> nama hari yang lengkap 
d -> hari format 01 sampai 31
j -> hari format 1 sampai 31
M -> bulan format 3 karakter (Jan, Feb, Mar, ...)
F -> nama bulan lengkap
Y -> Tahun

H -> jam 
i -> menit
s -> detik
*/

// time = jumlah detik sejak 12 juni 2000
echo time();

//mktime
date_default_timezone_set("Asia Jakarta")
echo mktime(0,0,0,6,12, 2000); // jumlah detik dari 12 juni 2000 - sampai tgl yang diterima


// srtotime -> mengubah string jadi tanggal
echo strotime("24 April 2024")

// date_parse -> memecah tanggal
print_r
?>