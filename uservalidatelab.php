<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>signup</title>
  </head>
  <body style="color:white;background-color:#AB0E6B"><center>
    <h2> VALIDATING THE FORM USING PHP REGULAR EXPRESSION </h2>
    <form class=""  action="uservalidatelab.php" method="post">
     Enter your name : <input type="text" name="name" value=""> <br><br />
     Enter your phone.no : <input type="text" name="phoneno" value=""><br /> <br>
     Enter Your age : <input type="text" name="age" value=""> <br><br />
     Enter Your mail : <input type="text" name="mail" value=""> <br><br />
     Gender <br>
     <input type="radio" name="gender" value="Male">Male <br>
     <input type="radio" name="gender" value="Female">Female <br><br />
     Select Department <br>
     <select name="department">
       <option value="">Choose Your Department</option>
       <option value="cse">CSE</option>
       <option value="it">IT</option>
     </select> <br><br />
     Area of interest <br>
     <input type="checkbox" name="aoi" value="c">c <br>
     <input type="checkbox" name="aoi" value="c++">c++ <br>
     <input type="checkbox" name="aoi" value="java">java <br>
     <input type="checkbox" name="aoi" value="python">python <br>
     <input type="checkbox" name="aoi" value="php">php <br><br />
     <input type="submit" name="validate" value="validate">
   </form>
   <?php
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_DATABASE", "uservalidationlab");

$connect = mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);
// Check connection
if ($connect->connect_error) {
  die("Connection failed: " . $connect->connect_error);
}
else{echo "Connected successfully";}
//create variable in userdetail table
if(isset($_POST['validate'])){


   $name=$_POST['name'];
   $phoneno=$_POST['phoneno'];
   $age=$_POST['age'];
   $mail=$_POST['mail'];
   $gender=$_POST['gender'];
   $department=$_POST['department'];
   $aoi=$_POST['aoi'];

   $query="insert into userlab(name,phoneno,age,mail,gender,department,aoi)values('$name','$phoneno','$age','$mail','$gender','$department','$aoi')";
   //form validate

   if (mysqli_query($connect, $query)) {
     echo "New record created successfully";
   }
   else {
     echo "Error: " . $query . "<br>" . mysqli_error($connect);
   }


  mysqli_close($connect);


}
?>

</body>
</html>
