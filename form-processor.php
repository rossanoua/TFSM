<?php
namespace classes;
ini_set('error_reporting', E_ALL);
ini_set('display_errors', '1');
require_once __DIR__.'/includes.php';
//use models\Form;
$d = new \models\Form();
$d->username = 'nnn3';
$d->usersurname = 'snsnsn3';
$d->email = 'w3@dd.sd';
$d->file = 'sd3.re';
$d->comment = 'sdfwsf3
wefwef3
wefwef3
wefwe3
wef 3
  edef3 edf3 we3.';

$d->buildQuery();
//var_dump($d);
//exit();
$d->save();




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
