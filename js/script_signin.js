// login authorization script
function login_click(e){				
	var valid = e.form.checkValidity();
	if (valid) {
		var user = $('#username').val();
		var pass = $('#password').val();
	}
	$.ajax({
		type:'POST',
		url:'jslogin.php',
		data:{username:user, password:pass},
		success:function(data){
			
			if ($.trim(data)==="1") {
				setTimeout('window.location.href = "profile.php"',2000);
			}else{
				alert(data);
			}
		},
		error:function(data){
			alert('login operation failed');
		}
	});	
}