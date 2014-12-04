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
		<header>
			<div id="logo"></div>
			<div class="whiteLine"></div>
			<h1 id="headerSlogen">
				להקה <span class="blueText">לחתונות שמחות</span>
			</h1>
			<div class="blueLine"></div>
		</header>
		<section role="main" class="ui-content ui-grid-a ui-responsive" id="mainContent">
			<section id="right" class="ui-block-a">
				<h2>מתחתנים?</h2>
				<div>
					<span id="slogen">לסוגרים אירוע דיסק במתנה</span>
				</div>
				<div id="customer">לרונן ולהקתו התותחים!! הייתם פצצה אתמול, תודה
					שהפכתם את היום המאושר הזה לכ"כ כיפי ומקפיץ! שמחים שבחרנו אתכם
					וכמובן נמליץ לכולם! נתראה בשמחותB-)<br><span id="names">אלירן ושירן</span></div>
			</section>
			<section id="left" class="ui-block-b">
				<iframe src="//www.youtube.com/embed/TgtX9gUzc90?rel=0"></iframe>
				<section id="formTitle">
					<br> מלא את הפרטים לקבלת ההטבה:
				</section>
				<form id="contactUs" action="" method="POST">
					<input id="userName" name="userName" type="text"
						required="required" placeholder="שם:">
					<div data-role="popup" id="popupNameError" class="error"
						data-transition="flip">שם יכול להיות אותיות בעברית או באנגלית</div>
					<input type="tel" name="phone" id="phone" required="required"
						placeholder="טלפון:">
					<div data-role="popup" id="popupPhoneError" class="error"
						data-transition="flip">מספר טלפון יכול להכיל רק ספרות, - או +</div>
					<button type="submit" id="send">שלח</button>
				</form>
			</section>
		</section>
		<section id="footer">
		    <div class="blueLine"></div>
		    <section id="footerContent">
			<button id="callUs"
				class="ui-btn ui-corner-all ui-shadow ui-btn-icon-left ui-icon-phone">
				צלצלו עכשיו</button>
			<span id="details">רונן <a href="tel:050-675-6429">050-675-6429</a></span>
			<h2 id="footerSlogen">חוויה של קצב ונשמה</h2>
			</section>
		</section>
	</div>
</body>
</html>