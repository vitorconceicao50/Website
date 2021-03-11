<?php

if(isset($_POST['email']) && !empty($_POST['email'])){



$name = addslashes($_POST['name']);
$email = addslashes($_POST['email']);
$message = addslashes($_POST['message']);

$to = "vitorconceicao_3d@outlook.com";
$subject = "contacto - vitorconceicao 3d";
$body = "Name: ".$name. "\r\n".
        "Email: ".$email. "\r\n".
        "Message: ".$message; 
$header = "From:vitorconceicao_3d@outlook.com"."\r\n".
            "Reply-To:".$email."\e\n".
            "X=Mailer:PHP/".phpversion(); true, 200;
            

if(mail($to,$subject,$body,$header)) {

    echo("Email successfully sent!");

}else{
    echo("there was an error sending the email!");
}


}


?>