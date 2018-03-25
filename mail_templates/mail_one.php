<?php
$f = new \classes\Form();
$msg = '';

$msg .= '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <title>TFSM your form data is below</title>
</head>
<body>
<div style="width: 640px; font-family: Arial, Helvetica, sans-serif; font-size: 11px;">
    <h1>This mail was sent with PHPMailer.</h1>
';

$msg .= "<p>You name: ". $f->username ."</p>";
$msg .= "<p>You last name: ". $f->usersurname ."</p>";
$msg .= "<p>You email: ". $f->email ."</p>";
$msg .= "<p>You comment: ". $f->comment ."</p>";



$msg .= '<p>You file is attache to this mail.</p>
        </div>
        </body>
        </html>';


return $msg ;
