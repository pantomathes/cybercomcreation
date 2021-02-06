function validateform(){
    var emailcheck = document.getElementById('email-id').value;
    var fnamecheck = document.getElementById('full-name').value;
    var passwordcheck = document.getElementById('password').value;
    var confirmpasswordcheck = document.getElementById('confirmpassword').value;
    var emailpattern = /^[.a-zA-Z0-9]{3,}@[a-zA-z]{2,}[.][a-zA-z]{2,25}$/;
    var namepattern = /^([a-zA-Z\s]{3,})$/;
    var passpattern = /^(.){8,}$/;
    var state = document.forms["regform"]["state"];
	var city = document.forms["regform"]["city"];
    var terms = document.forms["regform"]["termscheck"];
    var admin = [];
    var name;
    var mail;
    var pass;
    var cred = {};

    if(namepattern.test(fnamecheck)){

        document.getElementById('fullnamealert').innerHTML = "Your First Name is Valid";
        name = fnamecheck;
        
    }
    else{
        document.getElementById('fullnamealert').innerHTML = "Your Entered First Name is InValid";
        //alert("Your First Name is InValid");
        return false;
    }
    /*if(namepattern != fnamecheck)
    {
        document.getElementById('fnamealert').innerHTML = "Your Entered First Name is InValid";
        return false;
    }*/


    if(emailpattern.test(emailcheck)){

        document.getElementById('emailalert').innerHTML = "Your Email ID is Valid";
        mail = emailcheck;
    }
    else{
        document.getElementById('emailalert').innerHTML = "Your Entered Email ID is InValid";
        //alert("Your Entered Email ID is InValid");
        return false;
    }

    if(passpattern.test(passwordcheck)){
        pass = passwordcheck;
        if(confirmpasswordcheck != passwordcheck){
            document.getElementById('confirmpasswordalert').innerHTML = "Password must be same as above one";
            return false;
        }
        
        
    }



    if (city.selectedIndex < 1) {
		alert("city should not be empty");
		city.focus();
		return false;
	}
	if (state.selectedIndex < 1) {
		alert("state should not be empty");
		state.focus();
		return false;
	}
	if (!terms.checked) {
		alert("Terms and Condition should be checked!");
		return false;
	}

    var cred={
        name: name,
        mail:mail,
        pass: pass
    };

    if(localStorage.getItem('admin') !=null){
        alert("Admin already exists ");
        return false;
    }

    if(localStorage.getItem('admin'))
    {
        admin = JSON.parse(localStorage.getItem('admin'));
    }

    admin.push(cred);
    localStorage.setItem("admin", JSON.stringify(admin));
    //document.write(localStorage);




}
