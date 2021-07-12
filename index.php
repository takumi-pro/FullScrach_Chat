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
    <div class="wrap">
        <section class="form signup">
            <header class="header">TIPS</header>
            <form id="form" action="">
                <div class="error-txt"></div>
                <div class="name-area flex">
                    <div class="field">
                        <label>First Name</label>
                        <input id="first_name" name="first_name" type="text" placeholder="First Name">
                        <span class="error-txt firstname_err"></span>
                    </div>
                    <div class="field">
                        <label>Last Name</label>
                        <input id="last_name" name="last_name" type="text" placeholder="Last Name">
                        <span class="error-txt lastname_err"></span>
                    </div>
                </div>
                <div class="field">
                    <label>Email Adress</label>
                    <input id="email" name="email" type="text" placeholder="email">
                    <span class="error-txt email_err"></span>
                </div>
                <div class="field">
                    <label>Password</label>
                    <input id="password" name="password" type="password" placeholder="password">
                    <span class="error-txt pass_err"></span>
                    <!-- <i class="fas fa-eye eye"></i> -->
                </div>
                <div class="field">
                    <input class="btn" type="submit" value="Sign Up">
                </div>
                <p class="toSignup">Already signed up? <a href="#">Login</a></p>
            </form>
        </section>
    </div>
    <script src="./dist/bundle.js"></script>
</body>

</html>