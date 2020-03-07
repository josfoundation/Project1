<?php
@ob_start();
session_start();
//$path = "../profile_images";
// Database Connection

$databaseHost = "localhost";
$databaseUsername = "root";
$databasePassword = "PhpAdmin@12";
$databaseName = "jos_foundation";
	
	$conn = new PDO("mysql:host=$databaseHost;dbname=$databaseName;", $databaseUsername, $databasePassword);	
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	// User Login
	// if(isset($_POST['login']))
	// {
	// 	$email = $_POST['email'];
	// 	$password = $_POST['pass'];

	// 	if(empty($email) && empty($password))
	// 	{
	// 		// Do Nothing
	// 	}
	// 	else
	// 	{
	// 		$sql = "SELECT email_phone,password FROM `sign_up`";
	// 	}
	// }
	//Register


try
{
// PDO Style

$msg = " ";
// User Registeration Page
if (isset($_POST['btn_submit']))
	{
	$firstname = $_REQUEST['firstname'];
	$surname = $_REQUEST['surname'];
  $email_phone = $_REQUEST['email_phone'];
  $password = $_REQUEST['password'];
  $dob = $_REQUEST['dateOfBirth'];
	$password2 = $_REQUEST['password2'];
	if ($password == $password2){
		$query = $conn->prepare( "SELECT `email_phone` FROM `sign_up` WHERE `email_phone` = ?" );			
		$query->bindValue( 1, $email_phone);
		$query->execute();
		if($query->rowCount() > 0 )
		{	
			$msg = "<p style='text-align:center; color:red;'>This Email ID is already registered. Try Login</p>";
		}
		else{	
			
			$password = md5($password);
			// PDO Style Insert
			//$final_save_dir = 'profile_images/';
			//move_uploaded_file($_FILES['profile_image']['tmp_name'], $final_save_dir . $_FILES['profile_image']['name']);
			//$image = $final_save_dir . $_FILES['profile_image']['name'];

			$sql = "INSERT INTO `sign_up` VALUES 
				('$firstname','$surname', '$email_phone', '$password','$dob')";
					if ($conn->query($sql))
					{
						$msg = "<p style='text-align:center; color:green;'>Registration Successful.</p>";
					}
					  else
					{
						$msg = "An Error Occured Contact SysAdmin";
					}
				}
			
			}
		}

	}


catch(PDOException $e)
{
		$msg =  "Connection failed: " . $e->getMessage();
	}
?>
