<?php

if (empty($_POST['name']) || empty($_POST['phone']) || empty($_POST['adress'])) {
    $answer = 'Ваш заказ не принят!';
} else {
    $jsonFilePath = __DIR__ . '/jsonList.json';

    $jsonFile = fopen($jsonFilePath, 'c+');

    $jsonFileContent = file_get_contents($jsonFilePath);
    $data = json_decode($jsonFileContent, true);

    $order = [
            'name' => $_POST['name'],
            'phone' => $_POST['phone'],
            'adress' => $_POST['country'] . ', ' . $_POST['adress'],
            ];

    $data[] = $order;

    fwrite($jsonFile, json_encode($data, JSON_UNESCAPED_UNICODE));
    fclose($jsonFile);
    $answer = 'Ваш заказ принят!';
}

echo json_encode($answer, JSON_UNESCAPED_UNICODE);
