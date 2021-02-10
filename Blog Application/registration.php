<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <script src="script/registervalidation.js"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <div>
        <h1>Registration</h1>
        <form name="regform" action="php/action.php" method="POST" onsubmit="return validateform()">
            <label for="prefix">Prefix </label>
            <select name="prefix" id="">
                <option value="Selcte Prefix" disabled selected>Select Prefix</option>
                <option value="Mr.">Mr.</option>
                <option value="Mrs.">Mrs.</option>
                <option value="Ms.">Ms.</option>
            </select>
            <br>
            <label for="firstname">First Name </label>
            <input type="text" id="first-name" name="firstname" placeholder="Enter First Name">
            <span id="firstnamealert" class="text-danger" value=""></span>
            </br>
            <label for="lastname">Last Name </label>
            <input type="text" id="last-name" name="lastname" placeholder="Enter Last Name">
            <span id="lastnamealert" class="text-danger"></span>
            <br>
            <label for="email">Email </label>
            <input type="email" id="email-id" name="emailid" placeholder="Enter your Email">
            <span id="emailalert" class="text-danger"></span>
            </br>
            <label for="mobilenumber">Mobile Number</label>
            <input type="text" name="mobilenumber" id="mobilenumber" placeholder='Enter Mobile Number'>
            <span id="mobilenumberalert" class="text-danger"></span>
            <br>
            <label for="password">Password </label>
            <input type="password" id="password" name="password" placeholder="Enter Password">
            <span id="passwordalert" class="text-danger"></span>
            <br>
            <label for="confirmpassword">Confirm Password</label>
            <input type="password" id="confirmpassword" name="confirm-password" placeholder="Confirm Password">
            <span id="confirmpasswordalert" class="text-danger"></span>
            <br>
            <label for="information">Information</label>
            <textarea name="information" id="info" cols="30" rows="10" required></textarea>
            </br>
            <input type="checkbox" class="form-check-input" name="termscheck" id="tcheck" value="checkedValue" >
            <label for="tc">Hereby, I Accept Terms & Condition</label>
            
            <br><input type="submit" value="Register"></br>
        </form>
    </div>
</body>
</html>