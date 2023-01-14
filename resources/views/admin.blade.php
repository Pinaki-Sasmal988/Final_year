<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin verify</title>

    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
</head>
<body>
    {{-- "table table-striped table-hover"> --}}
       
    
            @foreach ($values as $item)
            <form method="POST" action="/verify">
              @csrf
              <table class="table">
                <tbody>
          <tr>
            <th scope="row">{{ $item['id'] }}</th>
            <td> <input type="text" name="bank_name" value="{{ $item['bank_name'] }}" readonly>
             <input type="text" name="bank_email" value="{{ $item['bank_email'] }}"></td>
            <td> <input type="text" name="bank_ph_no" value="{{ $item['bank_ph_no'] }}"></td>
            <td> <input type="text" name="Address" value="{{ $item['Address'] }}">
             <input type="text" name="pin" value="{{ $item['pin'] }}"></td>
            <td> <input type="text" name="service_time" value="{{ $item['service_time'] }}">
             <input type="text" name="reg_no" value="{{ $item['reg_no'] }}"></td>
            <td> <input type="text" name="owen_name" value="{{ $item['owen_name'] }}">
             <input type="text" name="owen_ph'" value="{{ $item['owen_ph'] }}"></td>
            <td> <input type="hidden" name="owen_gov_id" value="{{ $item['owen_gov_id'] }}">
             <input type="hidden" name="bank_reg_id" value="{{ $item['bank_reg_id'] }}"></td>
            <td> <input type="hidden" name="password" value="{{ $item['password'] }}">
             <input type="text" name="create_at" value="{{ $item['created_at'] }}"></td>
            <td><img class="img-thumbnail ms-4" src="{{ asset('storage/images/'.$item['bank_reg_id']) }}" /></td>
            <td><img class="img-thumbnail ms-4" src="{{ asset('storage/images/'.$item['owen_gov_id']) }}" /></td>
          </tr>
          <button type="submit">submit</button>
        </tbody>
      </table>
        </form>
        
          @endforeach
            
        
</body>
</html>