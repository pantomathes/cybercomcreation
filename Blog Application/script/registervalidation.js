function validateform(){
    
    
    var emailpattern = /^[.a-zA-Z0-9]{3,}@[a-zA-z]{2,}[.][a-zA-z]{2,25}$/;
    var namepattern = /^([a-zA-Z]{3,})$/;
    var passpattern = /^(.){8,}$/;
    var numberpattern = /^([0-9]{6,10})$/;
    var terms = document.forms["regform"]["termscheck"];

    var prefix = document.forms["regform"]["prefix"];
    var fnamecheck = document.getElementById('first-name').value;
    var lnamecheck = document.getElementById('last-name').value;
    var emailcheck = document.getElementById('email-id').value;
    var passwordcheck = document.getElementById('password').value;
    var confirmpasswordcheck = document.getElementById('confirmpassword').value;
    var mobilenumbercheck = document.getElementById("mobilenumber").value;

    if(prefix.selectedIndex < 1){
        alert("Prefix not selected.");
        prefix.focus();
        return false;
    }
    if(namepattern.test(fnamecheck) == false){
        document.getElementById('firstnamealert').innerHTML = "First name not valid"; 
        
        return false;
    }

    if(namepattern.test(lnamecheck) == false){
        document.getElementById('lastnamealert').innerHTML = "Last name not valid"; 
        return false;
    }

    if(emailpattern.test(emailcheck) == false){
        document.getElementById('emailalert').innerHTML = "Email not valid"; 
        return false;
    }

    if(numberpattern.test(mobilenumbercheck) == false){
        document.getElementById('mobilenumberalert').innerHTML = "Mobile number not valid"; 
        return false;
    }

    if(passpattern.test(passwordcheck) == false){
        document.getElementById('passwordalert').innerHTML = "Password not valid"; 
        return false;
    }
    
    if(passpattern.test(confirmpasswordcheck) == false){
        document.getElementById('confirmpasswordalert').innerHTML = "Please confirm password"; 
        return false;
    }else{
        
        if(confirmpasswordcheck != passwordcheck){
            document.getElementById('confirmpasswordalert').innerHTML = "Password does not match"; 
            return false;
        }
    }
 
    // terms and condition..
	if (!terms.checked) {
		alert("Terms and Condition should be checked!");
		return false;
	}
}


