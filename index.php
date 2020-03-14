<?php
    require "config.php";
    if(isset($_POST["submit"]))
    {
        $name=$_POST['name'];
        $number=$_POST['number'];
        $pname=$_POST['pname'];
        $email=$_POST['email'];
        $pdescription=$_POST['pdescription'];
        $query=mysqli_query($con,"Insert into ideas(name,number,pname,email,pdescription) values('$name','$number','$pname','$email','$pdescription')");
        if($query)
        {
            echo "<script type = 'text/javascript'>alert('Project Idea Submitted')</script>";
            echo "<script type='text/javascript'>window.location.assign('index.html')</script>";
        }
        else
        {
            echo "<script type = 'text/javascript'>alert('Something Went Wrong')</script>";
            echo "<script type='text/javascript'>window.location.assign('index.html')</script>";
        }
    }
?>