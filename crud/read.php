<?php 
include "config.php";

    //get data from users table
    $sql = "SELECT * FROM supplier";
    //execute the query
    $result = $conn->query($sql);
    
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Supplier</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
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
        .btn-primary{
            margin: 10px 0px 25px 0px;
        }
        .btn-primary a{
            width: 10%;
            color: #ffff;
            font-size: 22px;
            font-weight: 500;
            padding: 10px;
            text-decoration: none;
            margin: 10px 0px 20px 0px;
        }
        tr{
            font-size: 18px;
            margin-top: 15px;
        }
    </style>
</head>
    <body>
        <div class="container">
            <h1>Supplier Details</h1>

            <button class="btn btn-primary my-5"><a href="add.php">+ Add</a></button>
      
            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Item</th>
                        <th>Option</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                    ?>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['address']; ?></td>
                                <td><?php echo $row['phone']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['item']; ?></td>
                                <td><a class="btn btn-success" href="update.php?id=<?php echo $row['id']; ?>">Update</a>&nbsp;<a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
                            </tr>
                        
                    <?php     
                            }   
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </body>
</html>