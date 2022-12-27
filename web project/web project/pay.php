<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css">
</head>
<body>


<div class="container">
    <h1 class="mt-4 mb-5 text-center">Payment Gateway</h1>
    <div class="row justify-content-center">

      <div class="col-md-8">

      <div class="card">
          <h4 class="card-header">Enter Debit Card Details</h4>
          <div class="card-body">

        <form action="connect.php" method="POST" enctype="multipart/form-data">

          <div class="form-group">
            <label class="font-weight-bold" for="name"> Card Number:</label>
            <input class="form-control" type="text" name="cno" placeholder="Enter  card details">
          </div>

         
          <div class="col-md-6 d-flex m-auto">
          <div class="form-group mr-5">
            <label class="font-weight-bold" for="name">date:</label>
            <input class="form-control" type="text" name="date" placeholder="date">
          </div>

          <div class="form-group ml-5">
            <label class="font-weight-bold" for="name">cvv</label>
            <input class="form-control" type="text" name="cvv" placeholder="cvv">
          </div>
         </div>
         </form>

         <div class="redirect">
       <a href="display.php"> <button>Pay Now</button></a>
    </div>
         
        
          </div>
        </div>  

      </div>

    </div>
  </div>
  
  

<style>

    .redirect{
        display:flex;
        justify-content:center;
        align-items:center;
    }

    .redirect button{
        padding:10px 30px;
        background-color:green;
        color:white;
        outline:none;
        border-radius:20px;
        margin-top:10px;
        border:1px solid green;
    }
</style>

</body>
</html>