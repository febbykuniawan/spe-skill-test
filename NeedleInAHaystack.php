<?php

function findNeedle($haystack, $needle) {
    // Perulangan setiap kata di dalam array $haystack
    foreach ($haystack as $index => $word) {
        // Periksa apakah kata pada indeks ini sama dengan kata yang dicari (needle)
        if ($word === $needle) {
            // Jika ditemukan, kembalikan indeks kata yang cocok sebagai hasil
            return $index;
        }
    }
    // Jika kata yang dicari (needle) tidak ditemukan di dalam array (haystack),
    // kembalikan -1 sebagai indikasi bahwa kata tersebut tidak ada di dalam array.
    return -1;
}

// Contoh penggunaan fungsi:
$haystack = ["red", "blue", "yellow", "black", "grey"];
$needle = "blue";
$result = findNeedle($haystack, $needle);

// Tampilkan hasil pencarian indeks kata yang dicari (needle)
echo "The index of the needle '{$needle}' is: " . $result;

?>