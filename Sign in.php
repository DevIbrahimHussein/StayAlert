
<!DOCTYPE html>
<html>
<head>
  <html>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  <head>
  <style type = "text/css">
  body{
    padding-top: 60px;
    padding-bottom: 40px;
  }

  .fixed-header, .fixed-footer{
    width: 100%;
    background: #800000;
    color: #ffffff;
  }
  .fixed-header{
  top: 0;
  position: fixed;
  padding: 10px;
  }
  .fixed-footer{
  bottom: 0;
  text-align: center;
  padding: 50px;
  }
  .container{
   width: 80%;
   margin: 0 auto;
  }
  nav a{
     color: #ffffff;
     text-decoration: none;
     padding: 7px 25px;
     display: inline-block;
  }

  nav a:hover {
      background-color: #FAAD07;
  }

  form {
      border: 3px solid #f1f1f1;
  }

  input.t{
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
  }

  button {
      background-color: #800000;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 100%;
  }

  button:hover {
      opacity: 0.8;
  }

  .cancelbtn {
      width: auto;
     padding: 10px 18px;
      background-color: #800000;
  }


  .container {
      padding: 16px;
  }

  span.psw {
      float: right;
      padding-top: 16px;
  }

  .fa {
  padding: 20px;
  font-size: 30px;
  width: 30px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 50%;
}

  .fa:hover {
    opacity: 0.4;
  }
  .fa-facebook {
    background: #3B5998;
    color: white;
  }
  .fa-twitter {
   background: #55ACEE;
   color: white;
  }
  .fa-pinterest {
   background: #cb2027;
   color: white;
  }
  .fa-linkedin {
    background: #007bb5;
    color: white;
   }
  .fa-flickr{
    background: #00EBFF;
    color: white;
   }
  </style>

  <title> Sign in </title>
</head>

<body>
  <div class="fixed-header">
    <div clas="container">
      <nav>
        <a href="home.html">Home</a>
        <a href="Sign in.php">Sign in</a>
        <a href="Sign up.html">Sign up</a>
      </nav>
    </div>
  </div>
  <h2><center> Sign in </center></h2>

  <form action="signin_proc.php" method="post">
    <?php
    ?>
    <div class="container">
        <label><b>Username: </b></label>
        <input class="t" type="text" placeholder="Enter Username" name="username" required="required">

        <label><b>Password: </b></label>
        <input class="t" type="password" placeholder="Enter Password" name="psw" required="required">

        <button type="submit">Sign in</button>
        <input type="checkbox" checked="checked" name="remember"> Remember me
    </div>


    <center><p><i> don't have an account? Sign up<a href="Sign up.html"> here</a></i></p></center>

    <div class="container" style="background-color:#f1f1f1">
      <a href="home.html"><button type="button" class="cancelbtn">Cancel</button></a>
      <span class="psw">Forgot <a href="ForgotPass.php">password?</a></span>
    </div>
  </form>

  <div class="fixed-footer">
    <a href="http://facebook.com" class="fa fa-facebook"></a>
    <a href="https://www.pinterest.com"  class="fa fa-pinterest"></a>
    <a href="http://twitter.com/minimalmonkey" class="fa fa-twitter"></a>
    <a href="https://www.flickr.com"  class="fa fa-flickr"></a>
    <a href="https://lb.linkedin.com" class="fa fa-linkedin"></a>
  </div>
  </body>
  </html>
