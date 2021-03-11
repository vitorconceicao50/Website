<?php

if(isset($_POST['email']) && !empty($_POST['email'])){



$name = addcslashes($_POST['name']);
$email = addcslashes($_POST['email']);
$message = addcslashes($_POST['message']);

$to = "vitorconceicao_3d@outlook.com";
$subject = "contacto - vitorconceicao 3d";
$body = "Name: ".$name. "\r\n".
        "Email: ".$email. "\r\n".
        "Message: ".$message; 
$header = "From:vitorconceicao_3d@outlook.com"."\r\n".
            "Reply-To:".$email."\r\n".
            "X=Mailer:PHP/".phpversion();


if(mail($to,$subject,$body,$header)) {

    echo("Email successfully sent!");

}else{
    echo("there was an error sending the email!");
}


}


?>