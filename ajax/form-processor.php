<?php
namespace classes;
ini_set('error_reporting', E_ALL);
ini_set('display_errors', '1');

require_once __DIR__.'/../includes.php';




function run(){

//    global $config;
    $response = [];

    $d = new \models\Form();
    $form_string_data = new Form();
    $file_upload = new FileUpload();
    $send_email = new JustSendMail();


    if ($file_upload->ifNoErrors() && !empty($file_upload->up_dir)) {
        if (!$file_upload->ifUpDirExists()) {
            $file_upload->createUpDir();
            $file_upload->moveFile();
        } else {
            $file_upload->moveFile();
        }

        $d->username = $form_string_data->username;
        $d->usersurname = $form_string_data->usersurname;
        $d->email = $form_string_data->email;
        $d->file = $file_upload->file_name;
        $d->comment = $form_string_data->comment;

        $d->buildQuery();
        $d->save();

        $send_email->setMailBody();
        $send_email->attachment = $file_upload->up_dir.'/'.$file_upload->file_name;
        $send_email->setAttachment();
        $send_email::$mail->addAddress($form_string_data->email);
        $send_email->send();
        $response['mail_ErrorInfo'] = $send_email::$mail->ErrorInfo;


        echo json_encode($response);
    }

}

run();
