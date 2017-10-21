function hidedanger() {
    window.setTimeout(function() {
        $("#alert_danger").slideUp(500, function(){
            $(this).html("");
            $(this).css("display", "block");    
        });
    }, 5000);
}

//Settings Validation 
function checkNewPass(form){
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

//Profile Validation
function checkPersonal(form) {
    re = /^[a-zA-Z\s]*$/;
	if(!re.test(form.txt_firstname.value)) {
        $("#alert_danger").html("First name must contain only letters");
        hidedanger();
        return false;
    }
    
    re = /^[a-zA-Z\s]*$/;
	if(!re.test(form.txt_lastname.value)) {
        $("#alert_danger").html("Last name must contain only letters");
        hidedanger();
        return false;
    }
    
    var getStatus = document.getElementById("e_status").value;
    if(getStatus!=Student||Employed||Unemployed) {
        $("#alert_danger").html("Status must be chosen");
        hidedanger();
        return false;
    }

    re = /^[a-zA-Z\s]*$/;
	if(!re.test(form.txt_city.value)) {
        $("#alert_danger").html("City must contain only letters");
        hidedanger();
        return false;
    }

    re = /^[a-zA-Z\s]*$/;
	if(!re.test(form.txt_country.value)) {
        $("#alert_danger").html("Country must contain only letters");
        hidedanger();
        return false;
    }
}

//Profile Validation
function checkFinance(form) {
    re = /[0-9]/;
    if(!re.test(form.txt_income.value)) {
        $("#alert_danger").html("Income should contain only numbers");
        hidedanger();
        return false;
    }

    if(parseInt(form.txt_income.value) <= 0) {
        $("#alert_danger").html("Income should not be zero or less than zero");
        hidedanger();
        return false;
    }

    re = /[0-9]/;
    if(!re.test(form.txt_expenses.value)) {
        $("#alert_danger").html("Expenses should contain only numbers");
        hidedanger();
        return false;
    }

    if(parseInt(form.txt_expenses.value) <= 0) {
        $("#alert_danger").html("Expenses should not be zero or less than zero");
        hidedanger();
        return false;
    }

    re = /[0-9]/;
    if(!re.test(form.txt_savings.value)) {
        $("#alert_danger").html("Savings should contain only numbers");
        hidedanger();
        return false;
    }

    if(parseInt(form.txt_savings.value) <= 0) {
        $("#alert_danger").html("Savings should not be zero or less than zero");
        hidedanger();
        return false;
    }
}

//Plan Validation
function checkPlanDetails(form) {
    re = /^\w+$/;
    if(!re.test(form.txt_goalname.value)) {
        $("#alert_danger").html("Goal Name must contain only letters,numbers and underscores");
        hidedanger();
        return false;
    }
    
    if(parseInt(form.txt_goalcost.value) <= 0) {
        $("#alert_danger").html("Cost should not be zero or less than zero");
        hidedanger();
        return false;
    }
}

//SignUp Validation
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
