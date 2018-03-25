<?php


namespace classes;
use PHPMailer\PHPMailer\PHPMailer;

class JustSendMail
{

    static $mail;
    public  $attachment;


    public function __construct(){
        global $config;

        $this::$mail = new PHPMailer;
        
        $this::$mail->isSMTP();
        
        $this::$mail->SMTPDebug = 0;
        
        $this::$mail->Host = 'smtp.gmail.com';
        
        $this::$mail->Port = 587;
        
        $this::$mail->SMTPSecure = 'tls';
        
        $this::$mail->SMTPAuth = true;
        
        $this::$mail->Username = $config['smtp_login'];
        
        $this::$mail->Password = $config['smtp_pass'];
        
        $this::$mail->setFrom($config['smtp_login'], $config['Mail_name'] . ' ' . $config['Mail_last_name']);
        

        $this::$mail->addReplyTo($config['smtp_login'], $config['Mail_name'] . ' ' . $config['Mail_last_name']);
        

        $this::$mail->Subject = 'Your TFSM form submitted';
        
    
    }

    public function setMailBody(){
        global $config;

        $this::$mail->msgHTML( include($_SERVER['DOCUMENT_ROOT'].'/'.$config['mail_templates'].'/'.'mail_one.php') );
        
    }

    public function setAttachment(){
        $this::$mail->addAttachment($this->attachment);
    }

    public function send(){
        if (!$this::$mail->send()) {
            return $this::$mail->ErrorInfo;
        } else {
            return true;
        }
    }

}