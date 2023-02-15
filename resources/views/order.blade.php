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
                    <li><a href="Bloodstock">Blood Stock</a></li>
                    <li><a href="order">Blood Orders</a></li>
                    <li><a href="#">Notification</a></li>
                    <li><a href="conatct"> Message </a></li>
                    <li><a href="/Logout">logout</a></li>
                </ul>
            </div>
        </div>

        <h1 class="h">All Orders </h1>
        <section id="order">
            <div class="order-box">
                <div class="order-details">
                    <p> <strong>Name:</strong> Lal Sing</p>
                    <p> <strong>Mobile No:</strong> 8487454554</p>
                    <p> <strong>Email:</strong> example@gmail.com</p>
                    <p> <strong>Full Address:</strong> B-45 Maheshtala,Kolkata</p>
                    <p> <strong>Blood Group:</strong> O+</p>
                    <p> <strong>Unit:</strong> 300ml</p>
                </div>
                <div class="order-details">
                    <p> <b> 13/01/23 10:34:21 PM Monday </b></p>
                </div>
                <button class="btn-order">Take Order</button>
            </div>
            <div class="order-box">
                <div class="order-details">
                    <p> <strong>Name:</strong> Lal Sing</p>
                    <p> <strong>Mobile No:</strong> 8487454554</p>
                    <p> <strong>Email:</strong> example@gmail.com</p>
                    <p> <strong>Full Address:</strong> B-45 Maheshtala,Kolkata</p>
                    <p> <strong>Blood Group:</strong> O+</p>
                    <p> <strong>Unit:</strong> 300ml</p>
                </div>
                <div class="order-details">
                    <p> <b> 13/01/23 10:34:21 PM Monday </b> </p>
                </div>
                <button class="btn-order">Take Order</button>
            </div>
            <div class="order-box">
                <div class="order-details">
                    <p> <strong>Name:</strong> Lal Sing</p>
                    <p> <strong>Mobile No:</strong> 8487454554</p>
                    <p> <strong>Email:</strong> example@gmail.com</p>
                    <p> <strong>Full Address:</strong> B-45 Maheshtala,Kolkata</p>
                    <p> <strong>Blood Group:</strong> O+</p>
                    <p> <strong>Unit:</strong> 300ml</p>
                </div>
                <div class="order-details">
                    <p> <b> 13/01/23 10:34:21 PM Monday </b></p>
                </div>
                <button class="btn-order">Take Order</button>
            </div>
            <div class="order-box">
                <div class="order-details">
                    <p> <strong>Name:</strong> Lal Sing</p>
                    <p> <strong>Mobile No:</strong> 8487454554</p>
                    <p> <strong>Email:</strong> example@gmail.com</p>
                    <p> <strong>Full Address:</strong> B-45 Maheshtala,Kolkata</p>
                    <p> <strong>Blood Group:</strong> O+</p>
                    <p> <strong>Unit:</strong> 300ml</p>
                </div>
                <div class="order-details">
                    <p> <b> 13/01/23 10:34:21 PM Monday </b> </p>
                </div>
                <button class="btn-order">Take Order</button>
            </div>
        </section>

        <section id="pagination" class="section-p1">
            <a href="#">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="order.html"><i class="fal fa-long-arrow-alt-right"></i></a>
        </section>
</body>

</html>