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
    <link rel="stylesheet" href="./app.css">
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
    <script>
    const form = document.querySelector("#form");
    const errTxt = document.querySelector(".error-txt");
    const firstnameErr = document.querySelector(".firstname_err");
    const lastnameErr = document.querySelector(".lastname_err");
    const emailErr = document.querySelector(".email_err");
    const passErr = document.querySelector(".pass_err");
    const firstName = document.querySelector("#first_name");
    const lastName = document.querySelector("#last_name");
    const email = document.querySelector("#email");
    const pass = document.querySelector("#password");
    const btn = document.querySelector(".btn");

    form.onsubmit = (e) => {
        e.preventDefault();
    }

    btn.onclick = (e) => {
        const obj = {};
        const formData = new FormData(form);

        formData.forEach((value, key) => obj[key] = value);
        const jsonFormData = JSON.stringify(obj);
        fetch("http://localhost:8888/Chat/insert.php", {
            method: "POST",
            mode: "cors",
            headers: {
                "Content-Type": "application/json"
            },
            body: jsonFormData
        }).then((res) => {
            return res.json();
        }).then((json) => {
            if (Object.keys(json).length === 0) {
                window.location.href = "home.php";
            } else {
                errTxt.style.display = "block";
                firstnameErr.textContent = json.first_name;
                lastnameErr.textContent = json.last_name;
                emailErr.textContent = json.email;
                passErr.textContent = json.password;
                errTxt.textContent = json.common;
            }
        }).catch((err) => {
            console.log(err);
        });
    }
    </script>
</body>

</html>