<?php

function blueOcean($list1, $list2) {
    // Menghapus nilai-nilai dari $list1 yang ada di $list2 menggunakan fungsi array_diff().
    $result = array_diff($list1, $list2);
    
    // Mengembalikan hasil pengurangan dalam bentuk array.
    return $result;
}

// Contoh 1
$list1_example1 = [1, 2, 3, 4, 6, 10];
$list2_example1 = [1];
$result_example1 = blueOcean($list1_example1, $list2_example1);
// Menampilkan hasil contoh 1 menggunakan print_r().
// Hasilnya adalah: Array ( [1] => 2 [2] => 3 [3] => 4 [4] => 6 [5] => 10 )
print_r($result_example1);

// Contoh 2
$list1_example2 = [1, 5, 5, 5, 5, 3];
$list2_example2 = [5];
$result_example2 = blueOcean($list1_example2, $list2_example2);
// Menampilkan hasil contoh 2 menggunakan print_r().
// Hasilnya adalah: Array ( [0] => 1 [4] => 3 )
print_r($result_example2);

?>