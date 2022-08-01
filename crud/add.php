<?php
    include "config.php";

        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $address = $_POST['address'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $item = $_POST['item'];

        //write sql query
        $sql = "INSERT INTO `supplier`(`name`, `address`, `phone`, `email`, `item`) VALUES ('$name','$address','$phone','$email','$item')";
        //execute the query 
        $result = $conn->query($sql);
        if ($result == TRUE) {
            header('location:read.php');
        }else{
            echo "Error:" . $sql . "<br>" . $conn->error;
        }
        $conn->close();
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <title>Add Supplier Details</title>
    <style>
        body{
            margin: 0;
            padding: 0;
            height: 100%;
            width: 100%;
        }
        h1{
            text-align: center;
            padding: 15px;
            margin-top: 50px;
            font-size: 4rem;
            font-weight: 500;
        }
        .container{
            margin-top: 20px;
            width: 50%;
        }
        .form-control{
            margin-bottom: 20px;
            font-weight: 535;
            font-size: 16px;
            height: 60%;
            transition: none;
        }
    </style>
</head>
<body>
    <h1>Add Details</h1>
    <form action="" method="POST">
       <div class="container">
            <div class="w-50">
            <input type="text" class="form-control" placeholder="Enter Name" name="name" required></div>
            <div class="w-50">
            <input type="text" class="form-control" placeholder="Enter Address" name="address" required></div>
            <div class="w-50">
            <input type="tel" maxlength="10" minlength="10" class="form-control" placeholder="Enter Phone" name="phone" required></div>         
            <div class="w-50">
            <input type="email" class="form-control" placeholder="Enter Email" name="email" required></div>         
            <div class="w-50">
            <input type="text" class="form-control" placeholder="Enter Item Provided" name="item" required></div>

                <input type="submit" class="btn btn-primary"  name="submit" value="Add">
                <input type="reset" class="btn btn-primary"  name="reset" value="Reset">
        </div>
    </form>
</body>
</html>