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
    <h1 class="mt-4 mb-5 text-center"></h1>
    <div class="row justify-content-center">

      <div class="col-md-8">

        <div class="card">
          <h4 class="card-header">Book your ticket</h4>
          <div class="card-body">

        <form action="connect.php" method="POST" enctype="multipart/form-data">

          <div class="form-group">
            <label class="font-weight-bold" for="name"> Name:</label>
            <input class="form-control" type="text" name="name" placeholder="Enter  Name">
          </div>

         

          <div class="form-group">
            <label class="font-weight-bold" for="name">age:</label>
            <input class="form-control" type="text" name="age" placeholder="Enter biological Name">
          </div>

          <div class="form-group">
            <label class="font-weight-bold" for="name">E-mail:</label>
            <input class="form-control" type="text" name="email" placeholder="Enter The E-mail">
          </div>

          <div class="form-group">
            <label class="font-weight-bold" for="name">phone number:</label>
            <input class="form-control" type="text" name="phone_number" placeholder="Enter The phone number">
          </div>


          <input type="submit" class="form-control btn btn-success  text-center" id="inputGroupFile01" name="submit" value="submit">
        </form>

       
          </div>
        </div>  

      </div>

    </div>
  </div>
  
</body>
</html>