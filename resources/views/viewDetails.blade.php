<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank Details</title>
    <link rel="stylesheet" href="css/view_style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />

    <!-- css for all details-->
    <link rel="stylesheet" href="css/alldetails.css">
    <link rel="stylesheet" href="css/style.css">

    <style>
        body {
            font-family: serif;
            background:  linear-gradient(113deg, #7edfc4, transparent);
            background-size: cover;
        }

        .scrolling {
            background: transparent;
        }

        .scrolling h2 {
            position: absolute;
            width: 1400px;
            height: 100%;
            margin: 0;
            padding: 0;
            font-size: 4em;
            text-align: center;
            line-height: 50px;
            color: rgb(215, 7, 7);
            background: transparent;
            letter-spacing: 7px;
            transform: translateX(100%);
            animation: scrolling 15s linear infinite;
        }

        h4 {
            font-family: serif;
            font-size: 1.5rem;
            color: black;
        }

        .container3 {
            width: 900px;
            min-width: 50px;
            /* background: #fff; */
            margin: 0 auto;
            box-shadow: 0px 15px 16.83px 0.17px rgba(0, 0, 0, 0.05);
            -moz-box-shadow: 0px 15px 16.83px 0.17px rgba(0, 0, 0, 0.05);
            -webkit-box-shadow: 0px 15px 16.83px 0.17px rgba(0, 0, 0, 0.05);
            -o-box-shadow: 0px 15px 16.83px 0.17px rgba(0, 0, 0, 0.05);
            -ms-box-shadow: 0px 15px 16.83px 0.17px rgba(0, 0, 0, 0.05);
            border-radius: 20px;
            -moz-border-radius: 20px;
            -webkit-border-radius: 20px;
            -o-border-radius: 20px;
            -ms-border-radius: 20px;
        }
    </style>
</head>

<body>
    <div class="scrolling">
        <h2>Details of Blood Bank</h2>
    </div>
    @foreach($data as $item)
    <section id="single-bank-details">
        <div class="container2">

            <div id="bank-name">

                <h2><strong> {{ $item->bank_name }}</strong> </h2>
                <h4><b>Mobile No: </b>{{ $item->bank_ph_no }}</h4>
                <h4><b>Telephone No: </b>{{ $item->bank_ph_no }}</h4>
                <h4><b>Email Id: </b>{{ $item->bank_email }}</h4>
                <h4><b>Address: </b>{{$item->Address}}</h4>
                {{ $item->id }}
            </div>
            <div class="rules">
                <h4>Rules And Regulations</h4>
                {{ $item->message }}
            </div>


        </div>
    </section>
    <section id="all-details">

        <h1 class="head2"> Available Blood Groups </h1>
        <div class="container3">
            <div class="row">

                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="blood">
                                <h2>A+ <i class="fas fa-tint"></i></h2>
                            </div><br><br>
                            <div>
                                {{ $item->APOS>5?'Available':'Not Available' }}
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
                                {{ $item->BPOS>5?'Available':'Not Available' }}
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
                                {{ $item->OPOS>5?'Available':'Not Available' }}
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
                                {{ $item->ABPOS>5?'Available':'Not Available' }}
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
                                <h2>A-<i class="fas fa-tint"></i></h2>
                            </div><br><br>
                            <div>
                                {{ $item->ANEG>5?'Available':'Not Available' }}
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
                                {{ $item->BNEG>5?'Available':'Not Available' }}
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
                                {{ $item->ONEG>5?'Available':'Not Available' }}
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
                                {{ $item->ABNEG>5?'Available':'Not Available' }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <br>


    </section>
    <div class="btn_container">
        <button id="btn1" type="button" onclick="window.location.href = '/search'">Back</button>
        <button id="btn2" type="button" onclick="window.location.href = '/booknow{{ $item->id }}'">Order Blood</button>
    </div>
    @endforeach
</body>

</html>