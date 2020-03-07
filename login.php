<?php
$errmsg_array = array();
$errflag = false;

    $databaseHost = "localhost";
    $databaseUsername = "root";
    $databasePassword = "PhpAdmin@12";
    $databaseName = "jos_foundation";

    $conn = new PDO("mysql:host=$databaseHost;dbname=$databaseName;", $databaseUsername, $databasePassword);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['pass'];
        
        $password = md5($password);
    if ($email == '') {
            $errmsg_arr[] = 'You must enter your Email';
            $errflag = true;
    }
    if ($password == '') {
            $errmsg_arr[] = 'You must enter your Password';
            $errflag = true;
    }

        $result = $conn->prepare("SELECT * FROM student_data WHERE email=? AND password=?");
        $result->bindParam(1, $email);
        $result->bindParam(2, $password);
        $result->execute();
        $rows = $result->fetch(PDO::FETCH_NUM);
    if ($rows > 0) {
        $_SESSION['email'] = $email;
        header("Location: ../Kafuco_project/home/");
	}
    else {  
        echo "<script language='javascript'>alert('Wrong Email or Password. Please try again');
        window.location.href='/jumuia-project/';
         </script>";
    }
        if($errflag) {
            $_SESSION['ERRMSG_ARR'] = $errmsg_arr;
            session_write_close();
            header("location: ../jumuia-project/");
            exit();
        }    
    }
 
?>
  <form class="form-inline" method="post" action="home.php">
    <div class="form-row">
    <label>Email/Phone </label>
    <input name="email" type="email">
    <label>Password</label>
    <input name="pass" type="password">
    <button name="login" type="submit">LOGIN</button>
</div>
</form>