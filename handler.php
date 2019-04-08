
<?php
//Главный скрипт - вызывается при поступлении сообщения от телеги
include 'settings.php'; //Добавить файл с токеном бота
include 'manage.php';   //Главный менеджер - ищет команду в сообщении
include 'sys/system.php'; //Подготавливает ответ и раздербанивает json
include 'log.php';   //Ведение лога

 //wr_json_to_logs();
 $preload_text = bot_manager($message, $chat_id, $user_id);	
//---------------------------------------------K
 sendMessage($chat_id, $preload_text);
?>

