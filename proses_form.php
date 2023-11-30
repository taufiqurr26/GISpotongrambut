<?php
// Proses formulir saat metode POST digunakan
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pastikan data kategori dikirimkan melalui formulir
    if (isset($_POST["kategori"])) {
        $selectedCategory = $_POST["kategori"];

        // Handle berbagai kategori yang mungkin
        switch ($selectedCategory) {
            case "all":
                // Logika untuk kategori "All"
                echo "Menampilkan semua data...";
                break;

            case "biasa":
                // Logika untuk kategori "Biasa"
                echo "Menampilkan data kategori Biasa...";
                break;

            case "mewah":
                // Logika untuk kategori "Mewah"
                echo "Menampilkan data kategori Mewah...";
                break;

            default:
                // Kategori tidak valid, mungkin hendak ditangani sesuai kebutuhan
                echo "Kategori tidak valid.";
                break;
        }
    } else {
        // Kategori tidak dikirimkan, mungkin hendak ditangani sesuai kebutuhan
        echo "Kategori tidak dikirimkan.";
    }
} else {
    // Metode selain POST, mungkin hendak ditangani sesuai kebutuhan
    echo "Metode selain POST tidak diizinkan.";
}
?>
