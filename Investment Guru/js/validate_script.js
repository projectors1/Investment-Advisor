function checkSignup(form) {
	re = /^[a-zA-Z\s]*$/;
	if(!re.test(form.txt_firstname.value)) {
        $("#alert_danger").html("Name must contain only letters");
        form.txt_firstname.focus();
        return false;
	}
	if(form.txt_pass.value != "" && form.txt_pass.value == form.txt_confirmpass.value) {
        if(form.txt_pass.value == form.txt_firstname.value) {
            $("#alert_danger").html("Password must be different from Username");
            form.txt_pass.focus();
            return false;
        }
        re = /[0-9]/;
        if(!re.test(form.txt_pass.value)) {
            $("#alert_danger").html("Password must contain at least one number (0-9)");
            form.txt_pass.focus();
            return false;
        }
        re = /[a-z]/;
        if(!re.test(form.txt_pass.value)) {
            $("#alert_danger").html("Password must contain at least one lowercase letter (a-z)");
            form.txt_pass.focus();
            return false;
        }
        re = /[A-Z]/;
        if(!re.test(form.txt_pass.value)) {
            $("#alert_danger").html("Password must contain at least one uppercase letter (A-Z)");
            form.txt_pass.focus();
            return false;
        }
    } 
    else {
        $("#alert_danger").html("Please check that password and confirm password are same");
        form.txt_pass.focus();
        return false;
	}
}