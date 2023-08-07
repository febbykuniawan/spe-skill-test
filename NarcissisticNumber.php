<?php
function isNarcissistic($number) {
    // Mengubah angka menjadi string untuk mendapatkan jumlah digit
    $numStr = (string)$number;
    $numDigits = strlen($numStr);

    // Inisialisasi variabel untuk menyimpan jumlah pangkat dari digit masing-masing angka
    $sum = 0;

    // Melakukan perulangan untuk menghitung jumlah pangkat digit masing-masing angka
    for ($i = 0; $i < $numDigits; $i++) {
        // Mengambil satu digit angka pada posisi saat ini
        $digit = (int)$numStr[$i];

        // Menghitung pangkat digit dan menambahkannya ke variabel sum
        $sum = $sum + pow($digit, $numDigits);
    }
    
    // Memeriksa apakah jumlah pangkat digit sama dengan angka asli
    return $sum === $number;
}

// Contoh penggunaan
echo isNarcissistic(1634) ? 'true' : 'false'; // Output: true
echo isNarcissistic(153) ? 'true' : 'false'; // Output: true
echo isNarcissistic(111) ? 'true' : 'false'; // Output: false

?>