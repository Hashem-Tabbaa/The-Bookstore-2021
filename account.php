<?php
include("./header.php")
?>
<div class="accountPage d-flex p-5 ">
    <div class="addressInfo card">
        <h4 class="card-title">Address Information</h4>
        <hr class="m-0">
        <div class="card-body text-left d-flex justify-content-between">
            <div class="changeAccountInfo addressInfoSection">
                <div class="Unhidden">
                    <h6 class="font-weight-bold">City:</h6>
                    <p>Amman</p>
                    <h6 class="font-weight-bold">Place</h6>
                    <p>Tlaa Al Ali</p>
                    <h6 class="font-weight-bold">Street Name</h6>
                    <p>Rifaa Al Ansari</p>
                    <h6 class="font-weight-bold">Building Number</h6>
                    <p>25</p>
                </div>
                <div class="hidden changeAddressSection">
                    <form action="" method="POST">
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
                            <input id="StreetName" type="text" class="form-control" name="place" required>
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
            <p>Hashem_Tabbaa@hotmail.com</p>
            <div class="hidden changeEmailSection">
                <form action="" method="POST">
                    <div class="form-floating">
                        <label class="font-weight-bold m-0" for="email">*New Email</label>
                        <input type="email" class="form-control mb-2" id="email" name="email" required>
                    </div>
                    <div class="form-floating">
                        <label class="font-weight-bold m-0" for="password">*Password</label>
                        <input type="password" class="form-control" name="password" required>
                    </div>
                    <button class="btn btn-primary btn-sm mt-2" type="submit">Submit</button>
                </form>
            </div>
            <hr>
            <div class="d-flex changeAccountInfo">
                <h6 class="font-weight-bold">Phone Number:</h6>
                <button class="btn btn-dark btn-sm changebtn" id="changePhone">Change</button>
            </div>
            <p>0795697750</p>
            <div class="hidden changePhoneSection">
                <form action="" method="POST">
                    <div class="form-floating mt-3">
                        <label class="font-weight-bold" for="phoneNumber">Phone Number</label>
                        <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber">
                        <p class="checkPhoneNumber"></p>
                    </div>
                    <div class="form-floating">
                        <label class="font-weight-bold m-0" for="password">*Password</label>
                        <input type="password" class="form-control" name="password" required>
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
            <div class="hidden changePasswordSection">
                <form action="" method="POST">
                    <div class="form-floating">
                        <label class="font-weight-bold m-0" for="password">*Old Password</label>
                        <input type="password" class="form-control" name="password" required>
                    </div>
                    <div class="form-floating">
                        <label class="font-weight-bold m-0" for="password">*New Password</label>
                        <input type="password" class="form-control" name="password" required>
                    </div>
                    <div class="form-floating">
                        <label class="font-weight-bold m-0" for="password">*New Password Again</label>
                        <input type="password" class="form-control" name="password" required>
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
include("./footer.php")
?>