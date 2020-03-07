<html>
<?php include_once 'connect.php'; ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-light" style="background-color: #3E84E9 ;">
        <!-- <a class="navbar-brand">Jos Foundation</a> -->
        <h1>Jos Foundation</h1>
        
     <?php include 'login.php'?>
      </nav>
      <br><br>

      <div class="container">
          <div class="row">
              <div class="col">
                  <h1>Jos foundation helps you keep your Top rate status</h1>
              </div>
              <div class="col">
          <form method="post" action="">
              <h1>Creact an account</h1>
        <div class="form-row">
          <div class="form-group col-md-6">
            
            <input type="firstname" class="form-control" name="firstname" placeholder="First Name">
          </div>
          <div class="form-group col-md-6">
           
            <input type="surname" class="form-control" name="surname" placeholder="Surname">
          </div>
        </div>
        <div class="form-group">
          
          <input type="email" class="form-control" name="email_phone" placeholder="Mobile number or email">
        </div>
        <div class="form-group">
          
          <input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" class="form-control" name="password" placeholder="New password">
        </div>
        <div class="form-group">
          
          <input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" class="form-control" name="password2" placeholder="Confirm password">
        </div>
        <div class="form-group">
           
            <input type="date" class="form-control" name="dateOfBirth" placeholder="Date of birth">
          </div>

          <button type="submit" class="btn btn-success" name="btn_submit">Register</button>
      </form>
      </div>
    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> 
</body>
</html>
