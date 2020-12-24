<?php

include $_SERVER['DOCUMENT_ROOT'] . '/include/functions.php';

if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $country = $_POST['country'];
    $adress = $_POST['adress'];

    cURLCall($name, $phone, $country, $adress);
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Форма заказа</title>
</head>
<body>
    <form method="POST" action="/">
        <p>Ваше имя
        <br>
        <input type="text" name="name">
        <p>Номер телефона в формате 7ХХХХХХХХХХ
        <br>
        <input type="tel" name="phone" pattern="7[0-9]{3}[0-9]{3}[0-9]{2}[0-9]{2}">
        <p>Страна проживания
        <select name="country">
            <option>Россия</option>
            <option>Великобритания</option>
            <option>Индия</option>
        </select>
        <p>Ваш адрес
        <br>
        <input type="text" name="adress" size="50">
        <br>
        <br>
        <input type="submit" name="send" value="Отправить">
    </form>
</body>
</html>
