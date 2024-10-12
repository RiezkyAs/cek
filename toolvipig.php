<?php
// Mengambil isi file dari URL
$url = 'https://vipig.net/tool/toolvipig.txt';
$content = file_get_contents($url);

// Memeriksa apakah konten berhasil diambil
if ($content !== false) {
    // Menampilkan isi file
    echo "<pre>"; // Menggunakan <pre> untuk menjaga format asli
    echo htmlspecialchars($content); // Menampilkan isi dengan karakter yang di-escape untuk keamanan
    echo "</pre>";
} else {
    echo "Gagal mengambil isi dari URL.";
}
?>


