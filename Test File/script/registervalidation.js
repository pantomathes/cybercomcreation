function validateform(){
    var emailcheck = document.getElementById('email-id').value;
    var fnamecheck = document.getElementById('full-name').value;
    var emailpattern = /^[.a-zA-Z0-9]{3,}@[a-zA-z]{2,}[.][a-zA-z]{2,25}$/;
    var namepattern = /^([a-zA-Z\s]{3,})$/;

    if(namepattern.test(fnamecheck)){

        document.getElementById('fullnamealert').innerHTML = "Your First Name is Valid";
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
    }
    else{
        document.getElementById('emailalert').innerHTML = "Your Entered Email ID is InValid";
        //alert("Your Entered Email ID is InValid");
        return false;
    }

    /*if((gendercheck[0].checked==false) || (gendercheck[1].checked==false) )
    {
        alert("Please select gender");
        return false;
    }

    if(citycheck == selectcity)
    {
        alert("Please Select your city");
        return false;
    }*/

}
