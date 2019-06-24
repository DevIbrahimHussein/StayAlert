
 <?php
 $db=mysqli_connect("localhost","root","");
 $s=mysqli_select_db($db,"StayAlert") or die("Could not select!");

 $search=mysqli_real_escape_string($db,($_POST['search']));


   $q="SELECT * FROM FistAid WHERE ('keywords' LIKE %$search%) OR ('name' LIKE %$search%)" or die(mysql_error());
   $find=mysqli_query($db,$q);

   if(mysql_num_rows($find) > 0){
     while($results=mysqli_fetch_array($find)){
         echo "<p>".$results['keywords'].$results['name']."</p>";
     }
   }
   else {
     echo "No results";
   }

  ?>
