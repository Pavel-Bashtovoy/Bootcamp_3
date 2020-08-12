<?php
require "application/models/contacts.php";

if (!empty($_POST['feedback-author']) && !empty($_POST['email']) && !empty($_POST['feedback-text'])) {
    $author = $_POST['feedback-author'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $text = $_POST['feedback-text'];
    add_to_sql($link, $author, $email, $phone, $text);
}


include "application/views/contacts.php";
?>
