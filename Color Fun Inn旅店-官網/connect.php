<?php
    $txtname = $_POST['txtname'];
    $Email = $_POST['Email'];
    $gender = $_POST['gender'];
    $phonenumber = $_POST['phonenumber'];
    $message = $_POST['message'];

    $conn = new mysqli('localnost','root','','text');
    if($conn->connect_error){
        die('Connection Failed：'.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into registrattion(txtname,Email,gender,phonenumber,message)
        values(?, ?, ?, ?, ?)");
        $stmt->bind_param("sssis",$txtname,$Email,$gender,$phonenumber,$message);
        $stmt->execute();
        echo "registrattion Successfully...";
        $stmt->close();
        $conn->close();
    }

?>