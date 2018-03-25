<?php
define('__ROOT__', dirname(__FILE__));

require_once __ROOT__.'/inc/config.php';

global $config;


require_once __DIR__.'/classes/PHPMailer.php';
require_once __DIR__.'/classes/Exception.php';
require_once __DIR__.'/classes/SMTP.php';
require_once __DIR__.'/classes/JustSendMail.php';

require_once __ROOT__.'/classes/FileUpload.php';
require_once __ROOT__.'/models/Form.php';
require_once __ROOT__.'/classes/Form.php';

