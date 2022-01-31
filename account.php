<?php
    session_start();
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] == false){
        header("location: ./login.php");
        exit;
    }
    include("./header.php");
    require "./php/connection.php";
    $pdo = db::getInstance();
    $sql = "SELECT * FROM customer WHERE customer.customer_id = $_SESSION[id]";
    $stmt = $pdo-> prepare($sql);
    $stmt-> execute();
    $data = $stmt-> fetch();
?>
<div class="accountPage d-flex p-5 ">
    <div class="addressInfo card">
        <h4 class="card-title">Address Information</h4>
        <hr class="m-0">
        <div class="card-body text-left d-flex justify-content-between">
            <div class="changeAccountInfo addressInfoSection">
                <div class="Unhidden">
                    <h6 class="font-weight-bold">City:</h6>
                    <p><?php echo $data["city"]?></p>
                    <h6 class="font-weight-bold">Place</h6>
                    <p><?php echo $data["place"]?></p>
                    <h6 class="font-weight-bold">Street Name</h6>
                    <p><?php echo $data["street_name"]?></p>
                    <h6 class="font-weight-bold">Building Number</h6>
                    <p><?php echo $data["building_number"]?></p>
                </div>
                <div class="hidden changeAddressSection">
                    <form action="./php/changeAddress.php" method="POST">
                        <div class="form-floating">
                            <label class="font-weight-bold m-0" for="city">*New City</label>
                            <select id="city" class="form-select ml-2" aria-label="Default select example"
                                name="city">
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
                        <div class="form-floating">
                            <label class="font-weight-bold m-0" for="place">*New Place</label>
                            <input id="place" type="text" class="form-control" name="place" required>
                        </div>
                        <div class="form-floating">
                            <label class="font-weight-bold m-0" for="StreetName">*New Street Name</label>
                            <input id="StreetName" type="text" class="form-control" name="streetName" required>
                        </div>
                        <div class="form-floating mt-3">
                            <label class="font-weight-bold" for="buildingNumber">*Building Number</label>
                            <input type="number" class="form-control" id="buildingNumber" name="buildingNumber"
                                required>
                        </div>
                        <button class="btn btn-primary btn-sm mt-2" type="submit">Submit</button>
                    </form>
                </div>
            </div>
            <button class="btn btn-dark btn-sm changebtn" id="changeAddress">Change</button>
        </div>
    </div>
    <div class="securityAndlogin card">
        <h4 class="card-title">Security & Login</h4>
        <hr class="m-0">
        <div class="card-body text-left">
            <div class="d-flex changeAccountInfo">
                <h6 class="font-weight-bold">Email:</h6>
                <button class="btn btn-dark btn-sm changebtn" id="changeEmail">Change</button>
            </div>
            <p><?php echo $data["email"]?></p>
            <div class="hidden<?php if(isset($_SESSION['changeEmail_status'])) echo'no';?> changeEmailSection">
                <form action="./php/changeEmail.php" method="POST">
                    <div class="form-floating">
                        <label class="font-weight-bold m-0" for="email">*New Email</label>
                        <input type="email" class="form-control mb-2" id="email" name="email" required <?php if(isset($_SESSION['changeEmail_status']) && $_SESSION['changeEmail_status'] == 4) echo'style="border-color:red"';?>>
                        <?php if(isset($_SESSION['changeEmail_status']) && $_SESSION['changeEmail_status'] == 4) 
                        echo
                        '<p>This email is already taken</p>'
                        ;?>
                    </div>
                    <div class="form-floating">
                        <label class="font-weight-bold m-0" for="password">*Password</label>
                        <input type="password" class="form-control" name="password" required <?php if(isset($_SESSION['changeEmail_status']) && $_SESSION['changeEmail_status'] == 1) echo'style="border-color:red"';?>>
                        <?php if(isset($_SESSION['changeEmail_status']) && $_SESSION['changeEmail_status'] == 1) 
                        echo
                        '<p>Wrong Password</p>'
                        ;?>
                    </div>
                    <button class="btn btn-primary btn-sm mt-2" type="submit">Submit</button>
                </form>
            </div>
            <hr>
            <div class="d-flex changeAccountInfo">
                <h6 class="font-weight-bold">Phone Number:</h6>
                <button class="btn btn-dark btn-sm changebtn" id="changePhone">Change</button>
            </div>
            <p><?php echo $data["phone_number"]?></p>
            <div class="hidden<?php if(isset($_SESSION['changePhone_status'])) echo'no';?> changePhoneSection">
                <form action="./php/changePhoneNumber.php" method="POST">
                    <div class="form-floating mt-3">
                        <label class="font-weight-bold" for="phoneNumber">Phone Number</label>
                        <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber">
                    </div>
                    <div class="form-floating">
                        <label class="font-weight-bold m-0" for="password">*Password</label>
                        <input type="password" class="form-control" name="password" required <?php if(isset($_SESSION['changePhone_status']) && $_SESSION['changePhone_status'] == 1) echo'style="border-color:red"';?>>
                        <?php if(isset($_SESSION['changePhone_status']) && $_SESSION['changePhone_status'] == 1) 
                        echo
                        '<p>Wrong Password</p>'
                        ;?>
                    </div>
                    <button class="btn btn-primary btn-sm mt-2 submitBtn" type="submit">Submit</button>
                </form>
            </div>
            <hr>
            <div class="d-flex changeAccountInfo">
                <h6 class="font-weight-bold">Password:</h6>
                <button class="btn btn-dark btn-sm changebtn" id="changePassword">Change</button>
            </div>
            <p>************</p>
            <div class="hidden<?php if(isset($_SESSION['changePassword_status'])) echo'no';?> changePasswordSection">
                <form action="./php/changePassword.php" method="POST">
                    <div class="form-floating">
                        <label class="font-weight-bold m-0" for="password">*Old Password</label>
                        <input type="password" class="form-control" name="oldPassword" required <?php if(isset($_SESSION['changePassword_status']) && $_SESSION['changePassword_status'] == 2) echo'style="border-color:red"';?>>
                        <?php if(isset($_SESSION['changePassword_status']) && $_SESSION['changePassword_status'] == 2) 
                        echo
                        '<p>Wrong Password</p>'
                        ;?>
                    </div>
                    <div class="form-floating">
                        <label class="font-weight-bold m-0" for="password">*New Password</label>
                        <input type="password" class="form-control" name="newPassword" required <?php if(isset($_SESSION['changePassword_status']) && $_SESSION['changePassword_status'] == 1) echo'style="border-color:red"';?>>
                        <?php if(isset($_SESSION['changePassword_status']) && $_SESSION['changePassword_status'] == 1) 
                        echo
                        '<p>The Passoword length must be more than 8</p>'
                        ;?> 
                    </div>
                    <div class="form-floating">
                        <label class="font-weight-bold m-0" for="password">*New Password Again</label>
                        <input type="password" class="form-control" name="newPasswordAgain" required <?php if(isset($_SESSION['changePassword_status']) && $_SESSION['changePassword_status'] == 3) echo'style="border-color:red"';?>>
                        <?php if(isset($_SESSION['changePassword_status']) && $_SESSION['changePassword_status'] == 3) 
                        echo
                        '<p>Incorrect</p>'
                        ;?>
                    </div>
                    <button class="btn btn-primary btn-sm mt-2 float-right" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    document.querySelector('#phoneNumber').addEventListener('keyup', (element) => {
        var phoneNumber = document.querySelector('#phoneNumber').value;

        var valid = !isNaN(
            phoneNumber); //check if the phone number does not contain text using isNaN function.

        //if the phone number length is greater than 2, check the if the first three digits are valid jordanian compainies.
        if (phoneNumber.length > 2) {
            var firstThreeDigits = phoneNumber[0] + phoneNumber[1] + phoneNumber[2];
            if (firstThreeDigits !== "079" && firstThreeDigits !== "078" && firstThreeDigits !== "077")
                valid = !valid;
        }

        //check if the phone number length is valid (10 digits)
        if ((phoneNumber.length > 0 && phoneNumber.length < 10) || !valid) {
            document.querySelector('.checkPhoneNumber').innerHTML = "*Invalid phone number.";
            document.querySelector('.submitBtn').disabled = true;
        } else {
            document.querySelector('.checkPhoneNumber').innerHTML = "";
            document.querySelector('.submitBtn').disabled = false;
        }
    });
    document.querySelectorAll('.hidden').forEach(element =>{element.style.display = "none"})
    document.querySelectorAll('.changebtn').forEach(element => {
        element.addEventListener('click', (e) => {
            e.preventDefault();
            var sectionClass = "." + element.id + "Section";
            var sectionStatus = document.querySelector(sectionClass).style.display;
            if (element.id == "changeAddress") {
                if (sectionStatus == "none")
                    document.querySelector('.Unhidden').style.display = "none";
                else 
                    document.querySelector('.Unhidden').style.display = "block";
            }
            if (sectionStatus == "none")
                document.querySelector(sectionClass).style.display = "block";
            else
                document.querySelector(sectionClass).style.display = "none";
        });
    });
</script>
<?php
unset($_SESSION["changePassword_status"]);
unset($_SESSION["changeEmail_status"]);
unset($_SESSION["changePhone_status"]);
include("./footer.php");
?>