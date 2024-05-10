<?php
include 'env.php';
// var_dump($_ENV);
$url = $_SERVER['REQUEST_URI'];
$dirName =  'contactappp';
$url = implode("/",
                array_filter(
                    explode("/",
                        str_replace($dirName, "",
                            parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
                        )
                    ),'strlen'
                )
            );
// var_dump($url);

switch ($url) {
    case 'login':
        include 'view/auth_page/login.php';
            break;
    case 'register':
        include 'view/auth_page/register.php';
                break;
    case 'dashboard':
        include 'view/dash_page/dashboard.php';
                break;
    case 'contact' :
        include 'model/contact.php';
    default:
        echo '<h1>Homepage<h1>';
}
// var_dump($_SERVER['REQUEST_URI']);



// switch ($url) {
//     case '/contactappp/login':
//         include 'view/auth_page/login.php';
//         break;
//     case '/contactappp/register':
//         include 'view/auth_page/register.php';
//         break;
//     default:
//         echo '<h1>Homepage<h1>';
// }