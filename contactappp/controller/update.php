<?php
// Sertakan skrip kontak
require_once $_SERVER['DOCUMENT_ROOT'] . '/contactappp/model/contact.php';

// Periksa apakah permintaan datang dari formulir pembaruan
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_GET['action']) && $_GET['action'] == 'update') {
    // Ambil nilai dari formulir
    $ID = $_POST['ID'];
    $No_Hp = $_POST['No_Hp'];
    $Owner = $_POST['Owner'];

    // Panggil metode update dari kelas Contact
    $res_update = Contact::update($ID, $No_Hp, $Owner);

    // Tampilkan hasilnya kepada pengguna
    echo "Update result: ";
    echo $res_update ? "Success" : "Failed";
    echo "<br>";

    // Periksa hasil operasi pembaruan
    if ($res_update) {
        // Redirect ke halaman dashboard setelah pembaruan berhasil
        header("Location: dashboard");
        exit();
    } else {
        echo "Gagal memperbarui data.";
        header("Location: dashboard");
        exit();
    }
}
?>
