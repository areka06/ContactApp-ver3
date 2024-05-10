<?php
require_once 'contact.php';
$res_update = Contact::update('1006', '081234567890', 'John');
echo "Update result: ";
echo $res_update ? "Success" : "Failed";
echo "<br>";
?>
