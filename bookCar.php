<?php 

	include('config/db_connect.php');

	if(isset($_POST['book'])){

        $carId = mysqli_real_escape_string($con, $_POST['carId']);
		$customerId = mysqli_real_escape_string($con, $_POST['customerId']);
		$date = mysqli_real_escape_string($con, $_POST['date']);
        
		$sql = "INSERT INTO book VALUES ($customerId, $carId, $date)";

		if(mysqli_query($con, $sql)){
			header('Location: first.php');
		} else {
			echo 'query error: '. mysqli_error($con);
		}

	}

	// check GET request id param
	if(isset($_GET['carId'])){
		// escape sql chars
		$carId = mysqli_real_escape_string($con, $_GET['carId']);
		$customerId = mysqli_real_escape_string($con, $_GET['userId']);
        
		// make sql
		$carsql = "SELECT model, name, price FROM cardet WHERE carid = $carId";
		$customersql = "SELECT name FROM customer WHERE cid = $customerId";
        
		// get the query result
		$carresult = mysqli_query($con, $carsql);
		$customerresult = mysqli_query($con, $customersql);
        
		// fetch result in array format
		$car = mysqli_fetch_assoc($carresult);
		$customer = mysqli_fetch_assoc($customerresult);
        
		mysqli_free_result($carresult);
		mysqli_free_result($customerresult);
		mysqli_close($con);
        
	}
    else {
        echo "idhar kaiko aya re baba";

    }

?>

<!DOCTYPE html>
<html>

	<?php /* include('templates/header.php');*/ ?>

	<div class="container center grey-text">
		<?php if($customer): ?>
			<h2><centre>Please Enter the below details to book your Car</h2>
            <h4>Name: <?php echo $customer['name'];?></h4>
            <h4>Car: <?php echo $car['name']." ".$car['model'];?></h4>
            <h4>Price: <?php echo $car['price'];?></h4>

            <form action="" method="POST">
                <!-- check both idsss -->
				<input type="hidden" name="carId" value="<?php echo $carId; ?>">
				<input type="hidden" name="customerId" value="<?php echo $customerId; ?>">
                <!-- date is coming as 0000 in db -->
                <input type="date" id="Test_DatetimeLocal" name="date">
				<input type="submit" name="book" value="Book" class="btn brand z-depth-0">
			</form>
        <?php else: ?>
			<h5>No such customer exists.</h5>
		<?php endif ?>
	</div>

	<?php/* include('templates/footer.php');*/ ?>

</html>