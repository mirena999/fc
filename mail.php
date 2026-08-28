<?php
$to = 'info@fcindenaltdorf.de';


//Contact us!
if(isset($_POST['tm_form'])&&($_POST['tm_form']==1)){
    $subject = "Ihre Nachricht an uns";
    
    $message = "Name: ".$_POST['aics_name']."\r\n".
               "Email: ".$_POST['aics_email']."\r\n".
               "Nachricht: ".$_POST['aics_message']."\r\n";
}

if(mail($to, $subject, $message)){
    echo "Ihre Nachricht wurde erfogreich versendet.";
}else{
    echo "Es ist ein Fehler aufgetretten. Bitte versuchen Sie erneut!";
}