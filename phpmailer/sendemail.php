<?php
require("class.phpmailer.php");
require("class.smtp.php");

function sendemail($rcpt, $sub, $msg)
{
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    // $mail->Host = "mail.yarnlive.com";
    // $mail->Port = 26;
    // $mail->Username = "info@yarnlive.com";
    // $mail->Password = "AdElE25oLLeH21";
    // $mail->SetFrom('info@yarnlive.com', 'YarnLIVE');
    $mail->Host = "mail.1618033.in";
    $mail->Port = 25;
    $mail->Username = "quizcompetition@1618033.in";
    $mail->Password = "^,W,IaAWShZ2";
    $mail->SetFrom('info@QuizCompetition.in', 'Quiz Competition');
    $mail->IsHTML(true);    
    $mail->AddAddress($rcpt);
    $mail->Subject  = $sub;
    $mail->Body     = $msg;
    
    if(!$mail->Send()){
        $result = 0;
        $error = $mail->ErrorInfo;
    }
    else {
        $result = 1;
    }
    return $result;
}
?>