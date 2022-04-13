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
    <title>View Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"  href="css/read.css">
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