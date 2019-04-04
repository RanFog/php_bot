<?php
include 'Auth_ID.php';
//$user_id = '244541436'; //Тест
//echo Auth($user_id);    //Тест

function Auth($user_id)
    {
    foreach (ROOT as $i) //ROOT - группа пользователей, прописывается в Auth_ID.php
        if ($user_id == $i) return "root";
 /* Так задавать новые группы:
    foreach (***имя группы*** as $i)
        if ($user_id == $i) return "***имя группы***";
*/

    return "student";
    }
?>