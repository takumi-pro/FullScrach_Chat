<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css"
        integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="l-wrap">
        <section class="c-form p-signup">
            <header class="c-header">TIPS</header>
            <form class="my-20" id="js-form" action="">
                <div class="p-error-txt"></div>
                <div class="c-field mb-20 flex">
                    <label>Email Adress</label>
                    <input id="email" name="email" type="text" placeholder="email">
                    <span class="p-error-txt email_err"></span>
                </div>
                <div class="c-field mb-20 flex rel">
                    <label>Password</label>
                    <input id="password" name="password" type="password" placeholder="password">
                    <span class="p-error-txt pass_err"></span>
                    <i class="fas fa-eye eye"></i>
                </div>
                <div class="c-btn mb-20 flex">
                    <input class="js-btn" type="submit" value="Login">
                </div>
                <p class="p-confirm-txt">Already signed up? <a href="./index.php">Login</a></p>
            </form>
        </section>
    </div>
    <script src="./bundle.js"></script>
</body>

</html>