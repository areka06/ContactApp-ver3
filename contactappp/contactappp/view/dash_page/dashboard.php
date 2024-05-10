<?php
require_once $_SERVER['DOCUMENT_ROOT']. '/contactappp/model/contact.php';
// var_dump($arr['ID']);
$arr = Contact::select();
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
    <link rel="stylesheet" href="/contactappp/view/dash_page/styleee.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <!-- Sidebar -->
    <section class="sidebar">
        <a href="#" class="brand">
            <span class="icon">
                <i class='bx bxs-comment-dots'></i>
                <span class="text">Aplikasi Kontak</span>
            </span>
        </a>
        <ul class="side-menu top">
            <li class="active">
                <a href="#">
                    <i class='bx bxs-dashboard' ></i>
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
                            <a href="#">Aplikasi Kontak</a>
                        </li>
                        <li>
                            <i class='bx bx-chevron-right'></i>
                        </li>
                        <li>
                            <a href="#">Dashboard</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Head -->

            <!-- Board -->
            <div class="board">
                <table width="100%">
                    <thead>
                        <tr>
                            <td>NO</td>
                            <td>ID</td>
                            <td>Phone Number</td>
                            <td>Owner</td>
                            <td class="actions">Actions
                                <button class="add">
                                    <a href="insert.php">
                                        Add
                                </button>
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        for ( $i = 0; $i < count($arr['ID']); $i++ ){
                    ?>
                            <tr>
                                <td> <?= $i ?> </td>
                                <td> <?= $arr['ID'][$i] ?> </td>
                                <td> <?= $arr['No_Hp'][$i] ?> </td>
                                <td> <?= $arr['Owner'][$i] ?> </td>
                                <td class="actions-button">
                                    <div><a href="#">Edit</a></div>
                                    <div class="duta">
                                        <a href="delete.php?id=<?= $arr['ID'][$i] ?>" >Delete</a>
                                    </div>
                                </td>
                            </tr>
                    <?php
                        }   
                    ?>
                        <!-- <tr>
                            <td>02</td>
                            <td>088757999788</td>
                            <td>Jeong Jungkook</td>
                            <td class="edit">
                                <a href="#">Edit</a>
                            </td>
                            <td class="delete">
                                <a href="#">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>03</td>
                            <td>087789679008</td>
                            <td>Park Jimin</td>
                            <td class="edit">
                                <a href="#">Edit</a>
                            </td>
                            <td class="delete">
                                <a href="#">Delete</a>
                            </td>
                        </tr> -->
                    </tbody>
                </table>
            </div>
        </main>
        <!-- Main -->
    </section>
</body>
</html>
