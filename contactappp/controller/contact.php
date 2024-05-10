<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/contactappp/model/contact.php';

class ContactController {
    public static function index() {
        $contacts = Contact::select();
        // Proses data atau tampilkan ke view
    }

    public static function create() {
        // Ambil data dari $_POST
        $ID = $_POST['ID'];
        $No_Hp = $_POST['No_Hp'];
        $Owner = $_POST['Owner'];

        // Panggil metode create dalam model
        $result = Contact::insert($ID, $No_Hp, $Owner);

        // Lakukan sesuatu dengan hasilnya, misalnya, tampilkan pesan atau redirect
        if ($result) {
            echo "Data inserted successfully.";
            // Misalnya, jika Anda ingin mengalihkan pengguna setelah berhasil menambahkan data:
            // header("Location: index.php"); // Sesuaikan dengan halaman yang tepat
            // exit();
        } else {
            echo "Failed to insert data.";
        }
    }

    public static function update($ID, $No_Hp, $Owner) {
        $result = Contact::update($ID, $No_Hp, $Owner);
        // Berikan respons atau redirect sesuai kebutuhan
    }

    public static function delete($ID) {
        $result = Contact::delete($ID);
        // Berikan respons atau redirect sesuai kebutuhan
    }
}

// Contoh penggunaan controller:

// Untuk menampilkan semua kontak
// ContactController::index();

// Untuk menambahkan kontak baru
// ContactController::create("new_id", "new_phone", "new_owner");

// Untuk mengupdate kontak
// ContactController::update("existing_id", "updated_phone", "updated_owner");

// Untuk menghapus kontak
// ContactController::delete("existing_id");
?>
