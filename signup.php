<?php
  include("./header.php")
?>
<div class="login p-5 w-100">
    <div class="w-100">
        <main class="form-signin m-auto w-75">
            <form>
                <img src=../images/user-login.png" alt="">
                <h1 class="h3 mt-3 fw-normal">Create New Account</h1>
                <div class="first-last-name form-floating mt-3 row pl-3">
                    <div class="first-name">
                        <label class="font-weight-bold" for="firstName">*First Name</label>
                        <input type="text" class="form-control" id="firstName" name="firstName" required>
                    </div>
                    <div class="last-name">
                        <label class="font-weight-bold" for="lastName">*Last Name</label>
                        <input type="text" class="form-control" id="lastName" name="lastName" required>
                    </div>
                </div>
                <div class="form-floating mb-3 mt-3">
                    <label class="font-weight-bold" for="email">*Email address</label>
                    <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email"
                        required>
                </div>
                <div class="form-floating">
                    <label class="font-weight-bold" for="password">*Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Password" name="password"
                        required>
                </div>
                <div class="form-floating mt-3">
                    <label class="font-weight-bold" for="passwordAgain">*Password Again</label>
                    <input type="password" class="form-control" id="passwordAgain" placeholder="Password"
                        name="passwordAgain" required>
                    <p class="checkPassword"></p>
                </div>
                <div class="form-floating mt-3">
                    <label class="font-weight-bold" for="phoneNumber">Phone Number</label>
                    <input type="tel" class="form-control" id="phoneNumber" placeholder="07xxxxxxxx"
                        name="phoneNumber">
                    <p class="checkPhoneNumber"></p>
                </div>
                <div class="form-floating mt-3">
                    <label class="font-weight-bold" for="city">*City</label>
                    <select class="form-select ml-2" aria-label="Default select example" name="city">
                        <option value="Amman">Amman</option>
                        <option value="Irbid">Irbid</option>
                        <option value="Zarqa">Zarqa</option>
                        <option value="Jerash">Jerash</option>
                        <option value="Madaba">Madaba</option>
                        <option value="Aqaba">Aqaba</option>
                        <option value="Karak">Karak</option>
                        <option value="Mafraq">Mafraq</option>
                        <option value="Ajloun">Ajloun</option>
                        <option value="Maan">Ma'an</option>
                        <option value="Tafelah">Tafelah</option>
                        <option value="Balqa">Balqa</option>
                    </select>
                </div>
                <div class="first-last-name form-floating mt-3 row pl-3">
                    <div class="first-name">
                        <label class="font-weight-bold" for="Place">*Place</label>
                        <input type="text" class="form-control" id="Place" name="Place" required>
                    </div>
                    <div class="last-name">
                        <label class="font-weight-bold" for="streetName">*Street Name</label>
                        <input type="text" class="form-control" id="StreetName" name="streetName" required>
                    </div>
                </div>
                <div class="form-floating mt-3">
                    <label class="font-weight-bold" for="buildingNumber">*Building Number</label>
                    <input type="number" class="form-control" id="buildingNumber" name="buildingNumber" required>
                </div>
                <button class="login-btn w-100 btn btn-lg btn-primary mt-3" id="signupBtn" type="submit">Sign
                    Up</button>
            </form>
            <h5 class="create-account-text mt-4">Already Have an Account?</h5>
            <a href="login.html" class="signup-btn w-100 btn btn-lg btn-primary mt-3" type="submit">Login</a>
        </main>

    </div>
    <div class="login-image">
        <img src="../images/login-book.png" alt="">
    </div>
</div>
<script>
    document.querySelector('#password').addEventListener('keyup', (element)=>{
        var password = document.querySelector('#password').value;
        var passwordAgain = document.querySelector('#passwordAgain').value;
        if (password !== passwordAgain && passwordAgain.length > 0) {
            document.querySelector('.checkPassword').innerHTML = "*The password is incorrect.";
            document.querySelector('#signupBtn').disabled = true;
        } else {
            document.querySelector('.checkPassword').innerHTML = "";
            document.querySelector('#signupBtn').disabled = false;
        }
    });
    document.querySelector('#passwordAgain').addEventListener('keyup', (element) => {
        var password = document.querySelector('#password').value;
        var passwordAgain = document.querySelector('#passwordAgain').value;
        if (password !== passwordAgain && passwordAgain.length > 0) {
            document.querySelector('.checkPassword').innerHTML = "*The password is incorrect.";
            document.querySelector('#signupBtn').disabled = true;
        } else {
            document.querySelector('.checkPassword').innerHTML = "";
            document.querySelector('#signupBtn').disabled = false;
        }
    });
    document.querySelector('#phoneNumber').addEventListener('keyup', (element) => {
        var phoneNumber = document.querySelector('#phoneNumber').value;
        
        var valid = !isNaN(phoneNumber); //check if the phone number does not contain text using isNaN function.

        //if the phone number length is greater than 2, check the if the first three digits are valid jordanian compainies.
        if (phoneNumber.length > 2){ 
            var firstThreeDigits = phoneNumber[0] + phoneNumber[1] + phoneNumber[2];
            if(firstThreeDigits !== "079" && firstThreeDigits !== "078" && firstThreeDigits !== "077")
                valid = !valid;
        }

        //check if the phone number length is valid (10 digits)
        if ((phoneNumber.length > 0 && phoneNumber.length < 10) || !valid || phoneNumber.length>10) {
            document.querySelector('.checkPhoneNumber').innerHTML = "*Invalid phone number.";
            document.querySelector('#signupBtn').disabled = true;
        } else {
            document.querySelector('.checkPhoneNumber').innerHTML = "";
            document.querySelector('#signupBtn').disabled = false;
        }
    });
</script>
<?php
  include("./footer.php")
?>