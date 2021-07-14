<?php
require("./db.php");
// debug($err_msg["email"]);
if(!empty($err_msg["first_name"])){
    debug($err_msg["first_name"]);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css"
        integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="./app.css"> -->
    <title>TIPS</title>
</head>

<body>
    <div class="l-wrap">
        <section class="c-form p-signup">
            <header class="c-header">TIPS</header>
            <form class="my-20" id="js-form" action="">
                <div class="p-error-txt"></div>
                <div class="p-name-area between flex">
                    <div class="c-field mb-20 flex">
                        <label>First Name</label>
                        <input id="first_name" name="first_name" type="text" placeholder="First Name">
                        <span class="p-error-txt firstname_err"></span>
                    </div>
                    <div class="c-field mb-20 flex">
                        <label>Last Name</label>
                        <input id="last_name" name="last_name" type="text" placeholder="Last Name">
                        <span class="p-error-txt lastname_err"></span>
                    </div>
                </div>
                <div class="c-field mb-20 flex">
                    <label>Email Adress</label>
                    <input id="email" name="email" type="text" placeholder="email">
                    <span class="p-error-txt email_err"></span>
                </div>
                <div class="c-field mb-20 flex">
                    <label>Password</label>
                    <input id="password" name="password" type="password" placeholder="password">
                    <span class="p-error-txt pass_err"></span>
                    <!-- <i class="fas fa-eye eye"></i> -->
                </div>
                <div class="c-field mb-20 flex">
                    <label>Password(re-entering)</label>
                    <input id="repassword" name="repassword" type="password" placeholder="password(re-entering)">
                    <span class="p-error-txt re_pass_err"></span>
                    <!-- <i class="fas fa-eye eye"></i> -->
                </div>
                <div class="c-btn mb-20 flex">
                    <input class="js-btn" type="submit" value="Sign Up">
                </div>
                <p class="p-confirm-txt">Already signed up? <a href="./login.php">Login</a></p>
            </form>
        </section>
    </div>
    <script src="./bundle.js"></script>
    <script src="../src/js/main.js"></script>
</body>

</html>