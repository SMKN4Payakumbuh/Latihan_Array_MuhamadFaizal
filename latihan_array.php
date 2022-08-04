<?php

$uang = (int)readline("masukkan besar uang : ");
$angka = [100000, 50000, 20000, 10000, 5000, 2000, 1000, 500, 200, 100, 50, 10, 1];

echo "besar uang = rp." . $uang . "\n";

for ($i = 0; $i < count($angka); $i++) {

  if ($uang % $angka[$i]) {
    echo "jumlah uang rp." . $angka[$i] . " : " . floor($uang / $angka[$i]) . "\n";
    $uang = $uang % $angka[$i];
  }
}
