<?php

    $server="localhost";
    $username="root";
    $password="";
    $con=mysqli_connect($server,$username,$password,"vibe");


    $uname = $_POST["uname"];
    $password = $_POST["psw"];


    $q="SELECT * FROM `user_details` WHERE `user_name`='$uname'";

    //userrs with the same user name
    $res = mysqli_query($con,$q);

    //returns number of rows
    $ans = mysqli_num_rows($res);

    if($ans==0)
    {
        echo "<script> alert('invalid username'
    );</script>";
    }
    else if($ans==1)
    {
       $row=mysqli_fetch_array($res);
       if($password==$row['user_pass'])
       {
           
           header("Location: main.php");


       }
       else
       {
           echo "<script>alert('invalid password');</script>";
       }
    }

?>