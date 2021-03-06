<!--createAccount.php-->

<?php
//sara hartley - page format and content
//krithik raja - sql database connection and modification
require_once "config.php";
$conn=mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME); //seems like in order to insert data, you need to connect to the databse regardless if the config file already did
      if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
        } 
$preError = "Enter the information to create your account.";		//Condition
if ($_SERVER["REQUEST_METHOD"] == "POST") { 					//catches POST
	if((empty($_POST['customerName'])) or (empty($_POST['streetAddress'])) or (empty($_POST['username'])) or (empty($_POST['pwd']))){
		$error = "You are missing some of the information. Please try again.";
	}else{
		//TO DO:Database Validation code
		$username = test_input($_POST['username']);
        $password = test_input($_POST['pwd']);
        $name = test_input($_POST['customerName']);
        $address = test_input($_POST['streetAddress']);
        $sql = "INSERT INTO account (user, password, name, address) VALUES ('$username', '$password', '$name', '$address')";
        if (mysqli_query($conn, $sql)) {
            echo "New record has been added successfully !";
         } else {
            echo "Error: " . $sql . ":-" . mysqli_error($conn);
         }
         mysqli_close($conn);
		$tempBool = true;
		if ($tempBool==true){
			header('Location: login.php');
		}else{
			$error = "There was a Problem processing your order. Please contact the administration";
		}
	}
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<!DOCTYPE html>
<html>
<body>

<h1>SCSU Pizzeria</h1>

<h2>Create your SCSU Pizzeria Account.</h2>

<p>
  <label>
    <?php if (isset($error)) {
      echo $error;
    } else {
      echo $preError;
    } ?>
  </label>
</p>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">  
  <label for="customerName">Name:</label><br>
  <input type="text" id="customerName" name="customerName"><br>
  <label for="streetAddress">Street Address:</label><br>
  <input type="text" id="streetAddress" name="streetAddress"><br>
  <label for="username">Username:</label><br>
  <input type="text" id="username" name="username"><br>
  <label for="pwd">Password:</label><br>
  <input type="password" id="pwd" name="pwd"><br><br>
  <!--<input type="submit" value="Back to Login"><br><br>-->
  <input type="submit" value="Create Account">
</form>

<form method = "Post" action = "login.php">
	<input type="submit" value="Back to Login"><br><br>
</form>

</body>
</html>