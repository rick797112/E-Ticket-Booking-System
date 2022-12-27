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

<?php

include 'conn.php';

          $select= "select * from web order by id desc limit 1";
          
          $query=mysqli_query($con,$select);

          ?>

        <?php  while($result=mysqli_fetch_assoc($query)){
          ?>

<section style="display:flex; justify-content:center; align-items:center; flex-direction:row; flex-wrap:wrap; margin:0px 16px;">
<div class="card mt-5" style="width: 18rem;">
  <h1 class="text-center mb-5">Success</h1>
  <div class="card-body">
    <h5 class="card-title">Ticket Booked</h5>
    <?php echo $result['id']; ?><br>
            <?php echo $result['name']; ?><br>
            <?php echo $result['age']; ?><br>
            <?php echo $result['email']; ?><br>
            <?php echo $result['phone_number']; ?>
  </div>
</div>
       

<?php
          }
          ?>
           </section>
</body>