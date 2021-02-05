function validateform(){
    var emailcheck = document.getElementById('email-id').value;
    var fnamecheck = document.getElementById('fname').value;
    var lnamecheck = document.getElementById('lname').value;
    var emailpattern = /^[.a-zA-Z0-9]{3,}@[a-zA-z]{2,}[.][a-zA-z]{2,25}$/;
    var namepattern = /^([a-zA-Z]{3,})$/;
    var gendercheck = document.getElementById('gender').value;
    var citycheck = document.getElementById('city').value

    if(namepattern.test(fnamecheck)){

        document.getElementById('fnamealert').innerHTML = "Your First Name is Valid";
    }
    else{
        document.getElementById('fnamealert').innerHTML = "Your Entered First Name is InValid";
        //alert("Your First Name is InValid");
        return false;
    }
    /*if(namepattern != fnamecheck)
    {
        document.getElementById('fnamealert').innerHTML = "Your Entered First Name is InValid";
        return false;
    }*/

    if(namepattern.test(lnamecheck)){

        document.getElementById('lnamealert').innerHTML = "Your Last Name is Valid";
    }
    else{
        document.getElementById('lnamealert').innerHTML = "Your Entered Last Name is InValid";
        //alert("Your Entered Last Name is InValid");
        return false;
    }

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
