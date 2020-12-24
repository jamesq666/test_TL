<?php

$jsonFilePath = __DIR__ . '/include/jsonList.json';

if (!file_exists($jsonFilePath)) {
    echo 'Файл не найден!';
    exit;
} else {
    $jsonFileContent = file_get_contents($jsonFilePath);
    $data = json_decode($jsonFileContent, true);
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Список заказов</title>
    <link href="/include/style.css" rel="stylesheet">
</head>
<body>
    <table>
        <tr>
            <td class="col1">Имя</td>
            <td class="col1">Телефон</td>
            <td class="col2">Адрес</td>
        </tr>
        <?php foreach ($data as $value) { ?>
            <tr>
                <td class="col1"><?= $value['name']; ?></td>
                <td class="col1"><?= $value['phone']; ?></td>
                <td class="col2"><?= $value['adress']; ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
