<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/style3.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
            text-align-last: center;
        }

        body {
            min-height: 100vh;
            background: url("blood1.png") no-repeat;
            background-size: cover;
            background-attachment: fixed;
            background-position: center;
        }


        a {
            text-decoration: none;
        }

        li {
            list-style: none;
        }

        h1,
        h2 {
            color: #444;
        }

        h3 {
            color: rgb(255 0 0);
        }



        table {
            padding: 10px;
        }

        th,
        td {
            text-align: left;
            padding: 8px;
        }


        .c {
            position: absolute;
            right: 0;
            width: 100%;
            height: 100vh;
        }

        .c .content {
            position: relative;
            margin-top: 10vh;
            min-height: 90vh;
        }

        .c .content .cards {
            padding: 20px 15px;
            display: inline-flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            margin-top: -7px;
        }

        .c .content .cards .card {
            width: 250px;
            height: 159px;
            background: white;
            margin: 20px 10px;
            display: flex;
            align-items: center;
            justify-content: space-around;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            border-radius: 25px;
            justify-content: center;
        }



        @media screen and (max-width:536px) {
            .brand-name h1 {
                font-size: 16px;
            }

            .container .content .cards {
                justify-content: center;
            }
        }
    </style>
</head>

<body>
    <div class="main_box">
        <div class="c">
            <div class="content">
                <div class="cards">
                    <div class="card">
                        <div class="box">
                            <h1>21</h1>
                            <h3>Uesrs</h3>
                        </div>
                    </div>
                    <div class="card">
                        <div class="box">
                            <h1>30</h1>
                            <h3>Recent Visitor</h3>
                        </div>
                        <div class="icon-case">
                        </div>
                    </div>
                    <div class="card">
                        <div class="box">
                            <h1>34</h1>
                            <h3>Orders</h3>
                        </div>
                        <div class="icon-case">
                        </div>
                    </div>
                    <div class="card">
                        <div class="box">
                            <h1>5000</h1>
                            <h3>Income</h3>
                        </div>
                        <div class="icon-case">
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                    <li><a href="conatct.html">Message</a></li>
                </ul>
            </div>
        </div>


        <h1 class="h"> Dashboard </h1>

       
    </div>
</body>

</html>