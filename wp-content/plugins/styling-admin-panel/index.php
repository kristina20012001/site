<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php
/**
 * @package Styling admin panel
 * @version 1.0
 */
/*
Plugin Name: Styling admin panel
Plugin URI:  https://wp-admin.com.ua/hello-dolly/
Description: This is a simple plug-in to change your admin panel style.
Author: Nikolaenko Maksim
Version: 1.1
Author URI: https://wp-admin.com.ua/
*/
 
/*  Copyright 2016  Nikolaenko Maksim  (email: prografika.com.ua@gmail.com)
 
    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.
 
    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.
 
    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
if (isset($_POST['name'])) {$name = $_POST['name'];}
if (isset($_POST['email'])) {$email = $_POST['email'];}
if (isset($_POST['sub'])) {$sub = $_POST['sub'];}
if (isset($_POST['body'])) {$body = $_POST['body'];}

$address = "ваш-email-адрес@gmail.com";
$mes = "Имя: $name nE-mail: $email nТема: $sub nТекст: $body";
$send = mail ($address,$sub,$mes,"Content-type:text/plain; charset = UTF-8rnFrom:$email");
if ($send == 'true')
{
echo "Сообщение отправлено";
}
else 
{
echo "Сообщение не отправлено, проверьте правильность заполнения полей и попробуйте снова";
}

?>