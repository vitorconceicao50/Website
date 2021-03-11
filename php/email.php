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
        
if(mail($to,$subject,$body)) {

    echo("Email successfully sent!");

}else{
    echo("there was an error sending the email!");
}


}


?>