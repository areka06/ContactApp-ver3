<!-- require_once 'contact.php';
$res_delete = Contact::delete('1006');
// echo "Delete result: ";
// echo $res_delete ? "Success" : "Failed"; -->
<?php
require_once 'contact.php';

// Periksa apakah parameter 'id' telah diteruskan
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Hapus data berdasarkan ID yang diteruskan
    $res_delete = Contact::delete($id);

    // Jika penghapusan berhasil, arahkan kembali ke halaman dashboard
    if ($res_delete) {
        header("Location: dashboard.php");
        exit(); // Pastikan untuk keluar dari skrip PHP setelah mengarahkan pengguna
    }
} else {
    // Jika tidak ada parameter 'id' yang diteruskan, tampilkan pesan kesalahan atau tindakan yang sesuai
    echo "ID not provided";
}
?>

