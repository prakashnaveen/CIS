function contactSubmit() { 
	
var data = $('#contact_form').serialize();
$.ajax({
type : "post",
url : "contactform_action.php",
data :data,
success : function(msg){
	
	if(msg)
		 {
		 $("div#succmsg").html(msg);
		 $('#contactform').addClass('displaynone');
		}
	}
	})
}

function isValid(value){
	
if($('#contact_form').valid()) 
	{
		
		contactSubmit();
		//$("input[name=Name]").val('');
		$("input[name=Email]").val('');
		//$("textarea[name=Message]").val('');
		return false;
	}
	
	
	
	}
	
	
	
/***************************subscribe***********************/

/*function blogSubmit() { 
	
var data = $('#Blog_subscribe').serialize();
$.ajax({
type : "post",
url :"blogSubscribe_action.php",
data :data,
success : function(msg){
	
	if(msg)
		 {
		 $("div#bsuccmsg").html(msg);
		}
	}
	})
}

function isValid3(value){
	
if($('#Blog_subscribe').valid()) 
	{
		
		blogSubmit();
		$("input[name=email1]").val('');
		return false;
	}
	
	
	
	}*/