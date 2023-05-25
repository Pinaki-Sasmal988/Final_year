<?php
use App\HTTP\Controllers\BankController;
$total = 0;
if (Session::has('value')) {
    $total = BankController::countOrder();
}
?>
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

        .input-field input,
        select {
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
<<<<<<< HEAD

=======
        .w-5{
      display: none;
    }
>>>>>>> 5a20b5b2bc503857f903f4592979088b28e027d2
        * {
            /* margin: 0; */
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
<<<<<<< HEAD
        }

        h1,
        h2 {
            text-align: center;
=======
>>>>>>> 5a20b5b2bc503857f903f4592979088b28e027d2
        }

        body {
            min-height: 100vh;
            background: url("images/blood1.png") no-repeat;
            background-size: cover;
            background-attachment: fixed;
            background-position: center;
        }

<<<<<<< HEAD
        .main_box .btn_one i {
            color: rgb(19, 15, 1);
            font-size: 30px;
            font-weight: 700;
            position: absolute;
            left: 16px;
            line-height: 60px;
            margin-top: -70px;
            cursor: pointer;
            opacity: 1;
            transition: all 0.3s linear;
        }

        .main_box .sidebar_menu {
            position: fixed;
            height: 100vh;
            margin-top: -78px;
            margin-left: -1px;
            width: 280px;
            background: linear-gradient(rgb(250, 174, 240), rgb(236, 186, 122));
            box-shadow: 0px 0px 6px linear-gradient(rgb(232, 138, 219), rgb(236, 186, 122));
            overflow: hidden;
            transition: all 0.3s linear;
        }
=======
>>>>>>> 5a20b5b2bc503857f903f4592979088b28e027d2

        a {
            text-decoration: none;

        }

        li {
            list-style: none;
        }

        h1,
        h2 {
            color: #444;
            font-size: 25px;
        }

        h3 {
            color: rgb(255 0 0);
            font: 20px;
        }

        h2 {
            color: #fb0909;
            border-block-end: 3px solid;
            border-block-end-width: 2px;
            text-align: center;
            font-size: 50px;
            font-family: ui-sans-serif;
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
            width: 75%;
            margin-left: 30%;
            /* height: 100vh; */
            height: auto;
        }

        .c .content {
            background-color: white;
            position: relative;
            margin-top: 5vh;
            width: 90%;
            min-height: 95vh;
            /* height: auto; */
        }
        .c .content p{
        text-align: center;
        text-emphasis: 10px;
        }
        .c .content .cards {
            /* padding: 15px 10px; */
            display: inline-flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            margin-top: -7px;
            margin-left: -55px;
        }

        .c .content .cards .card {
            width: 180px;
            height: 130px;
            padding: 45px;
            background: white;
            margin: 20px 10px;
            display: flex;
            align-items: center;
            justify-content: space-around;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            border-radius: 25px;
            justify-content: center;
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

        @media screen and (max-width:536px) {
            .brand-name h1 {
                font-size: 16px;
            }

            .container .content .cards {
                justify-content: center;
            }
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }


        .table-container {
            display: flex;
            justify-content: center;
            margin: 11vh auto;
            width: 50%;
            background-color: #fff;
            border-radius: 10px;
            padding: 5px;
            margin-right: 430px;
        }

        table {
            width: 100%;
            box-shadow: 15px 15px #0000000d;
            border-collapse: collapse;
        }

        tr:nth-of-type(odd) {
            background-color: #006cc6;
            color: #fff;
        }

        tr:nth-of-type(even) {
            background-color: #fff;
            color: #333;
        }

        th {
            background-color: #3d7c81;
            color: #fff;
            font-weight: 800;
            font-size: 20px;
        }

        td,
        th {
            padding: 12px;
            border: 1px solid #ccc;
            text-align: center;
        }

        .label {
            display: inline;
            padding: 0.2em 0.6em 0.3em;
            font-size: 75%;
            font-weight: 700;
            line-height: 1;
            color: #fff;
            text-align: center;
            white-space: nowrap;
            vertical-align: baseline;
            border-radius: 0.25em;
        }

        .label-success {
            background-color: #5cb85c;
        }

        .label-warning {
            background-color: #f0ad4e;
        }

        .label-danger {
            background-color: #d9534f;
        }

        .btn {
            color: #fff;
            background-color: #37BC9B;
            font-size: 13px;
            padding: 5px 8px;
            border: none;
            margin: -2px;
            border-radius: 2px;
            transition: all 0.3s ease;
            text-decoration: none;
        }

        .btn:hover {
            background-color: #2e9c81;
        }


        @media only screen and (max-width:768px),
        (min-device-width:768px) and (max-device-width:992px) {
            .table-container {
                width: 95%;
                background: transparent;
            }

            table,
            thead,
            tbody,
            th,
            td,
            tr {
                display: block;
            }

            thead tr {
                position: absolute;
                top: -9999px;
                left: -9999px;
            }

            tr {
                border: 1px solid #ccc;
                margin-bottom: 10px;
            }

            td {
                border: none;
                border-bottom: 1px solid #eee;
                position: relative;
                padding-left: 50%;
                text-align: right;
            }

            td::before {
                position: absolute;
                top: 6px;
                left: 6px;
                width: 45%;
                padding-right: 10px;
                white-space: nowrap;
                font-size: 16px;
                font-weight: 600;
                text-align: left;
            }

            td:nth-of-type(1)::before {
                content: "Sl. No.";
            }

            td:nth-of-type(2)::before {
                content: "Bank Name";
            }

            td:nth-of-type(3)::before {
                content: "Catagory";
            }

            td:nth-of-type(4)::before {
                content: "Status";
            }

            td:nth-of-type(6)::before {
                content: "Action";
            }



        }
    </style>
</head>
<h2 class="h"> Dashboard </h2>
{{-- @if (Session::get('message'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
 {{Session::get('message')}}
@else {{ "" }}
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif --}}

<body>
<<<<<<< HEAD
=======

>>>>>>> 5a20b5b2bc503857f903f4592979088b28e027d2
    <div class="main_box">

        <input type="checkbox" id="check">
        <div class="btn_one">
            <label for="check">
                <i class="fas fa-bars"></i>
            </label>
        </div>
        <div class="sidebar_menu">
            <div class="first">
                <a href="#">
                    <h6><i>{{ Session::get('value')['bank_name'] }}</i></h6>
                </a>
            </div>
            <div class="btn_two">
                <label for="check">
                    <i class="fas fa-times"></i>
                </label>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="Dashboard">Dashboard</a></li>
                    <li><a href="/addStock">AddStock</a></li>
                    <li><a href="/bloodstock">Blood Stock</a></li>
                    <li><a href="showorder">Blood Orders</a></li>
                    <li><a href="#">Notification({{ $total }})</a></li>
                    <li><a href="message">Message</a></li>
                    <li><a href="/Logout">logout</a></li>
                </ul>
            </div>
        </div>
        {{-- <h4><i>Welcome {{ Session::get('value')['bank_name'] }}</i></h4> --}}
        <div class="c">
            <div class="content">

<<<<<<< HEAD
                <div class="content">
                    <div class="cards">
=======
            {{-- <div class="content"> --}}
            <div class="cards">
>>>>>>> 5a20b5b2bc503857f903f4592979088b28e027d2
                        <div class="card">
                            <div class="box">
                                <h1>21</h1>
                                <h3>Uesrs</h3>
                            </div>
                        </div>
                        <div class="card">
                            <div class="box">
                                <h1>30</h1>
<<<<<<< HEAD
                                <h3>Recent Visitor</h3>
                            </div>
                            <div class="icon-case">
                            </div>
                        </div>
                        <div class="card">
                            <div class="box">
                                <h1>5000</h1>
=======
>>>>>>> 5a20b5b2bc503857f903f4592979088b28e027d2
                                <h3>Income</h3>
                            </div>
                            <div class="icon-case">
                            </div>
                        </div>
<<<<<<< HEAD
                        <div class="card">
                            <div class="box">
                                <h1>34</h1>
                                <h3>Approved Request</h3>
                            </div>
                            <div class="icon-case">
                            </div>
                        </div>
                        <div class="card">
                            <div class="box">
                                <h1>34</h1>
                                <h3>Reject Request</h3>
                            </div>
                            <div class="icon-case">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
=======
                        
                    </div> 
             <p><i>All User Records In Our Bank</i></p>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr class="table-primary">
                        <th>Name</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Group</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Delivery Date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $item)
                    <tr>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->address }}</td>
                        <td>{{ $item->ph_no }}</td>
                        <td>{{ $item->group }}</td>
                        <td>{{ $item->quantity }}</td>
                        <td>{{ $item->price }}</td>
                        <td>{{ $item->created_at }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
           <p><i> {{ $data->links() }}</i></p>
        </div>



        <div class="">

            {{--  <form action="/blood_details" method="post">
                @csrf
                     
                        <div class="fields">
                            <div class="input-field">
                                <input type="hidden" name="id" value="{{ Session::get('value')['id'] }}" readonly />
                            </div>
                            <div class="input-field">
                                <label> A POSITIVE</label>
                                <input type="number" name="APOS" required />
                            </div>
            
                            <div class="input-field">
                                <label>B POSITIVE</label>
                                <input type="number" name="BPOS" required />
            
                            </div>
            
                            <div class="input-field">
                                <label>O POSITIVE</label>
                                <input type="text" name="OPOS" required />
                            </div>
                            <div class="input-field">
                                <label>AB POSITIVE</label>
                                <input type="number" name="ABPOS" required />
                            </div>
                        </div>
                        <div class="fields1">
                            <div class="input-field">
                                <label> A NEGETIVE</label>
                                <input type="text" name="ANEG" required />
                            </div>
            
                            <div class="input-field">
                                <label>B NEGETIVE</label>
                                <input type="text" name="BNEG" required />
                            </div>
            
                            <div class="input-field">
                                <label> O NEGETIVE</label>
                                <input type="text" name="ONEG" required />
                            </div>
                            <div class="input-field">
                                <label> AB NEGETIVE</label>
                                <input type="text" name="ABNEG" required />
                            </div>
                        </div>
            
                        <div class="input-field1">
                            <label class="t1xt"> write about rules and regulation </label>
                            <textarea class="tx" type="text" id="" name="message" required></textArea>
                        </div>
                        <button type="submit" class="submitBtn">Submit</button>
            
                </form>--}}
        </div>
    </div>
    </div>






>>>>>>> 5a20b5b2bc503857f903f4592979088b28e027d2
    </div>

    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Sl. No.</th>
                    <th>User Name</th>
                    <th>Blood Group</th>
                    <th>Ordered Blood(Unit)</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>1</td>
                    <td>Priya Pal</td>
                    <td>A+</td>
                    <td>2</td>
                    
                </tr>

                <tr>
                    <td>2</td>
                    <td>Tusar Halder</td>
                    <td>O+</td>
                    <td>3</td>
                    
                </tr>

                <tr>
                    <td>3</td>
                    <td>Rahul Pal</td>
                    <td>AB+</td>
                    <td>2</td>
                    
                </tr>

                <tr>
                    <td>4</td>
                    <td>Priti Gure</td>
                    <td>A+</td>
                    <td>4</td>
                    
                </tr>

            </tbody>
        </table>
    </div>

</body>

</html>
