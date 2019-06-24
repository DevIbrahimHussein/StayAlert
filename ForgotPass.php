
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
   div.s{ float: left;
     width:100px;
     height:150px;
     padding:10px;
     border:1px solid #aaaaaa;
     border-radius: 20px;
     margin: 5px;}
  </style>

  <script type = "text/javascript">
  function allowDrop(ev){
     ev.preventDefault();
  }

  function drag(ev){
    ev.dataTransfer.setData("Image",ev.target.id);
  }

  function dropYellow(ev){
    ev.preventDefault();
    var data = ev.dataTransfer.getData("Image");
    if(data == "yellow_image"){
       ev.target.appendChild(document.getElementById('yellow_image'));
    }
  }

  function dropBlue(ev){
    ev.preventDefault();
    var data = ev.dataTransfer.getData("Image");
    if(data == "blue_image"){
       ev.target.appendChild(document.getElementById('blue_image'));
    }
  }

  function dropGreen(ev){
    ev.preventDefault();
    var data = ev.dataTransfer.getData("Image");
    if(data == "green_image"){
       ev.target.appendChild(document.getElementById('green_image'));
    }
  }

  function dropRed(ev){
    ev.preventDefault();
    var data = ev.dataTransfer.getData("Image");
    if(data == "red_image"){
       ev.target.appendChild(document.getElementById('red_image'));
    }
  }

</script>
  <title> Reset Password </title>
</head>
<body>
  <div class="fixed-header">
    <div clas="container">
      <nav>
        <a href="home.html">Home</a>
        <a href="Sign in.html">Sign in</a>
        <a href="Sign up.html">Sign up</a>
      </nav>
    </div>
  </div>
  <h2><center> Forgot password? </center></h2>

  <form action="ForgotPass_proc.php" method="post">
    <div class="container">
        <label><b>Your Name: </b></label>
        <input class="t" type="text" placeholder="Enter your name" name="name" required="required">

        <label><b>Your Email: </b></label>
        <input class="t" type="text" placeholder="Enter your email" name="email" required="required">

        <label><b>Your New Password: </b></label>
        <input class="t" type="password" placeholder="Enter your new password" name="password" required="required"><br/><br/>


        <button type="submit">Reset</button>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <a href="home.html"><button type="button" class="cancelbtn">Cancel</button></a>
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
