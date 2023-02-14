<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
  {{ Session::get('user')['name'] }}
  <a href="/logout">Logout</a>
    <form method="POST" action="/search">
        @csrf
        <input type="search" name="pin" placeholder="Enter pin" />
        <button type="submit">serach</button>
    </form>
    {{-- <div class="container">
          
        <table class="table">
          <thead>
            <tr>
              <th scope="col">BANK NAME</th>
              <th scope="col">VIEW BANK DETAILS</th>
            </tr>
            @foreach($data as $item)
            <tr>
              <td>{{ $item->Address }}</td>
              <td>{{ $item->bank_name}}</td>
              {{-- <td><a href="/blood_details/{{$item->bank_id}}">VIEW</a></td>
            </tr>
            @endforeach
          </thead>

        </table>

      </div> --}}
</body>
</html>