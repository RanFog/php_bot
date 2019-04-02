//Файл менеджер - распознает команды и запускает сооветсвующие скрипты
<?php
include 'tfcommands/text.php'; //Файл с текстами команд
include 'UO/UO.php';           //Команды умного одногруппника
//include 'ip.php';

function bot_manager($message, $chat_id)
        {
	//Понижение регистра
	$mess = strtolower($message);
	//Менеджер
	if ($mess[0] == "/")
		{
		//----- Обязательные команды -- help и start
                if (substr($mess,1,4) == "help") return TBHELP;
                if (substr($mess,1,5) == "start") return TBSTART;
		//----- CCNA_BOT ----
		if (substr($mess,1,5) == "proxy") return TBPROXY;
		if (substr($mess,1,3) == "ip") return TBIPI;
		//----- Умный одногруппник -----
		if (substr($mess,1,4) == "rasp") raspisan($chat_id);
		//----- Команды помошники -----
		if (substr($mess,1,7) == "chat_id") sendMessage($chat_id, $chat_id);
		if (substr($mess1,4) == "староста") sendMessage($id_chat, "Володя Скрылев, @Vladimir_Skrylev +7 (985) 614-20-19");
		}
	}
?>



















