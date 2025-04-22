<?php
echo "1. Menghitung umur\n";
$tahun_lahir = 2005;
$tahun_sekarang = 2025;
$umur = $tahun_sekarang - $tahun_lahir;
echo "<br>";
echo "-Umur anda adalah: $umur tahun\n\n";

echo "<br>";
echo "<br>";

echo "2. Mengkonversi mata uang USD ke IDR\n";
$usd = 100;
$kurs = 15500; // Kurs USD ke IDR
$idr = $usd * $kurs;
echo "<br>";
echo "-Hasil: ";
echo "$usd USDollar = Rp. $idr\n\n";

echo "<br>";
echo "<br>";

echo "3. Mengkonversi suhu Celcius ke Fahrenheit\n";
$celcius = 30;
$fahrenheit = ($celcius * 9/5) + 32;
echo "<br>";
echo "-Hasil : $celcius °C = $fahrenheit °F\n\n";

echo "<br>";
echo "<br>";

echo "4. Menghitung luas lingkaran\n";
$jari_jari = 7;
$luas = pi() * pow($jari_jari, 2);
echo "<br>";
echo "-Luas lingkaran dengan jari-jari $jari_jari cm adalah: $luas cm²\n\n";

echo "<br>";
echo "<br>";

echo "5. Menampilkan list perkalian 1 s/d 5<br>";
for ($i = 1; $i <= 5; $i++) {
    echo "Perkalian $i:\n";
    for ($j = 1; $j <= 10; $j++) {
        echo "$i x $j = " . ($i * $j) . "\n" . "~";
    }
    echo "<br>";
}
?>
