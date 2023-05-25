<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <style>
        body {
            background-image: url('images/OIP.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: Arial, sans-serif;
        }

        .container {
            /* background-color: rgba(255, 255, 255, 0.8); */
            padding: 20px;
            margin-left: 7%;
            margin-bottom: 64%;
            border-radius: 25px;
            max-width: 400px;
            height: 214px;
            width: 143%;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }

        h2 {
            text-align: center;
            justify-content: center;
            color: #800000;
            margin-right: -166px;
            margin-bottom: 40px;
            font-family: serif;
            font-size: 34px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #800000;
            font-weight: bold;
        }

        .register-form {
            width: 100%;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #f5a6a6;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 3px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #B22222;
        }

        .forgot-password {
            text-align: center;
            margin-top: 10px;
            color: #800000;
        }
    </style>
</head>

<body>
    <div class="main">
        <div class="container1">
            <div class="signup-content">
                <div class="signup-form">
                    <h2 class="form-title">Bank Login</h2>

                    <form method="POST" action="/bankLogin" class="register-form" id="register-form">
                        @csrf
                        <div class="container">

                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label> <input type="text" name="email" id="email" placeholder="User Id/Email" required />
                            </div>
                            <div class="form-group">
                                <label for="contact"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="text" name="password" id="password" placeholder="Enter Password" required />
                            </div>
                            <div class="form-group">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Login" />
                            </div>

                            <div class="forgot-password">
                                <a href="#">Forgot Password?</a>
                            </div>
                        </div>

                    </form>
                </div>




            </div>
        </div>



    </div>
</body>

</html>