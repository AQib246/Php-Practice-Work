<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <div class = "container">
    <div class = "row">
    <div class = "col-lg-6" >
    <h2>Login Form</h2>
    <form method = "post" action = "loginvalidation.php">
  <div class="form-row">
    
      <label for="inputEmail4">Username</label>
      <input type="text" name = "username"  class="form-control" id="inputEmail4">
    
    
      <label for="inputPassword4">Password</label>
      <input type="password" name = "password" class="form-control" id="inputPassword4">
    
  </div>
  <br/>
  <button type="submit" class="btn btn-primary">Login</button>






 
</form>
    

    </div>

    <div class = "col-lg-6" >
    <h2>Signin</h2>
    <form method = "post" action = "registration.php">
  <div class="form-row">
    
      <label for="inputEmail4">Username</label>
      <input type="text" name = "username" class="form-control" id="inputEmail4">
    
  
      <label for="inputPassword4">Password</label>
      <input type="password" name = "password"  class="form-control" id="inputPassword4">
   
  </div>
  <br/>
   
  <button type="submit" class="btn btn-primary">Signin</button>
</form>
    

    </div>
    </div>

    </div>
</body>
</html>