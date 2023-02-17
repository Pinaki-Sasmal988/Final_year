<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>make order</title>
    <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/style3.css">
    <style>
        /* * {
            text-align: center;
        } */

        body {
            background-image: url(images/blood1.png);
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
            background-position: center;
            margin: 0;
        }

        .container {
            padding: 0px;
            width: 70%;
            margin-left: 25%;
        }

        .card {
            padding: 0%;
            border-radius: 100px;
            margin-block-end: 30px;
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
                <a href="#"><h6>{{ Session::get('value')['bank_name'] }}</h6></a>
            </div>
            <div class="btn_two">
                <label for="check">
                    <i class="fas fa-times"></i>
                </label>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="Dashboard">Dashboard</a></li>
                    <li><a href="/bloodstock">Blood Stock</a></li>
                    <li><a href="order">Blood Orders</a></li>
                    <li><a href="#">Notification</a></li>
                    <li><a href="#"> Message </a></li>
                    <li><a href="/Logout">logout</a></li>
                </ul>
            </div>
        </div>

        <h1 class="h">All Orders </h1>
        <section id="order">
            <div class="order-box">
                <div class="order-details">
                    <p> <strong>Name:</strong> pinaki sasmal</p>
                    <p> <strong>Mobile No:</strong> 8487454554</p>
                    <p> <strong>Email:</strong> pinaki@gmail.com</p>
                    <p> <strong>Full Address:</strong> B-45 Maheshtala,Kolkata</p>
                    <p> <strong>Blood Group:</strong> O+</p>
                    <p> <strong>Unit:</strong> 200ml</p>
                </div>
                <button class="btn-order">Take Order</button>
                <button class="btn-order">Cancel Order</button>
            </div>
            <div class="order-box">
                <div class="order-details">
                    <p> <strong>Name:</strong> souvik halder</p>
                    <p> <strong>Mobile No:</strong> 8087454054</p>
                    <p> <strong>Email:</strong> souvik@gmail.com</p>
                    <p> <strong>Full Address:</strong> B-45 Maheshtala,Kolkata</p>
                    <p> <strong>Blood Group:</strong> A+</p>
                    <p> <strong>Unit:</strong> 300ml</p>
                </div>
                <button class="btn-order">Take Order</button>
                <button class="btn-order">Cancel Order</button>
            </div>
            <div class="order-box">
                <div class="order-details">
                    <p> <strong>Name:</strong> subha bangal</p>
                    <p> <strong>Mobile No:</strong> 9733241568</p>
                    <p> <strong>Email:</strong> subha@gmail.com</p>
                    <p> <strong>Full Address:</strong> B-45 Maheshtala,Kolkata</p>
                    <p> <strong>Blood Group:</strong> O-</p>
                    <p> <strong>Unit:</strong> 300ml</p>
                </div>
                <button class="btn-order">Take Order</button>
                <button class="btn-order">Cancel Order</button>
            </div>
        </section>

        {{-- <section id="pagination" class="section-p1">
            <a href="#">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="order.html"><i class="fal fa-long-arrow-alt-right"></i></a>
        </section> --}}
</body>

</html>