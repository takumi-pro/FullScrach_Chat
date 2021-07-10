<?php
require("./db.php");
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
                <div class="error-txt">This is error message!!</div>
                <div class="name-area">
                    <div class="field">
                        <label for="first_name">First Name</label>
                        <input id="first_name" name="first_name" type="text" placeholder="First Name">
                    </div>
                    <div class="field">
                        <label for="last_name">Last Name</label>
                        <input id="last_name" name="last_name" type="text" placeholder="Last Name">
                    </div>
                </div>
                <div class="field">
                    <label for="email">Email Adress</label>
                    <input id="email" name="email" type="text" placeholder="email">
                </div>
                <div class="field">
                    <label for="password">Password</label>
                    <input id="password" name="password" type="password" placeholder="password">
                </div>
                <!-- <div class="field">
                    <label>Select Image</label>
                    <input name="file" type="file" >
                </div> -->
                <div class="field">
                    <input class="btn" type="submit" value="Sign Up">
                </div>
                <p>Already signed up? <a href="#">Login</a></p>
            </form>
        </section>
    </div>
    <script>
    const form = document.querySelector("#form");
    const firstName = document.querySelector("#first_name");
    const lastName = document.querySelector("#last_name");
    const email = document.querySelector("#email");
    const pass = document.querySelector("#password");
    const btn = document.querySelector(".btn");

    form.onsubmit = (e) => {
        e.preventDefault();
        console.log("submit");
    }

    btn.onclick = (e) => {
        console.log("click");

        const firstNameValue = firstName.value;
        const lastNameValue = lastName.value;
        const emailValue = email.value;
        const passValue = pass.value;

        const obj = {};
        const formData = new FormData(form);
        // formData.append("name", "takumi");
        console.log(formData);
        formData.forEach((value, key) => obj[key] = value);
        const jsonFormData = JSON.stringify(obj);
        console.log("fetch");
        fetch("http://localhost:8888/Chat/insert.php", {
            method: "POST",
            mode: "cors",
            headers: {
                "Content-Type": "application/json"
            },
            body: jsonFormData
        }).then((res) => {
            console.log("su");
        }).catch((err) => {
            console.log(err);
        });
    }
    </script>
</body>

</html>