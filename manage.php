<?php
//Файл менеджер - распознает команды и запускает сооветсвующие скрипты
include 'Auth/Auth.php';	   //Файл авторизации
include 'tfcommands/text.php'; //Файл с текстами команд
include 'UO/UO.php';           //Команды умного одногруппника
//include 'ip.php';

function bot_manager($message, $chat_id, $user_id)
    {
	//Понижение регистра
	$mess = strtolower($message);

	switch (Auth($user_id))
		{
		case 'root':
			if ($mess[0] == "/")
				{
				//----- Обязательные команды -- help и start
   	 	        if (substr($mess,1,4) == "help") return TBHELP_ROOT;
 		        if (substr($mess,1,5) == "start") return TBSTART;
			    //----- CCNA_BOT ----
			    if (substr($mess,1,5) == "proxy") return TBPROXY;
			    if (substr($mess,1,3) == "ip") return TBIPI;
			    //----- Умный одногруппник -----
			    if (substr($mess,1,4) == "rasp") raspisan($chat_id);
			    //----- Команды помошники -----
			    if (substr($mess,1,7) == "chat_id") sendMessage($chat_id, $chat_id);
			    if (substr($mess,1,7) == "user_id") sendMessage($chat_id, $user_id);
				if (substr($mess,1,9) == "headgroup") sendMessage($chat_id, "Владимир Скрылев, @Vladimir_Skrylev +7 (985) 614-20-19");
				break;
			    }
		case 'student':
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
		   	    if (substr($mess,1,7) == "user_id") sendMessage($chat_id, $user_id);
		  	    if (substr($mess,1,9) == "headgroup") sendMessage($id_chat, $chat_id);
				if (substr($mess,1,9) == "headgroup") sendMessage($chat_id, "Владимир Скрылев, @Vladimir_Skrylev +7 (985) 614-20-19");
				break;
				}
		default: break;
		}
	}
?>



















