<?php
session_start();
require_once '../Dao.php';
$dao = new Dao();

$nick = $_SESSION['username'];
$title = $_POST['title'];
$type = $_POST['promo_type'];
$description = $_POST['promo_description'];
$text = $_POST['promo_text'];

echo $title;
echo $type;
echo $description;
echo $text;

// new promo($title, $description, $text);
$dao->addPromotion($nick, $type, $title, $description, $text);

// header('location: ../home.php');
// exit;