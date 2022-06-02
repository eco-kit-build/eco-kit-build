<?
$name = @ trim ($_POST['name']);
$email = @ trim ($_POST['email']);
$message = @ trim ($_POST['message']);
mail ("000333555666@mail.ru",
      "Новое сообщение с сайта (от : $name)",
      " Имя:$name \n Email:$email \n Телефон: $message",
      "Content-type:text/plain; charset=utf-8");
header ("Location: http://трутрутру.ru/");
?>
