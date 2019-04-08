
<?php
//Главный скрипт - вызывается при поступлении сообщения от телеги
include 'settings.php';   //Добавить файл с токеном бота
include 'manage.php';     //Главный менеджер - ищет команду в сообщении
include 'sys/system.php'; //Подготавливает ответ и раздербанивает json
include 'log.php';        //Ведение лога

wr_input_mess_to_logs ($chat_id, $username, $user_id, $message); //Писать логи входящих сообщений
$preload_text = bot_manager ($message, $chat_id, $user_id);	
//---------------------------------------------K
sendMessage ($chat_id, $preload_text);
?>

