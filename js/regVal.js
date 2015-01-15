
//#######################VALIDATOR#######################
//#########SUBMIT-PERMISSION#########
$( document ).ready(function() {
	$("#reg_submit").click( function() {
		if( validateF() && validateL() && validateU() && validateE() && validateE2() && validateP() && validateP2()){
			$('#register').unbind('submit').submit();
		} else {
			alert ('denied');
			$("#register").submit(function(e){
			e.preventDefault();
			});
		}
	});
});
//############FNAME################
function validateF(){
	if(!$('#firstname').val()){
		$('#firstname').attr("placeholder", "First Name is required");
		$("#firstname").addClass('errorClass');
		$("#fval").hide();
		$("#fvalx").show();
	} else {
		$("#firstname").removeClass('errorClass');
		$("#fvalx").hide();
		$("#fval").show();
		return true;
	}
}
//############LNAME################
function validateL(){
	if(!$('#lastname').val()){
		$('#lastname').attr("placeholder", "Last Name is required");
		$("#lastname").addClass('errorClass');
		$("#lval").hide();
		$("#lvalx").show();
	} else {
		$("#lastname").removeClass('errorClass');
		$("#lvalx").hide();
		$("#lval").show();
		return true;
	}
}
//############USER-NAME################
function validateU(){
	if(!$('#username').val()){
		$('#username').attr("placeholder", "User Name is required");
		$("#username").addClass('errorClass');
		$("#urval").hide();
		$("#urvalx").show();
	} else {
		$("#username").removeClass('errorClass');
		$("#urvalx").hide();
		$("#urval").show();
		return true;
	}
}
//############EMAIL################
function validateE(){
	if(!$('#email').val()){
		$('#email').attr("placeholder", "E-MAIL is required");
		$("#email").addClass('errorClass');
		$("#eval").hide();
		$("#evalx").show();
	} else if( !isValidEmailAddress($('#email').val()) ) {
		$('#email').val("");
		$('#email').attr("placeholder", "E-MAIL is Not Real");
		$("#email").addClass('errorClass');
		$("#eval").hide();
		$("#evalx").show();
	} else {
		$("#email").removeClass('errorClass');
		$("#evalx").hide();
		$("#eval").show();
		if($('#verifyemail').val()) {
			validateE2();
		}
		return true;
	}
}
//###########VARIFY-EMAIL##########
function validateE2(){
	if(!$('#email').val()){
		$('#email').attr("placeholder", "E-MAIL is required");
		$("#email").addClass('errorClass');
		$("#eval").hide();
		$("#evalx").show();
	} else if(!$('#verifyemail').val()){
		$('#verifyemail').attr("placeholder", "Varification is required");
		$("#verifyemail").addClass('errorClass');
		$("#reval").hide();
		$("#revalx").show();
	} else if( $('#verifyemail').val() != $('#email').val() ) {
		$('#verifyemail').val("");
		$('#verifyemail').attr("placeholder", "E-MAIL Addresses do not match");
		$("#verifyemail").addClass('errorClass');
		$("#reval").hide();
		$("#revalx").show();
	} else {
		$("#verifyemail").removeClass('errorClass');
		$("#revalx").hide();
		$("#reval").show();
		return true;
	}
}
//############PASSWORD##############
function validateP(){
	//var pass = $('#password').val();
	if(!$('#password').val()){
		$('#password').attr("placeholder", "Password is required");
		$("#password").addClass('errorClass');
		$("#prval").hide();
		$("#prvalx").show();
	} else if( $('#password').val().length < 5 ) {
		$('#password').val("");
		$('#password').attr("placeholder", "Password must be atleast 5 charecters");
		$("#password").addClass('errorClass');
		$("#prval").hide();
		$("#prvalx").show();
	} else {
		$("#password").removeClass('errorClass');
		$("#prvalx").hide();
		$("#prval").show();
		if($('#verifypassword').val()) {
			validateP2();
		}
		return true;
	}
}
//###########VARIFY-PASSWORD#########
function validateP2(){
	if(!$('#password').val()){
		$('#password').attr("placeholder", "Password is required");
		$("#password").addClass('errorClass');
		$("#prval").hide();
		$("#prvalx").show();
	} else if(!$('#verifypassword').val()){
		$('#verifypassword').attr("placeholder", "Varification is required");
		$("#verifypassword").addClass('errorClass');
		$("#preval").hide();
		$("#prevalx").show();
	} else if( $('#verifypassword').val() != $('#password').val() ) {
		$('#verifypassword').val("");
		$('#verifypassword').attr("placeholder", "E-MAIL Addresses do not match");
		$("#verifypassword").addClass('errorClass');
		$("#preval").hide();
		$("#prevalx").show();
	} else {
		$("#verifypassword").removeClass('errorClass');
		$("#prevalx").hide();
		$("#preval").show();
		return true;
	}
}
//############REGEX-EMAIL CHECK######
function isValidEmailAddress(emailAddress) {
	var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
	return pattern.test(emailAddress);
};
