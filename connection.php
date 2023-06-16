<?php
    if(isset($_POST['sendmessage'])){
        $fullname=$_POST['fullname'];
        $email=$_POST['email'];
        $mobile=$_POST['mobile'];
        $emailsubject=$_POST['emailsubject'];
        $message=$_POST['message'];
        

        $host='localhost';
        $user='root';
        $pass='';
        $dbname='portfolio';

        $conn=mysqli_connect($host,$user,$pass,$dbname);
        $sql="INSERT INTO clientmessage (fullname,email,mobile,emailsubject,message)values(`$fullname`,`$email`,`$mobile`,`$emailsubject`,`$message`)";
        mysqli_query($conn,$sql);
    
    }
?>