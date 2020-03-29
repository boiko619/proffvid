<?php

$post = (!empty($_POST)) ? true : false;

if($post)
{

$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['mail']);
$tel = htmlspecialchars($_POST["tel"]);
$utm_source = htmlspecialchars($_POST["utm_source"]);
$utm_replace = htmlspecialchars($_POST["utm_replace"]);

$error = '';




$name_tema = "=?utf-8?b?". base64_encode($name) ."?=";

$subject ="Новая заявка с сайта Gazprom";
$subject1 = "=?utf-8?b?". base64_encode($subject) ."?=";
/*
$message ="\n\nСообщение: ".$message."\n\nИмя: " .$name."\n\nТелефон: ".$tel."\n\n";
*/
$message1 ="\n" .$utm_source. "\n"  .$utm_replace. "\nИмя: ".$name."\n\nТелефон: " .$tel."\n\nE-mail: " .$email."\n\n";	

$message2 =  iconv ('utf-8', 'windows-1251', $message1);

$header = "Content-Type: text/plain; charset=utf-8\n";

//$header .= "From: Новая заявка <boikovladislav12@gmail.com>\n\n";	
$mail = mail("mbmleads2019@gmail.com", $subject1,iconv ('utf-8', 'windows-1251', $message1), iconv ('utf-8', 'windows-1251', $header));

if($mail)
{
echo 'OK';
}


//$message=iconv("UTF-8", "windows-1251", $message);


}
?>