<?php
include "config.php";

    	if (isset($_POST['update'])) {
			$name = $_POST['name'];
			$user_id = $_POST['id'];
			$address = $_POST['address'];
			$phone = $_POST['phone'];
			$email = $_POST['email'];
			$item = $_POST['item'];

			// update
			$sql = "UPDATE `supplier` SET `name`='$name',`address`='$address',`phone`='$phone',`email`='$email',`item`='$item' WHERE `id`='$user_id'";
			// execute the query
			$result = $conn->query($sql);

			if ($result == TRUE) {
				header('Location: read.php');
			}else{
				echo "Error:" . $sql . "<br>" . $conn->error;
			}
		}
		
		if (isset($_GET['id'])) {
			$user_id = $_GET['id'];
			// get user data
			$sql = "SELECT * FROM `supplier` WHERE `id`='$user_id'";
			// execute the sql
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				while ($row = $result->fetch_assoc()) {
					$name = $row['name'];
					$address = $row['address'];
					$phone = $row['phone'];
					$email  = $row['email'];
					$item = $row['item'];
					$id = $row['id'];
				}
	?>
<!DOCTYPE html>
<html lang="en">
	<head>
    	<link rel="stylesheet" type="text/css"  href="css/add.css">
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    	<title>Add Supplier Details</title>
	</head>
	<body>
		<h1>Update Details</h1>
			<form action="" method="post">
			<div class="container">
				<div class="w-50">
					<input type="text" class="form-control" placeholder="Enter Name" name="name" value="<?php echo $name; ?>" required></div>
					<input type="hidden" name="id" value="<?php echo $user_id; ?>">
				<div class="w-50">
					<input type="text" class="form-control" placeholder="Enter Address" name="address" value="<?php echo $address; ?>" required></div>
				<div class="w-50">
					<input type="mobile" maxlength="10" minlength="10" class="form-control" placeholder="Enter Phone" name="phone" value="<?php echo $phone; ?>" required></div>
				<div class="w-50">
					<input type="email" class="form-control" placeholder="Enter Email" name="email" value="<?php echo $email; ?>" required></div>
				<div class="w-50">
					<input type="item" class="form-control" placeholder="Enter Item Provided" name="item" value="<?php echo $item; ?>" required></div>
					<input type="submit" class="btn btn-primary-submit" value="Update" name="update">
			</div>
			</form>
	</body>
</html>

<?php
	} 
	else{
		// If the 'id' value is not valid, redirect the user back to read.php page
		header('Location: read.php');
	}
}
?>