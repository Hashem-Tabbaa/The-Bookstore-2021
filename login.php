<?php
  session_start();
  if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true){
      header("location: ./index.php");
      exit;
  }
  include("./header.php");
?>
 <div class="login p-5 w-100">
        <div class="w-100">
            <main class="form-signin m-auto w-75">
                <form method="POST" action="./php/authentication.php">
                    <img src="./images/user-login.png" alt="">
                    <h1 class="h3 mt-3 fw-normal">Please sign in</h1>

                    <div class="form-floating mb-3 mt-3">
                        <label class="font-weight-bold" for="email">Email address</label>
                        <?php
                            if(isset($_SESSION["login_status"]) && $_SESSION["login_status"] == "Invalid username"){
                                echo '<input type="email" class="form-control" id="email" placeholder="name@example.com" name="email" style="border-color:red;">'.$_SESSION["login_status"];
                            }else{
                                echo'
                                <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email">
                                ';
                            }
                        ?>
                    </div>
                    <div class="form-floating">
                        <label class="font-weight-bold" for="password">Password</label>
                        <?php
                            if(isset($_SESSION["login_status"]) && $_SESSION["login_status"] == "Wrong Password"){
                                echo '<input type="password" class="form-control" id="password" placeholder="Password" name="password" style="border-color:red;">'.$_SESSION["login_status"];
                            }else{
                                echo'
                                <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                                ';
                            }
                        ?>
                    </div>
                    <button class="login-btn w-100 btn btn-lg btn-primary mt-3" type="submit">Login</button>
                </form>
                <h5 class="create-account-text mt-4">New User?</h5>
                <a href="./signup.php" class="signup-btn w-100 btn btn-lg btn-primary mt-3" type="submit">Create New Account</a>
            </main>

        </div>
        <!-- <div class="login-image">
            <img src="./images/login-book.png" alt="">
        </div> -->
    </div>
<?php
  include("./footer.php")
?>