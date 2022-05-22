<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>online Store:Signup here</title>
    <link rel="stylesheet" href="form.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Cinzel&family=Lato:wght@100&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <?php
    include 'index.php';
    if(isset($_POST['submit'])){
      $fullname=mysqli_real_escape_string($con,$_POST['name']);
      $email=mysqli_real_escape_string($con,$_POST['email']);
      $password=mysqli_real_escape_string($con,$_POST['password']);
      $number=mysqli_real_escape_string($con,$_POST['number']);
      $pass =password_hash($password,PASSWORD_BCRYPT);
      $emailquery="select * from signup where email='$email' ";
      $query= mysqli_query($con,$emailquery);
      $emailcount=mysqli_num_rows($query);
       
      if($emailcount>0){
        ?>
        <script>
        alert("email alrady exists") ;
        </script>
        <?php
      }else{
        $insertquery="INSERT INTO signup ( name, email, password, number) VALUES ( '$fullname', '$email', '$pass', '$number')";

        $iquery=mysqli_query($con,$insertquery);
        if($iquery){
          ?>
          <script>
            alert("inserted Successful");
          </script>
          <?php
       }else{
         ?>
          <script>
            alert("No Inserted");
          </script>
          <?php
       }
      }



    }
    
    ?>
      <img src="loading.gif" class="loader" alt="">
    <section class="form-section">
      <div class="form-container">
        <div class="form">
          <h1 class="form-heading">new here,sign up here</h1>
          <form action="" method="POST">
          <input
            type="text"
            autocomplete="off"
            id="name"
            name="name"
            placeholder="full name"
          />
          <input
            type="email"
            autocomplete="off"
            id="email"
            name="email"
            placeholder="email"
          />
          <input
            type="password"
            autocomplete="off"
            id="password"
            name="password"
            placeholder="password"
          />
          <input
            type="number"
            autocomplete="off"
            id="number"
            name="number"
            placeholder="phone-number"
          />
          <span class="error">***this is an error</span>
          <div>
              <input type="checkbox" id="tc"><label for="tc" class="tc-text ">you are agree to our terms&conditions</label>
          </div>
          <button type="submit" class="submit-btn" name="submit">Sign up</button>
          <a href="login.php" class="other-form-link">already have an account. Log in</a>
        </div>
        <img src="img/midimage.jpg" class="form-img" alt="" />
      </div>
    </form>

    </section>
    <script src="form.js"></script>
    <script src="common.js"></script>
  </body>
</html>
