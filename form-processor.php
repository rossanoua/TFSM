<?php
namespace classes;
//ini_set('error_reporting', E_ALL);
//ini_set('display_errors', '1');
require_once __DIR__.'/functions.php';
require_once __DIR__.'/includes.php';


$name = $_POST['name'];
$sname = $_POST['usersurname'];
$mail = $_POST['email'];
$comment = $_POST['comment'];



//use models\Form;
$d = new \models\Form();
$d->username = $name;
$d->usersurname = $sname;
$d->email = $mail;
$d->file = 'sd3.re';
$d->comment = $comment;

$d->buildQuery();
//var_dump($d);
//exit();
$d->save();


$filllle = $_FILES[0];
// Number of lines
$max = 50;
// The file must exist with at least 2 lines on it
$file = "uploads/log.txt";
addNew($file, date("H:m:s m.d.Y") . ' : name    => ' . $name    , $max);
addNew($file,  date("H:m:s m.d.Y"). ' : sname   => ' . $sname   , $max);
addNew($file, date("H:m:s m.d.Y") . ' : mail    => ' . $mail    , $max);
addNew($file,  date("H:m:s m.d.Y"). ' : comment => ' . $comment , $max);

foreach ($filllle as $key => $value){
    addNew($file,  date("H:m:s m.d.Y") . " : " . $key. ' => ' . $value , $max);
}

return json_encode('ok');





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
