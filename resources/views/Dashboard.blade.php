<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/style3.css">
    <link rel="stylesheet" href="css/popup.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
        .input-field input, select {
    outline: none;
    font-size: 14px;
    font-weight: 400;
    color: #333;
    border-radius: 5px;
    border: 1px solid #aaa;
    padding: 0 15px;
    height: 42px;
    width: 200px;
    margin: 4px 0;
}
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
            text-align-last: center;
        }

        body {
            min-height: 100vh;
            background: url("images/blood1.png") no-repeat;
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
            width: 70%;
            margin-left: 30%;
            /* height: 100vh; */
            height: auto;
        }

        .c .content {
            position: relative;
            margin-top: 5vh;
            width: 90%;
            min-height: 90vh;
        }

        .c .content .cards {
            /* padding: 15px 10px; */
            display: inline-flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            margin-top: -7px;
        }

        .c .content .cards .card {
            width: 170px;
            height: 130px;
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
{{-- @if (Session::get('message'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
 {{Session::get('message')}}
 @else {{ "" }}
 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>   
@endif --}}
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
                <a href="#"> <h6><i>{{ Session::get('value')['bank_name'] }}</i></h6></a>
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
                    <li><a href="showorder">Blood Orders</a></li>
                    <li><a href="#">Notification</a></li>
                    <li><a href="#">Message</a></li>
                    <li><a href="/Logout">logout</a></li>
                </ul>
            </div>
        </div>
        {{-- <h4><i>Welcome {{ Session::get('value')['bank_name'] }}</i></h4> --}}
        <div class="c">
            <div class="content">
                
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
                </div>
            
                
            </div>
        </div>
        


        

       
    </div>
</body>

</html>