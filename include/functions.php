<?php

/**
* Функция выполняет получение данных из формы и отправляет их с помощью curl методом POST
* @param string $name, $phone, $country, $adress - данные из формы, в формате строк
*/
function cURLCall(string $name, $phone, $country, $adress) {
    if ($curl = curl_init()) {
        curl_setopt($curl, CURLOPT_URL, $_SERVER['SERVER_NAME'] . '/include/writer.php');
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, "name=$name&phone=$phone&country=$country&adress=$adress");
        $out = curl_exec($curl);
        if ($out === false) {
            echo curl_error($curl);
        } else {
            $message = json_decode($out);
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
        curl_close($curl);
    } else {
        echo 'Что-то пошло не так';
    }
}
