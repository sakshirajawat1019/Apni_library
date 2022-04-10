<?php
if(isset($_POST['save'])){

    include "config.php";

    $fname = mysqli_real_escape_string($conn,$_POST['fname']);
    $lname = mysqli_real_escape_string($conn,$_POST['lname']);
    $user = mysqli_real_escape_string($conn,$_POST['user']);
    $password = mysqli_real_escape_string($conn,md5($_POST['password']));
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $phone = mysqli_real_escape_string($conn,$_POST['phone']);
    
  $sql = "SELECT username FROM users WHERE username = '{$user}'";
  $result = mysqli_query($conn, $sql) or die("Query Failed.");

  if(mysqli_num_rows($result) > 0){
      echo "<p style='color:red;text-align:center;margin:10px 0;'>userName already Exists.</p>";
  }else{
    $sql1 = "INSERT INTO users (fname,lname,username,password,gmail,pno) VALUES('{$fname}','{$lname}','{$user}','{$password}','{$email}','{$phone}')";
    if(mysqli_query($conn,$sql1)) {
      if(!$_SESSION["username"]){
        header("Location: {$hostname}/Somthing1.php");
      }
    }
  }
} 
?>
<!doctype html>
<html>
<head>
<title>
signup page</title>

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">

         <script>

        function vila()
            {
              var user = document.getElementById("use");
              var passed = document.getElementById("pass")
              var emil = document.getElementById("email");
              var nun = document.getElementById("num");
              var first = document.getElementById("first_name");
              var last = document.getElementById("last_name");
              

              if(((user.value.trim() =="" || passed.value.trim() =="")||(emil.value.trim() =="" || nun.value.trim() =="") )||((first.value.trim() =="" || last.value.trim() ==""))
              {
                
                alert("please fill all the blank boxes");
                return false;
              }
              else 
              {

                true;
              }
            }
         </script>

</head>
<body class="page">
<br>
<center><h1><font face = " Comic Sans MS" size = "10"color = "red">Apni Library</font></h1>
<br>

<div class = "divS">
<form onsubmit="return vila()" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
<br>
   first name <input id="first_name" type="text" name="fname" required><br>
    last name <input id="last_name" type="text" name="lname" required><br>
     phone no.<input id="num" type="number" name="phone" required><br>
Email-address <input id="email" type="text" name="email" required><br>
     username <input id="use" type="text" name="user" required><br>
      password<input id="pass" type="password" name="password" required><br>
<button  type="submit" name="save">SignUp</button><br>
</form>
</div>
you have an already account?<a href="ApniLibrary.php">login</a>
</center>
</body>
</html>
