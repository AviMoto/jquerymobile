<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ממעמקים</title>
<link rel="stylesheet" type="text/css"
	href="assets/css/jquery.mobile-1.4.5.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/page.css">
<script src="assets/js/lib/jquery-2.1.1.min.js"></script>
<script src="assets/js/lib/jquery.mobile-1.4.5.min.js"></script>
<script src="assets/js/form.js"></script>
</head>
<body>
	<div data-role="page" data-control-title="landPage" id="landPage"
		class="mainPage">
		<header data-role="header">
			<picture>
			    <source media="(min-width:24.1em)" srcset="assets/images/mobile_logo.png">
			    <source media="(max-width:24em)" srcset="assets/images/mobile_logo172x60.png"></source>
                <img src="assets/images/ajax-loader.gif">			
			</picture>
			<div class="whiteLine"></div>
			<h1 id="headerSlogen">להקה <span class="blueText">לחתונות שמחות</span></h1>
			<div class="blueLine"></div>
		</header>
		<section role="main" class="ui-content">
		    <div id="slogen">קבלו 500 ₪ הנחה ודיסק במתנה</div>				
			<iframe src="//www.youtube.com/embed/TgtX9gUzc90?rel=0"></iframe>
			<section id="formTitle">
				<br> מלא את הפרטים לקבלת ההטבה:
			</section>
			<form id="contactUs" action="" method="POST">
				<label for="userName">שם:</label> <input id="userName"
					name="userName" type="text" required="required">
					<div data-role="popup" id="popupNameError" class="error" data-transition="flip">
					   שם יכול להיות אותיות בעברית או באנגלית
					</div>
					 <label for="phone">טלפון:</label> <input
					type="tel" name="phone" id="phone" required="required">
					<div data-role="popup" id="popupPhoneError" class="error" data-transition="flip">
					   מספר טלפון יכול להכיל רק ספרות, - או +
					</div>
				<button type="submit" id="send">שלח</button>
			</form>
		</section>
		<div class="blueLine"></div>
		<section id="footer">
		    <button id="callUs" class="ui-btn ui-corner-all ui-shadow ui-btn-icon-left ui-icon-phone"> צלצלו עכשיו </button>
		    <span id="details">רונן <a href="tel:050-675-6429">050-675-6429</a></span>
		</section>
		<h2 id="footerSlogen">חוויה של קצב ונשמה</h2>
	</div>
	<div data-role="page" data-control-title="thankYou" id="thankyou">תודה על פנייתך אנו ניצור עמך קשר בהקדם</div>
</body>
</html>