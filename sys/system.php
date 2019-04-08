<?php
//Здесь описаны системные для тг-бота функции
$api = 'https://api.telegram.org/bot' . $access_token; //Генерация начала строки ответа

//Раздербанивание полученного json сообщения по переменным
$output = json_decode(file_get_contents('php://input'), TRUE);
$chat_id = $output['message']['chat']['id'];
$first_name = $output['message']['chat']['first_name'];
$message = $output['message']['text'];
$user_id = $output['message']['from']['id'];

//Функции для ответов
function sendMessage($chat_id, $message) //Функция ответа сообщением
 {
 file_get_contents($GLOBALS['api'] . '/sendMessage?chat_id=' . $chat_id . '&text=' . urlencode($message));
 }
function sendPhoto($chat_id, $file_id) //Функция ответа сообщением
 {
 file_get_contents($GLOBALS['api'] . '/sendPhoto?chat_id=' . $chat_id . '&photo=' . $file_id);
 }
 ?>