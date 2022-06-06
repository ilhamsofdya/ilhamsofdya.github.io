<?php
$path = "https://api.telegram.org/bot5355398612:AAHtMgc6a-0gGR4U4uByVYU13a3rQqbe03k;

$update = json_decode(file_get_contents("php://input"), TRUE);

$chatId = $update["message"]["chat"]["id"];
$message = $update["message"]["text"];

if (strpos($message, "/weather") === 0) {
$location = substr($message, 9);
$weather = "Iya";
file_get_contents($path."/sendmessage?chat_id=".$chatId."&text=Here's the weather in ".$location.": ". $weather);
}
?>
