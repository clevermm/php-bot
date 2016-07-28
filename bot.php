<?php
include("Telegram.php");
$bot_id = "259102392:AAHie2NBduaz8uRXQMoOSSPiekJDaRqoGDQ";
$telegram = new Telegram($bot_id);
$chat_id = $telegram->ChatID();
$text = $telegram->Text();
if($text == "/start") {
  $ak47 = file_get_contents('./ak.txt', FILE_USE_INCLUDE_PATH);
  $content = array('chat_id' => $chat_id, 'text' => $ak47);
$telegram->sendMessage($content);
}