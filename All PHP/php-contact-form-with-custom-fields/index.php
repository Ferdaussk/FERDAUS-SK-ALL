<?php
if(!empty($_POST["send"])) {
    $name = $_POST["userName"];
    $email = $_POST["userEmail"];
    $subject = $_POST["subject"];
    $emailContent = "<p>You have received new email via Contact Form: </p>";
    $emailContent .=  "<p><b>Message: </b>" . $_POST["content"] . "</p>";
    
    if(!empty($_POST["custom_name"][0])) {
        $emailContent .= "<p><u>Custom Information:</u></p>";
        foreach($_POST["custom_name"] as $k=>$v) {
            $emailContent .=  "<p>" . $_POST["custom_name"][$k] . ": " . $_POST["custom_value"][$k] . "</p>";
        }
    }
    
    $toEmail = "ferdaussk.dev@gmail.com";
    $mailHeaders = "From: " . $name . "<". $email .">\r\n";
    if(mail($toEmail, $subject, $emailContent, $mailHeaders)) {
        $message = "Your contact information is received successfully.";
        $type = "success";
    }
}
require_once "contact-view.php";
?>