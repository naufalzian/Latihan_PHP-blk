<?php
function getDayAfter($jumlahHari) {
    // Menghitung timestamp hari ini
    $timestampHariIni = time();
    
    // Menghitung timestamp hari setelah jumlah hari yang dihitung
    $timestampHariSetelah = $timestampHariIni + ($jumlahHari * 24 * 60 * 60);
    
    // Mendapatkan nama hari dalam bahasa Inggris
    $namaHariInggris = date('l', $timestampHariSetelah);
    
    // Mendapatkan nama hari dalam bahasa Indonesia
    $namaHariIndonesia = translateDayToIndonesian($namaHariInggris);
    
    // Mendapatkan tanggal baru dalam format Y-m-d
    $tanggalSetelah = date('Y-m-d', $timestampHariSetelah);
    
    // Mengembalikan tanggal baru dan nama hari dalam bahasa Indonesia
    return array('tanggal' => $tanggalSetelah, 'hari' => $namaHariIndonesia);
}

 function translateDayToIndonesian($namaHariInggris) {
    
    switch ($namaHariInggris) {
        case 'Monday':
            return 'Senin';
        case 'Tuesday':
            return 'Selasa';
        case 'Wednesday':
            return 'Rabu';
        case 'Thursday':
            return 'Kamis';
        case 'Friday':
            return 'Jumat';
        case 'Saturday':
            return 'Sabtu';
        case 'Sunday':
            return 'Minggu';
        default:
            return "Hari tidak valid";
    }
}

$jumlahHari = 100; 
$hasil = getDayAfter($jumlahHari);
echo "Tanggal setelah $jumlahHari hari adalah: " . $hasil['tanggal']; 
echo "<br>";
echo" Nama hari : " . $hasil['hari'] . ".";
?>