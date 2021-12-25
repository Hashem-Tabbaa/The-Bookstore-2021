<?php
  include("./partials/header.php")
?>
 <div class="login p-5 w-100">
        <div class="w-100">
            <main class="form-signin m-auto w-75">
                <form>
                    <img src="..../public/images/user-login.png" alt="">
                    <h1 class="h3 mt-3 fw-normal">Please sign in</h1>

                    <div class="form-floating mb-3 mt-3">
                        <label class="font-weight-bold" for="email">Email address</label>
                        <input type="email" class="form-control" id="email" placeholder="name@example.com">
                    </div>
                    <div class="form-floating">
                        <label class="font-weight-bold" for="password">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Password">
                    </div>
                    <button class="login-btn w-100 btn btn-lg btn-primary mt-3" type="submit">Login</button>
                </form>
                <h5 class="create-account-text mt-4">New User?</h5>
                <a href="signup.html" class="signup-btn w-100 btn btn-lg btn-primary mt-3" type="submit">Create New Account</a>
            </main>

        </div>
        <div class="login-image">
            <img src="..../public/images/login-book.png" alt="">
        </div>
    </div>
<?php
  include("./partials/footer.php")
?>