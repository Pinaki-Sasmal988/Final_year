<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <link rel="stylesheet" href="css/style2.css">

    <style>
        * {
            text-align: center;
        }

        body {
            background-image: url(/blood1.png);
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
            background-position: center;
            margin: 0;
        }

        .container {
            padding: 20px;
            margin-left: 18%;
            width: 80%;
        }

        .card {
            padding: 0%;
            border-radius: 100px;
            margin-block-end: 35px;
            background-color: rgb(251, 246, 246)
        }

        .card-body {
            -webkit-box-flex: 1;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            padding: 1.25rem;
            background-color: red;
            border-radius: 25px;
        }


        .h {
            color: #fb0909;
            border-block-end: 3px solid;
            border-block-end-width: 2px;
            margin-left: 30%;
            margin-right: 30%;
            text-align: center;
            font-size: 50px;
            font-family: ui-sans-serif;
            margin-bottom: 48px;
        }

        .text-center {
            text-align: center;
            font-size: 50px;
            font-family: ui-sans-serif;
        }

        .updateForm {
            display: flex;
            justify-content: center;
            margin-bottom: 5%;
        }

        .btn_one {
            height: 0;
            width: 0;
        }

        .btn_two {
            height: 0;
            width: 0;
        }

        .bt {
            margin-top: 6px;
        }
    </style>

</head>

<body>

    <div class="main_box">
        <input type="checkbox" id="check">
        <div class="btn_one">
            <label for="check">
                <i class="fas fa-bars"></i>
            </label>
        </div>
        <div class="sidebar_menu">
            <div class="first">
                <a href="#">Blood Bank</a>
            </div>
            <div class="btn_two">
                <label for="check">
                    <i class="fas fa-times"></i>
                </label>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="Dashboard">Dashboard</a></li>
                    <li><a href="Bloodstock">Blood Stock</a></li>
                    <li><a href="order">Blood Orders</a></li>
                    <li><a href="#">Notification</a></li>
                    <li><a href="#">Message</a></li>
                    <li><a href="/Logout">logout</a></li>
                </ul>
            </div>
        </div>

        <h1 class="h"> Blood Stocks </h1>



        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="blood">
                                <h2>A+ <i class="fas fa-tint"></i></h2>
                            </div><br><br>
                            <div>
                                22 ml (Available)
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card ">
                        <div class="card-body">
                            <div class="blood">
                                <h2>B+ <i class="fas fa-tint"></i></h2>
                            </div><br><br>
                            <div>
                                25 ml (Available)
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card ">
                        <div class="card-body">
                            <div class="blood">
                                <h2>O+ <i class="fas fa-tint"></i></h2>
                            </div><br><br>
                            <div>
                                19 ml (Available)
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card ">
                        <div class="card-body">
                            <div class="blood">
                                <h2>AB+ <i class="fas fa-tint"></i></h2>
                            </div><br><br>
                            <div>
                                27 ml (Available)
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-3">
                    <div class="card ">
                        <div class="card-body">
                            <div class="blood">
                                <h2>A- <i class="fas fa-tint"></i></h2>
                            </div><br><br>
                            <div>
                                40 ml (Available)
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card ">
                        <div class="card-body">
                            <div class="blood">
                                <h2>B- <i class="fas fa-tint"></i></h2>
                            </div><br><br>
                            <div>
                                15 ml (Available)
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card ">
                        <div class="card-body">
                            <div class="blood">
                                <h2>O- <i class="fas fa-tint"></i></h2>
                            </div><br><br>
                            <div>
                                19 ml (Available)
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card ">
                        <div class="card-body">
                            <div class="blood">
                                <h2>AB- <i class="fas fa-tint"></i></h2>
                            </div><br><br>
                            <div>
                                35 ml (Available)
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <br>

            <h1 class="h"> Update Stocks </h1>

            <div class="updateForm justify-item-center">

                <form class="form-inline" method="POST">

                    <div class="form-group mx-sm-3 mb-6">

                        <select name="bloodgroup" class="form-control">
                            <option disabled="disabled" selected="selected">Choose Blood Group</option>
                            <option>O+</option>
                            <option>O-</option>
                            <option>A+</option>
                            <option>A-</option>
                            <option>B+</option>
                            <option>B-</option>
                            <option>AB+</option>
                            <option>AB-</option>
                        </select>
                    </div>
                    <div class="form-group mx-sm-3 mb-6">

                        <input type="number" class="form-control" name="unit" placeholder="Unit" min="1" required>
                    </div>
                    <div class="bt"><button type="submit" class="btn btn-primary mb-2">Update</button></div>

                </form>
            </div>

        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>