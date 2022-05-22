<?php
session_start();
?>





<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>online Store:log in here</title>
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
    if(isset($_POST['login'])){
      $email=$_POST['email'];
      $password=$_POST['password'];

      $email_search="select * from signup where email='$email'";
      $query=mysqli_query($con,$email_search);
      $email_count=mysqli_num_rows($query);
      if($email_count){
        $email_pass=mysqli_fetch_assoc($query);
        $db_pass=$email_pass['password'];
        $pass_decode=password_verify($password,$db_pass);
        if($pass_decode){
          ?>
          <script>
            alert("login successful");
            
          </script>
          <?php
        
        }else{
          ?>
          <script>
          alert("password not match");
          </script>
          <?php
          
        }
      }else{
        ?>
        <script>
          alert(Invalid Email);
        </script>
       <?php
      }
    }
    ?>
    <img src="img/loading.gif" class="loader" alt="" />
    <section class="form-section">
      <div class="form-container">
        <img src="img/cover1.jpg" class="form-img" alt="" />
        <div class="form">
          <h1 class="form-heading">welcome back, login here</h1>
          <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="post">
          <input
            type="email"
            autocomplete="off"
            id="email"
            name="email";
            placeholder="email"
          />
          <input
            type="password"
            autocomplete="off"
            id="password"
            name="password";
            placeholder="password"
          />
          
          <span class="error">***this is an error</span>
          
          <button class="submit-btn" name="login">log in </button>
          <a href="signup.php" class="other-form-link"
            >don't have an account? Create one</a
          >
        </div>
      </div>
      </form>
    </section>
    <script src="form.js"></script>
    <script src="common.js"></script>
  </body>
</html>
