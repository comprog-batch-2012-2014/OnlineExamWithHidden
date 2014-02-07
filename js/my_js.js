$(document).ready(function(){
	// Start function for registration
	$('#fname').blur(function(){
		if ($(this).val() == "") {
			$('#xfname').html("<span class = 'icon-remove'></span>&nbsp&nbsp");
		} else {
			$('#xfname').html("<span class = 'icon-ok'></span>&nbsp&nbsp");
		}
	});

	$('#mname').blur(function(){
		if ($(this).val() == "") {
			$('#xmname').html("<span class = 'icon-remove'></span>&nbsp&nbsp");
		} else {
			$('#xmname').html("<span class = 'icon-ok'></span>&nbsp&nbsp");
		}
	});
		
	$('#lname').blur(function(){
		if ($(this).val() == "") {
			$('#xlname').html("<span class = 'icon-remove'></span>&nbsp&nbsp");
		} else {
			$('#xlname').html("<span class = 'icon-ok'></span>&nbsp&nbsp");
		}
	});

	function validateEmail(email){
		var isValid = false;
		try {
			for (i = 1; i < email.length; i++) {
				if (email.charAt(i) == '@') {
					for (j = i+3; j < email.length; j++) {
						if (email.charAt(j) == '.') {
							isValid = true;
							i = email.length;
							break;
						}
					}
				}
			}
			if (isValid) {
				return true;
			} else {
				return false;
			}
		} catch(e) {
			return false;			
		}
	}

	$('#emailadd').blur(function(){
		var isOk = validateEmail($(this).val());
		if (isOk) {
			$('#xemailadd').html("<span class = 'icon-ok'></span>&nbsp&nbsp");
		} else {
			$('#xemailadd').html("<span class = 'icon-remove'></span>&nbsp&nbsp");
		}
	});


	$('#password').blur(function(){
		if ($(this).val().length < 5 || $(this).val() == "") {
			$('#xpassword').html("<span class = 'icon-remove'></span>&nbsp&nbsp");
			alert("Require atleast 5 characters");
		} else {
			$('#xpassword').html("<span class = 'icon-ok'></span>&nbsp&nbsp");
		}
	});

	$('#con_password').blur(function(){
		if ($(this).val() != $('#password').val() || $(this).val() == $('#password').val() && $(this).val().length < 5 || $(this).val() == "") {
			$('#xcon_password').html("<span class = 'icon-remove'></span>&nbsp&nbsp");
		} else {
			$('#xcon_password').html("<span class = 'icon-ok'></span>&nbsp&nbsp");
		}
	});

	$('submit-modal').click(function(){
		var emailadd = $('#emailadd').val();
		var password = $('#password').val();
		$.post({
			url: 'validate_email_password.php',
			data: {email:emailadd, pass: password},

			success:function(r){
				alert(r.result);
				return false;
			}
			});
	});

	$('.registration-form > input[type=submit]').click(function(){
		var fname =  $('#fname').val();
		var mname = $('#mname').val();
		var lname = $('#lname').val();
		var emailadd = $('#emailadd').val();
		var password = $('#password').val();
		var con_password = $('#con_password').val();
		if (fname == "") {
			alert('Your first name is invalid');
			return false;
		} else if (mname == "") {
			alert('Your middle name is invalid');
			return false;
		} else if (lname == "") {
			alert('Your last name is invalid');
			return false;
		} else if (emailadd == "") {
			alert('Your emailadd name is invalid');
			return false;
		} else if (password == "") {
			alert('Your password name is invalid');
			return false;
		} else if (con_password == "") {
			alert('Your confirm password name is invalid');
			return false;
		} else if (password != con_password) {
			alert('Your password and confirm password is not match');
			return false;
		} else {
			alert('You are successfully registered, just log in to take exam');
			return true; 
		}
		
	});

	$('#submit-for-modal').click(function(){
		$.ajax({
			url: 'validate_email_password.php',
			data: {'email': $('#email').val(), 'pass': $('#pass').val()},
			dataType: 'JSON',
			type: 'POST',

			success:function(r){
				if(r.is_user){
					alert(r.result);
					document.location.href = 'questions.php';
				}else{
					alert(r.result);
				}
			}
		});
	});

	$('#reset').on('click', function(){
		$('#xfname').html("");
		$('#xmname').html("");
		$('#xlname').html("");
		$('#xemailadd').html("");
		$('#xpassword').html("");
		$('#xcon_password').html("");
	});
	// End function for registration
});