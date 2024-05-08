<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/final.css" rel="stylesheet">

</head>
<body>
<div>
    <h2>Xhuma Solutions Organ Donation Registration</h2>
    <form method="post" action="process.php" name="registrationForm">

        <input type="checkbox" id="terms" name="terms"><label for="terms">I agree with terms and conditions of Xhuma
            Solutions</label>
        <br><br>

        <label for="fname">Name: </label><input type="text" name="fname"><br>
        <label for="email">Email: </label><input type="email" name="email"><br>
        <label for="emergencyInfo">Emergency Contact Info: </label><input type="text" name="emergencyInfo"><br>
        <label for="phone">Phone Number: </label><input type="tel" name="phone"><br>
        <div>
            <label for="profile">Personal Profile Type:</label><br>
            <label for="license"> Driver's License</label>
            <input type="checkbox" id="license" name="profileId" value="Driver's License"><br><br>
            <label for="stateId"> State ID</label>
            <input type="checkbox" id="id" name="profileId" value="State ID"><br><br>

        </div>
        <label for="idNumber">Identification Number: </label><input type="number" name="idNumber"><br>
        <label for="donorAddress">Address: </label><input type="text" name="donorAddress"><br>


        <div class="organs">
            <p>Donating Organ</p>
            <select name="organ">
                <option selected value="" disabled selected></option>
                <option value="kidney">Kidney</option>
                <option value="liver">Liver</option>
                <option value="heart">Heart</option>
                <option value="lungs">Lungs</option>
                <option value="pancreas">Pancreas</option>
            </select>
        </div><!-- Drop Down -->


        <button><input type="submit" name="submit" id="button" value="Register"></button>
    </form>

</div>


<div class="center">
    <button id="show-login">Login</button>
</div>
<div class="popup">
    <div class="close-btn">&times;</div>
    <div class="form">
        <h2>Log in</h2>
        <div class="form-element">
            <label for="email">Email</label>
            <input type="text" id="email" placeholder="Enter email">
        </div>

        <div class="form-element">
            <label for="password">password</label>
            <input type="password" id="password" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;">
        </div>

        <div class="form-element">
            <input type="checkbox" id="remember-me">
            <label for="remember-me">Remember me</label>
        </div>

        <div class="form-element">
            <button>Sign in</button>
        </div>

        <div class="form-element">
            <a href="password.php">Forgot password?</a>
        </div>

    </div>
</div>


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
<script src="js/final.js"></script>


</body>
</html>