/**
 * 
 */
$(function(){
	$("#mainContent").css("min-height",$(window).height() - (180 + $("header").height()));
	$("#contactUs").submit(function(event){
		event.preventDefault();
		var userName = $("#userName").val();
		var phone = $("#phone").val();
		var status = true;
		if(!userName.match(/^[a-zA-Z\-\u0590-\u05FF ]+$/)){
			$("#popupNameError").popup("open");
			status = false;
		}
		if(!phone.match(/^((((\+)?[0-9]{3}(\s|\-)?[0-9]{1,2})|([0-9]{2,3}))(\s|\-)?([0-9]{3}(\s|\-)?[0-9]{4}))$/)){
			$("#popupPhoneError").popup("open");
			status = false;
		}
		if(status){
			$.ajax(
			    "process.php",
				{
			    	type : "POST",
			    	data : {
			    		'userName' : userName,
			    		'phone' : phone
			    	},
			    	error : function(xhr, resStatus, errorThrown){
			    		console.log("get " + resStatus + " : " + errorThrown);
			    	},
			    	success : function(data, status, xhr) {
			    		
			    		 $("#mainContent").html(data.data);
			    	}
				}	
			);
		}
	});
	$("#callUs").click(function(){
		location.href = "tel:050-675-6429";
	});
});