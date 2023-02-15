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
                    <li><a href="#">Message</a></li>
                    <li><a href="/Logout">logout</a></li>
                </ul>
            </div>
        </div>
        <h1 class="h"> Dashboard </h1><br><br>
        <h4><i>Insert Blood Unite Under The Form</i></h4>
        <div class="c">
            <div class="content">
                
                <form method="POST" action="/" >
                    @csrf
                    <div class="wholeform">
                        <div class="details personal">                            
                            <div class="fields">
                                <div class="input-field">
                                    <input type="hidden"  name="id" value="{{ Session::get('value')['id'] }}" readonly/>
                                </div>
                                <div class="input-field">
                                    <label> A POSITIVE</label>
                                    <input type="number"  name="APOS" required/>
                                </div>

                                <div class="input-field">
                                    <label>B POSITIVE</label>
                                    <input type="number"  name="BPOS" required/>
                                    
                                </div>

                                <div class="input-field">
                                    <label>O POSITIVE</label>
                                    <input type="text" name="OPOS" required/>
                                </div>
                                <div class="input-field">
                                    <label>AB POSITIVE</label>
                                    <input type="number"  name="ABPOS" required/>
                                </div>
                                <div class="input-field">
                                    <label> A NEGETIVE</label>
                                    <input type="text" name="ANEG" required/>
                                </div>

                                <div class="input-field">
                                    <label>B NEGETIVE</label>
                                    <input type="text"  name="BNEG" required/>
                                </div>

                                <div class="input-field">
                                    <label> O NEGETIVE</label>
                                    <input type="text" name="ONEG" required/>
                                </div>
                                <div class="input-field">
                                    <label> AB NEGETIVE</label>
                                    <input type="text" name="ABNEG" required/>
                                </div>
                                
                                <div class="input-field">
                                    <label>write about delivery & Payment</label>
                                     <textarea type="text" id="" name="message" required></textArea>
                                 </div>
                                
                            </div>
                        <button type="submit" class="submitBtn">Submit</button>
                    </div>
                    </div>

                </form>
            </div>
        </div>
        


        

       
    </div>
</body>

</html>