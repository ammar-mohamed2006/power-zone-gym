
<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "project"; // ده اسم قاعدة البيانات اللي ظاهر عندك على الشمال في الصورة

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>