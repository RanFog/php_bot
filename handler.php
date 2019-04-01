
<?php
include 'settings.php';
include 'manage.php';
include 'sys/system.php';

 $preload_text = bot_manager($message, $chat_id);	
//---------------------------------------------
  sendMessage($chat_id, $preload_text);
?>

