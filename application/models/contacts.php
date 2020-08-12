<?php
session_start();
include "includes/lib.php";
$link = connection();
function add_to_sql($link, $author, $email, $phone, $text)
{
    $sql = "INSERT INTO `request`(`id`, `name`, `email`, `tel`, `request`) VALUES (NULL,'$author','$email','$phone','$text')";
    $result = mysqli_query($link, $sql);
    if ($result != false) {
        $_SESSION['flag'] = 1;
    }
}

?>
