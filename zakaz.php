<?php

$name = stripslashes(htmlspecialchars($_POST['name']));
$phone = stripslashes(htmlspecialchars($_POST['phone']));
$country = 'UA';

$product_price = stripslashes(htmlspecialchars($_POST['s1']));
$product_id = stripslashes(htmlspecialchars($_POST['s2']));
$product_name = stripslashes(htmlspecialchars($_POST['s3']));


if (stripslashes(htmlspecialchars($_POST['country']))) {
    $country = stripslashes(htmlspecialchars($_POST['country']));
}

$subject = 'Заказ товара - ' . $product_name;
$addressat = "02victory05@gmail.com";

$success_url = "/form-ok.php?name=$name&phone=$phone&country=$country&product_price=$product_price&product_id=$product_id&product_name=$product_name&email=$email";
$message = "ФИО: {$name}\nКонтактный телефон: {$phone}";


$sendMail = mail($addressat, $subject, $message, "Content-type:text/plain;charset=utf-8\r\n");
if($sendMail){
    header('Location: ' . $success_url);
} else {
    echo '<h1 style="color:green;">Ошибка!</h1>';
}


exit;