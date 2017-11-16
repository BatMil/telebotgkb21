<?php 
$output=(file_get_contents('php://input'));
//$id=$output['message']['chat']['id'];
//file_get_contents("https://api.telegram.org/bot492898194:AAE_gQQobpTAK_54TJ74ljpC1Ou1lcH8zNM/sendMessage?chat_id=".$id."&text=i see you");
file_put_contents("logs.txt", $output);
echo $output;
?>
