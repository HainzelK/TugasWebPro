<?php
echo "Hello World\n";
echo "\n";

for ($i = 0; $i < 10; $i++) {
    echo "Hello World\n";
}
echo "\n";

for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        echo "Hello World - $i\n";
    } else {
        echo "Hello World\n";
    }
}
echo "\n";

$bulan = [
    "Januari", "Februari", "Maret", "April", "Mei", "Juni",
    "Juli", "Agustus", "September", "Oktober", "November", "Desember"
];


foreach ($bulan as $b) {
    echo "$b\n";
}
echo "\n";

$hariLibur = [
    "Januari" => "Tahun Baru",
    "Februari" => "Imlek",
    "Maret" => "Nyepi",
    "April" => "Idul Fitri",
    "Mei" => "Waisak",
    "Juni" => "Idul Adha",
    "Juli" => "Muharram",
    "Agustus" => "Hari Kemerdekaan",
    "September" => "Maulid Nabi Muhammad",
    "Oktober" => "Hari Batik",
    "November" => "Diwali",
    "Desember" => "Natal"
];


foreach ($hariLibur as $bulan => $libur) {
    echo "$bulan - $libur\n";
}
echo "\n";

function penjumlahan($a, $b) {
    return $a + $b;
}

function pengurangan($a, $b) {
    return $a - $b;
}

function perkalian($a, $b) {
    return $a * $b;
}

function pembagian($a, $b) {
    if ($b == 0) {
        return "Error: Division by zero";
    }
    return $a / $b;
}

$angka1 = 4;
$angka2 = 9;

echo "Hasil penjumlahan $angka1 dan $angka2 adalah " . penjumlahan($angka1, $angka2) . "\n";
echo "Hasil pengurangan $angka1 dan $angka2 adalah " . pengurangan($angka1, $angka2) . "\n";
echo "Hasil perkalian $angka1 dan $angka2 adalah " . perkalian($angka1, $angka2) . "\n";
echo "Hasil pembagian $angka1 dan $angka2 adalah " . pembagian($angka1, $angka2) . "\n";

?>
