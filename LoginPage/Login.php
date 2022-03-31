<?php include_once("../Const.php"); ?>
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
        <section class="container">
            <section class="forms">
                <section class="form login">
                    <span class="title">Login</span>

                    <form method="post" action="../FunctionPHP/connect.php">
                        <article class="input-field">
                            <input type="text" id="userLogin" name="userLogin" placeholder="Enter your email" required>
                            <i class="uil uil-envelope"></i>
                        </article>

                        <article class="input-field">
                            <input type="password" id="userPassword" name="userPassword" class="password" placeholder="Enter your password" required>
                            <i class="uil uil-lock icon"></i>
                            <i class="uil uil-eye-slash showHidePw"></i>
                        </article>

                        <article style="visibility:hidden" class="checkbox-text">
                            <article class="checkbox-content">
                                <input type="checkbox" id="logCheck">
                                <label for="logCheck" class="text">Remember me</label>
                            </article>

                            <a href="#" class="text">Forgot password?</a>
                        </article>
                        <article class="input-field button">
                            <input type="submit" value="Login Now">
                        </article>
                    </form>

                    <article style="visibility:hidden" class="login-signup">
                        <span class="text">Not a member?
                            <a href="#" class="text signup-link">Sign up now</a>
                        </span>
                    </article>
                    </article>


                    <article class="form signup">
                        <span class="title">Registration</span>
                        </span>
                    </article>
                </section>
            </section>
        </section>
    </main>
    <script src="JavaScriptSign.js"></script>

</html>
</body>

</html>