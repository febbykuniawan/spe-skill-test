<?php

function findOutlier($arr) {
    $oddNumbers = [];
    $evenNumbers = [];

    // Pisahkan angka-angka ganjil dan genap ke dalam dua array terpisah
    foreach ($arr as $number) {
        if ($number % 2 === 0) {
            $evenNumbers[] = $number;
        } else {
            $oddNumbers[] = $number;
        }
    }

    // Kembalikan outlier berdasarkan jumlah elemen dalam array yang sesuai dengan kriteria
    if (count($oddNumbers) === 1) {
        return $oddNumbers[0]; // Return angka ganjil jika jumlah angka ganjil adalah 1
    } elseif (count($evenNumbers) === 1) {
        return $evenNumbers[0]; // Return angka genap jika jumlah angka genap adalah 1
    } else {
        return false; // Return false jika tidak ada outlier
    }
}

// Contoh penggunaan fungsi dengan input dari challenge
$example1 = [2, 4, 0, 100, 4, 11, 2602, 36];
$example2 = [160, 3, 1719, 19, 11, 13, -21];
$example3 = [11, 13, 15, 19, 9, 13, -21];

$result1 = findOutlier($example1);
$result2 = findOutlier($example2);
$result3 = findOutlier($example3);

echo "Hasil 1: " . ($result1 !== false ? $result1 : "false") . "\n";
echo "Hasil 2: " . ($result2 !== false ? $result2 : "false") . "\n";
echo "Hasil 3: " . ($result3 !== false ? $result3 : "false") . "\n";

?>