<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fill out this form</title>
    <link rel="stylesheet" href="css/order_form.css">
</head>
<body>
  
    <div class="container">
        <div class="title">
            <h2>Blood Order Form</h2>
        </div>
        <form action="/order" method="post">
          @csrf
          <div class="group">
            <label>
              
              {{-- <span class="name">Name <span class="required">*</span></span> --}}
              <input type="hidden" name="bank_id" value="{{ $id }}"/>
              <input type="text" name="name" placeholder="Enter Name" required>
            </label>
            <label>
              {{-- <span>Address <span class="required">*</span></span> --}}
              <input type="text" name="address" placeholder="Enter full address" required>
            </label>
            <label>
              {{-- <span>Pincode<span class="required">*</span></span> --}}
              <input type="text" name="pin" placeholder="Enter Pin Code"> 
            </label>
            <label>
              {{-- <span>Phone <span class="required">*</span></span> --}}
              <input type="tel" name="ph_no" placeholder="Enter Phone Number"> 
            </label>
            <h3>Select blood groups</h3>
            <div class="input-field">
              <label>Select Blood Group</label>
              <select name="group">
                  <option disabled="disabled" selected="selected">Select One Of Them</option>
                  <option value="A+">A+</option>
                  <option value="B+">B+</option>
                  <option value="AB+">AB+</option>
                  <option value="O+">O+</option>
                  <option value="A-">A-</option>
                  <option value="B-">B-</option>
                  <option value="O-">O-</option>
                  <option value="AB-">AB-</option>
              </select>
              <label>
                
                <input type="number" name="quantity" placeholder="Enter Quantity(ml)" required> 
              </label>
          </div>
              
              
          <button type="submit">Place Order</button>            
        </form>          
        {{-- <button type="submit" onclick="window.location.href = 'payment.html';">Place Order</button>             --}}

      </div>
</body>
</html>





