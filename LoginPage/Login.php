<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="StyleLoginpage.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <title>Log in</title>
</head>

<body>
    <main>
        <div class="container">
            <div class="forms">
                <div class="form login">
                    <span class="title">Login</span>

                    <form action="#">
                        <div class="input-field">
                            <input type="text" placeholder="Enter your email" required>
                            <i class="uil uil-envelope"></i>
                        </div>

                        <div class="input-field">
                            <input type="password" class="password" placeholder="Enter your password" required>
                            <i class="uil uil-lock icon"></i>
                            <i class="uil uil-eye-slash showHidePw"></i>
                        </div>

                        <div class="checkbox-text">
                            <div class="checkbox-content">
                                <input type="checkbox" id="logCheck">
                                <label for="logCheck" class="text">Remember me</label>
                            </div>

                            <a href="#" class="text">Forgot password?</a>
                        </div>
                        <div class="input-field button">
                            <input type="button" value="Login Now">
                        </div>
                    </form>

                    <div class="login-signup">
                        <span class="text">Not a member?
                            <a href="#" class="text signup-link">Sign up now</a>
                        </span>
                    </div>
                </div>


                <div class="form signup">
                    <span class="title">Registration</span>

                    <form action="#">
                        <div class="input-field">
                            <input type="text" placeholder="Enter your name" required>
                            <i class="uil uil-user"></i>
                        </div>
                        <div class="input-field">
                            <input type="text" placeholder="Enter your email" required>
                            <i class="uil uil-envelope"></i>
                        </div>

                        <div class="input-field">
                            <input type="password" placeholder="Create a password" required>
                            <i class="uil uil-lock icon"></i>
                        </div>
                        <div class="input-field">
                            <input type="password" class="password" placeholder="Confirm a password" required>
                            <i class="uil uil-lock icon"></i>
                            <i class="uil uil-eye-slash showHidePw"></i>
                        </div>

                        <div class="checkbox-text">
                            <div class="checkbox-content">
                                <input type="checkbox" id="signCheck">
                                <label for="signCheck" class="text">I accept all terms & conditions</label>
                            </div>
                        </div>

                        <div class="input-field button">
                            <input type="button" value="Register Now">
                        </div>
                    </form>

                    <div class="login-signup">
                        <span class="text">Already have an account?
                            <a href="#" class="text login-link">Login now</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="JavaScriptSign.js"></script>

</html>
</body>

</html>