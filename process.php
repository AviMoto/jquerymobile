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
            $page = <<< THANKYOU
<div  id="thankyou">תודה על פנייתך אנו ניצור עמך קשר בהקדם</div>
<a href="http://www.mimaamakim.co.il">אתם מוזמנים להמשיך ולהתרשם באתר שלנו</a>
<!-- Google Code for &#1500;&#1497;&#1491; - &#1502;&#1502;&#1506;&#1502;&#1511;&#1497;&#1501; Conversion Page -->
<script type="text/javascript">
	/* <![CDATA[ */
	var google_conversion_id = 1013028602;
	var google_conversion_language = "iw";
	var google_conversion_format = "1";
	var google_conversion_color = "ffffff";
	var google_conversion_label = "1gVLCOOf5lcQ-q2G4wM";
	var google_remarketing_only = false;
	/* ]]> */
</script>
<script type="text/javascript"src="//www.googleadservices.com/pagead/conversion.js">
	
</script>
<noscript>
	<div style="display: inline;">
		<img height="1" width="1" style="border-style: none;" alt=""src="//www.googleadservices.com/pagead/conversion/1013028602/?label=1gVLCOOf5lcQ-q2G4wM&amp;guid=ON&amp;script=0" />
	</div>
</noscript>
THANKYOU;
            echo json_encode(array("data" => $page));
        }
    }
}
?>