function hidedanger() {
    window.setTimeout(function() {
        $("#alert_danger").slideUp(500, function(){
            $(this).html("");
            $(this).css("display", "block");    
        });
    }, 5000);
}

function checkNewPass(this){
    if(form.txt_newpass.value != "" && form.txt_newpass.value == form.txt_confirmnew.value) {
        if(form.txt_currentpass.value == form.txt_newpass.value) {
            $("#alert_danger").html("Password must not be same as the current password");
            hidedanger();
            return false;
        }
        re = /[0-9]/;
        if(!re.test(form.txt_newpass.value)) {
            $("#alert_danger").html("New Password must contain at least one number (0-9)");
            hidedanger();
            return false;
        }
        re = /[a-z]/;
        if(!re.test(form.txt_newpass.value)) {
            $("#alert_danger").html("New Password must contain at least one lowercase letter (a-z)");
            hidedanger();
            return false;
        }
        re = /[A-Z]/;
        if(!re.test(form.txt_newpass.value)) {
            $("#alert_danger").html("New Password must contain at least one uppercase letter (A-Z)");
            hidedanger();
            return false;
        }
    } 
    else {
        $("#alert_danger").html("Please check that newpassword and confirm newpassword are same");
        hidedanger();
        return false;
	}
}

function checkSignup(form) {
	re = /^[a-zA-Z\s]*$/;
	if(!re.test(form.txt_firstname.value)) {
        $("#alert_danger").html("Name must contain only letters");
        hidedanger();
        return false;
	}
	if(form.txt_pass.value != "" && form.txt_pass.value == form.txt_confirmpass.value) {
        if(form.txt_pass.value == form.txt_firstname.value) {
            $("#alert_danger").html("Password must be different from name");
            hidedanger();
            return false;
        }
        re = /[0-9]/;
        if(!re.test(form.txt_pass.value)) {
            $("#alert_danger").html("Password must contain at least one number (0-9)");
            hidedanger();
            return false;
        }
        re = /[a-z]/;
        if(!re.test(form.txt_pass.value)) {
            $("#alert_danger").html("Password must contain at least one lowercase letter (a-z)");
            hidedanger();
            return false;
        }
        re = /[A-Z]/;
        if(!re.test(form.txt_pass.value)) {
            $("#alert_danger").html("Password must contain at least one uppercase letter (A-Z)");
            hidedanger();
            return false;
        }
    } 
    else {
        $("#alert_danger").html("Please check that password and confirm password are same");
        hidedanger();
        return false;
	}
}