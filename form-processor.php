<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', '1');

require_once __DIR__.'/includes.php';
use models\Form;
//var_dump($_POST);
//return var_dump(123);

$form = new Form();
$form->username = 'uname';
$form->usersurname =  'usurname';
$form->email =  'mail';
$form->comment =  'comment';
$form->file =  'justfile';

$form->buildQuery();
var_dump($form->query);
exit();
