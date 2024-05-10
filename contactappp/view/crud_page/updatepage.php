<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/contactappp/model/contact.php';
// var_dump($arr['ID']);
$arr = Contact::select();
// Menerima ID dari URL
$id = $_GET['id'];

// Mengambil data kontak berdasarkan ID
$contact = Contact::selectByID($id);

// Memeriksa apakah kontak ditemukan
if (!$contact) {
    // Jika kontak tidak ditemukan, lakukan penanganan kesalahan di sini
    // Misalnya, tampilkan pesan kesalahan atau redirect ke halaman lain
    echo "Kontak tidak ditemukan";
    exit;
}

// Nilai-nilai default untuk formulir
$ID = $contact['ID'];
$No_Hp = $contact['No_Hp'];
$Owner = $contact['Owner'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Manager</title>
    <!-- boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- css -->
    <link rel="stylesheet" href="/contactappp/view/crud_page/insertpage.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <!-- Sidebar -->
    <section class="sidebar">
        <a href="dashboard" class="brand">
            <span class="icon">
                <i class='bx bxs-comment-dots'></i>
                <span class="text">Aplikasi Kontak</span>
            </span>
        </a>
        <ul class="side-menu top">
            <li class="active">
                <a href="dashboard">
                    <i class='bx bxs-dashboard'></i>
                    <span class="text">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-user'></i>
                    <span class="text">User</span>
                </a>
            </li>
        </ul>
        <a href="Login.php"><button type="submit" class="logout">Logout</button></a>
    </section>
    <!-- Sidebar -->
    <!-- Content -->
    <section class="content">
        <!-- Main -->
        <main>
            <!-- Head -->
            <div class="head-title">
                <div class="left">
                    <h1>Dashboard</h1>
                    <ul class="breadcumb">
                        <li>
                            <a href="dashboard">Aplikasi Kontak</a>
                        </li>
                        <li>
                            <i class='bx bx-chevron-right'></i>
                        </li>
                        <li>
                            <a href="#">Update</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Head -->

            <!-- Board -->
            <h2>Edit Data Contact ID <?php echo $ID; ?></h2>
            <form action="update?action=update" method="post">
                <!-- <label for="ID">ID:</label><br> -->
                <!-- Tampilkan ID yang diperoleh dari database -->
                <input type="text" id="ID" name="ID" value="<?php echo $ID; ?>" style="visibility:hidden;"><br>
                <label for="No_Hp">Phone Number:</label><br>
                <!-- Tampilkan nomor HP yang diperoleh dari database -->
                <input type="text" id="No_Hp" name="No_Hp" value="<?php echo $No_Hp; ?>"><br>
                <label for="Owner">Owner:</label><br>
                <!-- Tampilkan pemilik yang diperoleh dari database -->
                <input type="text" id="Owner" name="Owner" value="<?php echo $Owner; ?>"><br><br>
                <input type="submit" value="Submit">
            </form>
        </main>
        <!-- Main -->
    </section>
</body>

</html>