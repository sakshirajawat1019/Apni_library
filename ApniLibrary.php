<?php
include "config.php";
//session_start();


//if(isset($_SESSION["username"])){
  // header("Location: {$hostname}/Somthing1.php");
//}
?>
<!doctype html>
<html>  
<head>
<title>
login page</title>


    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">


          <script type="text/javascript">
            function vila()
            {
              var user = document.getElementById("use");
              var passed = document.getElementById("pass")

              if(user.value.trim() ==""|| passed.value.trim()=="")
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
<br><br><br><br><br><br>
<center><h1><font face = " Comic Sans MS" size = "10"color = "red">Apni Library</font></h1>


<div class="divA">
<form onsubmit="return vila()" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
<br>
username<input id="use" type="text" name="user"><br>
        <label id="lbu" style="color: red; visibility:hidden;">Invalid</label>
password<input id="pass" type="password" name="password1"><br>
        <label id="lbp" style="color: red; visibility:hidden;">Invalid</label>
<button  type="submit" name="login">Login</button> <br>
</form>
</div>
don't have an account?<a href="signup.php">signup</a>
</center>

<?php
                        if(isset($_POST['login'])){
                          include "config.php";
                        
                            $username = mysqli_real_escape_string($conn,$_POST['user']);
                            $password = md5($_POST['password1']);
  
                             $sql = "SELECT userid, username, role FROM users WHERE username = '{$username}' AND password = '{$password}'";
                           
                            $result = mysqli_query($conn, $sql) or die("Query Failed.");
                            
                            if(mysqli_num_rows($result) > 0){
  
                              while($row = mysqli_fetch_assoc($result)){
                              session_start();
                               $_SESSION["username"] = $row['username'];
                               $_SESSION["userid"] = $row['userid'];
                             
  
                              header("Location: {$hostname}/somthing1.php");
                                
                             }
                         }

  
                            else {
                                 echo "<p style='color:red;text-align:center;margin:10px 0;'>Username and Password are not matched.</p>";
  
                                }
                           }
  
                          
                     
                         
                        ?>

</body>
</html>
