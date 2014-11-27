<?php
header("Content-Type:application/json");
if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
    $userName = filter_input(
        INPUT_POST,
        "userName",
        FILTER_VALIDATE_REGEXP,
        array(
            "options" => array("regexp" => "/^[\p{Hebrew} a-zA-Z]{2,15}$/u")
        ));
    $phone = filter_input(
        INPUT_POST,
        "phone",
        FILTER_VALIDATE_REGEXP,
        array(
            "options" => array("regexp" => "/^((((\+)?[0-9]{3}(\s|\-)?[0-9]{1,2})|([0-9]{2,3}))(\s|\-)?([0-9]{3}(\s|\-)?[0-9]{4}))$/")
        ));
    if(!empty($phone) && !empty($userName)){
        $message = "<html>"
                    . "<head>"
                    . "    <title>יצרית קשר מדף נחיתה</title>"
                    . "</head>"
                    . "<body>"
                                    . "    שם הלקוח: $userName<br>"
                                    . "    טלפון הלקוח: $phone"
                    . "</body>" 
                    . "</html>";
        $headers = 'From: webmaster@example.com' . "\r\n" .
            'Reply-To: webmaster@example.com' . "\r\n" .
            'Content-type: text/html; charset=utf-8' . "\r\n".
            'X-Mailer: PHP/' . phpversion();
        $mail = mail("avi@admintheweb.com", "יצירת קשר מדף נחיתה", $message, $headers);
        if($mail){
            echo json_encode(array("data" => "OK"));
        }
    }
}