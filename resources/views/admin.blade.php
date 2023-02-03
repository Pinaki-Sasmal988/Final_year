<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin verify</title>

    <link rel="stylesheet" href="css/style1.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    {{-- "table table-striped table-hover"> --}}
    @if (Session::get('message'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            {{ Session::get('message') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="container">
        <header>Bank Registration Details</header>
        @foreach ($values as $item)
            <form method="POST" action="/verify">
              @csrf
                <div class="wholeform">
                    <div class="details personal">
                        <span class="title"> Serial No {{ $item['id'] }}</span>

                        <div class="fields">
                            <div class="input-field">
                                <label>Full Name</label>
                                <input type="text"  value="{{ $item['bank_name'] }}"
                                    readonly />
                            </div>
                            <div class="input-field">
                                <label>Email</label>
                                <input type="email"  value="{{ $item['bank_email'] }}"
                                    readonly />
                            </div>

                            <div class="input-field">
                                <label>Mobile Number</label>
                                <input type="number"  value="{{ $item['bank_ph_no'] }}"
                                    readonly />
                            </div>

                            <div class="input-field">
                                <label>Bank Address</label>
                                <input type="text"  value="{{ $item['Address'] }}" readonly>
                            </div>
                            <div class="input-field">
                                <label>PIN Number</label>
                                <input type="number"  value="{{ $item['pin'] }}"
                                    readonly />
                            </div>
                            <div class="input-field">
                                <label>Service Time</label>
                                <input type="text"  value="{{ $item['service_time'] }}" readonly />
                            </div>

                            <div class="input-field">
                                <label>Bank Registration No</label>
                                <input type="email"  value="{{ $item['reg_no'] }}" readonly />
                            </div>

                            <div class="input-field">
                                <label>Owner Name</label>
                                <input type="text"  value="{{ $item['owen_name'] }}" readonly/>
                            </div>
                            <div class="input-field">
                                <label>Owner Phone No</label>
                                <input type="text"  value="{{ $item['owen_ph'] }}" readonly/>
                            </div>
                            <div class="input-field">

                                <input type="hidden"  value="{{ $item['owen_gov_id'] }}" readonly/>
                            </div>
                            <div class="input-field">
                               
                                <input type="hidden"  value="{{ $item['bank_reg_id'] }}" readonly/>
                            </div>
                            <div class="input-field">
                              
                              <input type="hidden"  value="{{ $item['password'] }}" readonly/>
                          </div>
                        </div>
                    </div>

                    <h3>Supported Images</h3>
                    <div class="images">
                        <div class="img">
                          <img class="img-thumbnail ms-6" src="{{ asset('storage/images/'.$item['bank_reg_id']) }}" />                        </div>
                        <div class="img">
                          <img class="img-thumbnail ms-6" src="{{ asset('storage/images/'.$item['owen_gov_id']) }}" />                        </div>

                    </div>
                    <button type="submit" class="submitBtn">verify</button>
                </div>

            </form>
        @endforeach


    </div>

</body>

</html>
