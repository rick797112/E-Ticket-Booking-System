<?php
if(isset($_POST['submit']))
{
    $con=mysqli_connect('localhost','root','','project') or die("failed" .mysqli_connect_error());
    
        $name=$_POST['name'];
        $age=$_POST['age'];
        $email=$_POST['email'];
        $phone_number=$_POST['phone_number'];


        $sql="INSERT INTO web VALUES (id,'$name','$age','$email','$phone_number')";

        if(mysqli_query($con,$sql)){
            header("Location:pay.php");
        }else{
            echo"<script>alert('Something Went Wrong')</script>";
        }
}

?>