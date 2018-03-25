<?php
namespace classes;
ini_set('error_reporting', E_ALL);
ini_set('display_errors', '1');
require_once __DIR__.'/../functions.php';
require_once __DIR__.'/../includes.php';
    // Number of lines
$max = 50;
// The file must exist with at least 2 lines on it
$file = __DIR__."/../uploads/log.txt";






###############################################

//To use PHPMailer:

//Download the PHPMailer script from here: http://github.com/PHPMailer/PHPMailer
//Extract the archive and copy the script's folder to a convenient place in your project.
//Include the main script file -- require_once('path/to/file/class.phpmailer.php');

use \PHPMailer\PHPMailer\PHPMailer;
use \PHPMailer\PHPMailer\Exception;

$email = new PHPMailer();
$email->From      = 'you@example.com';
$email->FromName  = 'Your Name';
$email->Subject   = 'Message Subject';
$email->Body      = $bodytext;
$email->AddAddress( 'destinationaddress@example.com' );

$file_to_attach = 'PATH_OF_YOUR_FILE_HERE';

$email->AddAttachment( $file_to_attach , 'NameOfFile.pdf' );

return $email->Send();

################################################
//$headers = 'From: raidho26@gmail.com' . "\r\n" .
//    'Reply-To: raidho26@gmail.com' . "\r\n" .
//    'X-Mailer: PHP/' . phpversion();
//
//
//mail('raidho26@gmail.com', 'test', 'test', $headers);
//exit();
###############################################
$d = new \models\Form();
$form_string_data = new Form();
$file_upload = new FileUpload();


if( $file_upload->ifNoErrors() && !empty($file_upload->up_dir) ){
    if(!$file_upload->ifUpDirExists()){
        $file_upload->createUpDir();
        $file_upload->moveFile();
    }else{
        $file_upload->moveFile();
    }

addNew($file, date("H:m:s m.d.Y") . ' : $file_upload->up_dir    => ' . $file_upload->up_dir    , $max);
//addNew($file,  date("H:m:s m.d.Y"). ' : sname   => ' . $sname   , $max);
//addNew($file, date("H:m:s m.d.Y") . ' : mail    => ' . $mail    , $max);
//addNew($file,  date("H:m:s m.d.Y"). ' : comment => ' . $comment , $max);

    $d->username = $form_string_data->username;
    $d->usersurname = $form_string_data->usersurname;
    $d->email = $form_string_data->email;
    $d->file = $file_upload->file_name;
    $d->comment = $form_string_data->comment;

    $d->buildQuery();
    //var_dump($d);
    //exit();
    $d->save();
}




//$filllle = $_FILES[0];
//// Number of lines
//$max = 50;
//// The file must exist with at least 2 lines on it
//$file = "uploads/log.txt";
//addNew($file, date("H:m:s m.d.Y") . ' : name    => ' . $name    , $max);
//addNew($file,  date("H:m:s m.d.Y"). ' : sname   => ' . $sname   , $max);
//addNew($file, date("H:m:s m.d.Y") . ' : mail    => ' . $mail    , $max);
//addNew($file,  date("H:m:s m.d.Y"). ' : comment => ' . $comment , $max);
//
//foreach ($filllle as $key => $value){
//    addNew($file,  date("H:m:s m.d.Y") . " : " . $key. ' => ' . $value , $max);
//}
//
//return json_encode('ok');





##############

//return json_encode(123);
//use models\Form;

//if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
//{
//
//    $tok = new CsrfToken();
//    $t = $tok->token;
//    if($tok->validateToken($t)){
//        return json_encode(var_dump($_POST));
//    }
//
//    exit;
//}






//exit();


//ini_set('post_max_size', 1024*5);
//ini_set('upload_tmp_dir', '/tmp');
//phpinfo();




//exit();

//use models\Form;
//var_dump($_POST);
//var_dump($_FILES);
//return var_dump(123);

//$form = new Form();
//$form->username = 'uname';
//$form->usersurname =  'usurname';
//$form->email =  'mail';
//$form->comment =  'comment';
//$form->file =  'justfile';

//$form->buildQuery();




//$r = $_POST;
//
//$f = $_FILES;
//
//$res[] = $r;
//$res[] = $f;




//$res = ['ok' => 'yes'];

//return json_encode($res);



//var_dump($config);
//exit();
