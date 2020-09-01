<!doctype html>
<html lang="en">

<head>
    <title>My store</title>
    <link rel="SHORTCUT ICON" href="./images/image-bg/LogoN-Black.png"> <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link type="text/css" rel="stylesheet" href="./libs/fontawesome-free-5.13.0-web/css/all.css">
    <link type="text/css" rel="stylesheet" href="./libs/bootstrap4/bootstrap-4.5.0-dist/css/bootstrap.css">
    <link type="text/css" rel="stylesheet" href="./libs/css/style.css">
    <script src="./libs/jquery/jquery-3.5.1.min.js"></script>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Recursive:wght@700&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <style>
        body {

            background: url("./images/image-bg/bg-login.jpg");
            no-repeat center center fixed;
            background-size: cover;
            font-size: 62.5%;
            box-sizing: border-box;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        input {
            outline: none;
            border: none;
        }

        .container {
            font-family: 'Recursive', sans-serif;
            background-color: #000000 !important;
            width: 25rem !important;
            height:  !important;
            padding: 1rem 2rem !important;
            display: flex !important;
            flex-direction: column !important;
            align-items: center !important;
            justify-content: center !important;
            border-radius: 1rem !important;
        }

        form {
            width: 100%;
        }

        .header__icon {
            text-align: center;
            align-items: center;
            justify-content: center;
            color: #ffffff;
            font-size: 5rem;
        }

        .input-control {
            outline: none;
        }

        .input-group:hover>input {
            background-color: #dddddd !important;

        }

        .input-group-text {
            width: 2.5rem !important;
        }

        .form__submit button {
            width: 100%;
            height: 100%;
            border: none;
            border-radius: 0.5rem;
            cursor: pointer;
            outline: none;
            transition: all 0.4s;
        }

        .form__submit button p {
            color: #000000;
            font-size: 2rem;
            margin: 0px;
            transition: all 0.4s;
        }

        .form__submit button p {
            color: #000000;
            transition: all 0.4s;
        }

        .form__submit button:hover {
            background-color: #000000;
            transition: all 0.4s;
            color: #fff;
            transition: 0.45s;
        }

        .form__submit button:hover p {
            text-decoration: none;
            color: #fff;
            transition: all 0.4s;
        }

        .logError {
            color: red;
            margin: 0px;
            font-size: 0.8rem;
        }

        .btn {
            width: 100%;
            text-align: center;
            color: #ffffff !important;
        }

        .btn-link {
            font-size: 1.5rem;
            color: #bebebe !important;
        }

        .form {
            font-size: 13px;
            color: #fff !important;

        }
    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="header__icon">
            <p>Register</p>
        </div>
        <form>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fas fa-user"></i>
                        </div>
                    </div>
                    <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Fullname">
                    <p class="logError" id="logErrorUsername"></p>
                </div>
                <div class="input-group mt-4">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fas fa-user"></i>
                        </div>
                    </div>
                    <input type="text" class="form-control" name="username" id="username" onchange="validate()" placeholder="Username">
                    <p class="logError" id="logErrorUsername"></p>
                </div>
                <div class="input-group mt-4">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fas fa-envelope"></i>
                        </div>
                    </div>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                    <p class="logError" id="logErrorEmail"></p>
                </div>
                <div class="input-group mt-4">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fas fa-key"></i>
                        </div>
                    </div>
                    <input type="password" class="form-control" name="password" id="password" onchange="validate()" placeholder="Password">

                </div>
                <p class="logError" id="logErrorPassword"></p>
                <div class="input-group mt-4">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fas fa-key"></i>
                        </div>
                    </div>
                    <input type="password" class="form-control" name="repassword" id="repassword" onchange="validate()" placeholder="Repassword">

                </div>
                <p class="logError" id="logErrorRepassword"></p>
            </div>
            <div class="form">
                <p class="">By creating an account you agree to our <a href="">Term of Use</a> & <a href="">Privacy Policy.</a></p>
            </div>
            <div class="form__submit mt-3">
                <button onclick="confirm()" type="submit" id="submit" name="submit">
                    <p>Register</p>
                </button>
            </div>
            <div class="btn">
                <span>Or </span><a href="index.php?method=login" class="btn-link">Login</a>
            </div>
        </form>
    </div>



    <!-- Optional JavaScript -->
    <script>
        function checkbtn(check) {
            var btn = document.getElementById("submit");
            console.log(check);
            // check
            if (check >= 2) {
                btn.disabled = false;
            } else {
                btn.disabled = true
            }
        }
        checkbtn(0); //de luc vao phat no check luon de con disable btn
        function validate() {
            var username = document.getElementById("username");
            var logUser = document.getElementById("logErrorUsername");
            var email = document.getElementById("email");
            var logEmail = document.getElementById("logErrorEmail");
            var password = document.getElementById("password");
            var logPass = document.getElementById("logErrorPassword");
            var repassword = document.getElementById("repassword");
            var logRepass = document.getElementById("logErrorRepassword");

            var check = 0;

            // password /^[A-Za-z]\w{7,14}$/
            // console.log(password.value);
            // console.log(password.value.match(/^[A-Za-z0-9]\w{6,14}$/));
            var regexPass = /^[A-Za-z0-9]\w{6,14}$/;
            // pass
            if (password.value.match(regexPass) != null) {
                logPass.innerText = "";
                check++;
            } else {
                logPass.innerText = "Contain at least 6 characters, include number, lowercase character, uppercase character";
            }
            // repass
            if (password.value == repassword.value) {
                logRepass.innerText = "";
                check++;
            } else {
                logRepass.innerText = "Password does not match!";
            }
            //check 
            checkbtn(check);

        }

        function confirm() {
            setTimeout(function() {
                alert("ok");
            }, 1000);

        }
    </script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>