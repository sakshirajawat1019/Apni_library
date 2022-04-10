<?php 
include "config.php";

session_start();

if(!isset($_SESSION["username"])){
    header("Location: {$hostname}/ApniLibrary.php");
}
 ?>


<!doctype html>
<html>
<title>Somthing</title>
<head>

        <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">
     
<body class="bpage">
	<center>
<h1 class="me1">Welcome📖📚</h1>
<br>
<br>
</center>


<table style="width:100%">
   
<h1><u>
hello <?php echo $_SESSION["username"]; ?>
    
</u></h1>
</td>

<td style="text-align:right">
<script type="text/javascript">
    var ID=0;
    var minutes=1;
   // var seconds=1;
    function printmsg(){
        document.getElementById("op").innerHTML= minutes+" minutes";
        minutes++;
    }
    function start(){
        ID=window.setInterval(printmsg,60000);
    }
    function stop(){
        window.clearInterval(ID);
    }
</script>
<h3><u>Start your time ⌚</u></h3>
<button onclick="start()" id="btnAdd">Start</button>   <button onclick="stop()" id="btnAdd2">Stop</button>
    <h2 id="op">0 minutes</h2>
 </td>   
</tbody></table>




<center>
<div class="div2"><h2>Reading section</h2></div>
</center>
<fieldset class="spa"><legend>
    <h1>📖📓</h1>
</legend>
<div class="div1">
    <!--div class="div1-2"-->
<a href="photo/99 Thoughts on Ganesha by Pattanaik Devdutt (z-lib.org).epub - Copy.pdf" target="_blank"><img src="photo/Screenshot_2021-02-03 99 Thoughts on Ganesha - 99 Thoughts on Ganesha by Pattanaik Devdutt (z-lib org) epub - Copy pdf.png" style="width:200px;height:250px;" class="pc"></a>
<a href="photo/Culture 50 Insights from Mythology by Devdutt Pattanaik (z-lib.org).epub.pdf" target="_blank"><img src="photo/Culture 50 Insights from Mythology -.png" style="width:200px; height:250px" class="pc"></a><br><br><br><br>
<a href="photo/Glossary_-_Intro_to_IT__Cybersecurity__2___1_.pdf" target="_blank"><img src="photo/cyber security.jpg" style="width:200px;height:250px;" class="pc" ></a><br><br><br><br>
<a href="photo/Harry Potter  The complete Collection by J. K. Rowling (z-lib.org).pdf" target="_blank"><img src="photo/Screenshot_2021-02-03 Harry Potter The Complete Collection - Harry Potter The complete Collection by J K Rowling (z-lib org[...].png" style="width:200px; height:250px" class="pc"></a><br><br><br><br>
 

<a href="photo/Harry Potter and the Cursed Child by J. K. Rowling, John Tiffany, Jack Thorne (z-lib.org).epub.pdf" target="_blank"><img src="photo/Screenshot_2021-02-03 Harry Potter and the Cursed Child - Harry Potter and the Cursed Child by J K Rowling, John Tiffany, J[...].png" style="width:200px; height:250px" class="pc"></a><br><br><br><br>
<a href="photo/Harry Potter and the Deathly Hallows (UK edition) by Rowling J K (z-lib.org).epub.pdf" target="_blank"><img src="photo/harry potter and heathly.png" style="width:200px; height:250px" class="pc"></a><br><br><br><br>
<a href="photo/Harry Potter and the Goblet of Fire (UK edition) by Rowling J K (z-lib.org).epub.pdf" target="_blank"><img src="photo/Screenshot_2021-02-03 Harry Potter and the Goblet of Fire (UK edition) - Harry Potter and the Goblet of Fire (UK edition) b[...].png" style="width:200px; height:250px" class="pc"></a><br><br><br><br>
<a href="photo/Harry Potter and the Half-Blood Prince (UK edition) by Rowling J K (z-lib.org).epub.pdf" target="_blank"><img src="photo/Screenshot_2021-02-03 Harry Potter and the Half-Blood Prince (UK edition) - Harry Potter and the Half-Blood Prince (UK edit[...].png" style="width:200px; height:250px" class="pc"></a><br><br><br><br>


<a href="photo/Harry Potter and the Order of the Phoenix (Book 5) by J. K. Rowling (z-lib.org).epub.pdf" target="_blank"><img src="photo/Screenshot_2021-02-03 Harry Potter and the Order of the Phoenix (Book 5) - Harry Potter and the Order of the Phoenix (Book [...].png" style="width:200px; height:250px" class="pc"></a><br><br><br><br>
<a href="photo/Harry Potter and the Philosophers Stone  (UK) by Rowling J K (z-lib.org).mobi.pdf" target="_blank"><img src="photo/harry pppp.png" style="width:200px; height:250px" class="pc"></a><br><br><br><br>
<a href="photo/Harry Potter and the Prisoner of Azkaban (UK edition) by Rowling J K (z-lib.org).epub.pdf" target="_blank"><img src="photo/Screenshot_2021-02-03 Harry Potter and the Prisoner of Azkaban (UK edition) - Harry Potter and the Prisoner of Azkaban (UK [...].png" style="width:200px; height:250px" class="pc"></a><br><br><br><br>
<a href="photo/Indian Mythology Tales, Symbols, and Rituals from the Heart of the Subcontinent by Devdutt Pattanaik (z-lib.org).pdf" target="_blank"><img src="photo/Screenshot_2021-02-03 Indian Mythology - Indian Mythology Tales, Symbols, and Rituals from the Heart of the Subcontinent by[...].png" style="width:200px; height:250px" class="pc"></a><br><br><br><br>


<a href="photo/Krishna’s Secret by Devdutt Pattanaik (z-lib.org).epub.pdf" target="_blank"><img src="photo/Screenshot_2021-02-03 Krishnas Secret - Krishna’s Secret by Devdutt Pattanaik (z-lib org) epub pdf.png" style="width:200px; height:250px" class="pc"></a><br><br><br><br>
<a href="photo/Mahabharata A Modern Retelling by Carole Satyamurti, Vinay Dharwadker, Wendy Doniger (z-lib.org).epub.pdf" target="_blank"><img src="photo/Screenshot_2021-02-03 Mahabharata A Modern Retelling - Mahabharata A Modern Retelling by Carole Satyamurti, Vinay Dharwadke[...].png" style="width:200px; height:250px" class="pc"></a><br><br><br><br>
<a href="photo/MY HANUMAN CHALISA by DEVDUTT PATTANAIK (z-lib.org).epub.pdf"><img src="photo/Screenshot_2021-02-03 MY HANUMAN CHALISA - MY HANUMAN CHALISA by DEVDUTT PATTANAIK (z-lib org) epub pdf.png" style="width:200px; height:250px" class="pc"></a><br><br><br><br>
<a href="photo/Myth Mithya Decoding Hindu Mythology by Devdutt Pattanaik (z-lib.org).epub.pdf" target="_blank"><img src="photo/Screenshot_2021-02-03 Myth = Mithya Decoding Hindu Mythology - Myth Mithya Decoding Hindu Mythology by Devdutt Pattanaik (z[...].png" style="width:200px;height:250px" class="pc"></a><br><br><br><br>


<a href="photo/Harry Potter and the Chamber of Secrets (UK edition) by Rowling J K (z-lib.org).epub.pdf" target="_blank"><img src="photo/Screenshot_2021-02-03 Harry Potter and the Chamber of Secrets (UK edition) - Harry Potter and the Chamber of Secrets (UK ed[...].png" style="width:200px;height:250px;" class="pc"></a><br><br><br><br>
<a href="photo/Harry Potter and the Order of the Phoenix (UK edition) by Rowling J K (z-lib.org).epub.pdf" target="_blank"><img src="photo/Screenshot_2021-02-03 Harry Potter and the Order of the Phoenix (UK edition) - Harry Potter and the Order of the Phoenix (U[...].png" style="width:200px; height:250px" class="pc"></a><br><br><br><br>
<!--/div-->






<a href="photo/Harry Potter and the Cursed Child by J. K. Rowling, John Tiffany, Jack Thorne (z-lib.org).epub.pdf" target="_blank"><img src="photo/Screenshot_2021-02-03 Harry Potter and the Cursed Child - Harry Potter and the Cursed Child by J K Rowling, John Tiffany, J[...].png" style="width:200px; height:250px" class="pc"></a><br><br><br><br>
<a href="photo/Harry Potter and the Deathly Hallows (UK edition) by Rowling J K (z-lib.org).epub.pdf" target="_blank"><img src="photo/harry potter and heathly.png" style="width:200px; height:250px" class="pc"></a><br><br><br><br>



<a href="" target="_blank"></a><br><br>
<a href="" target="_blank"></a><br><br>
</div>
</fieldset>
<br><br>
<center>
<div class="div2"><h1><a href="logout.php">Logout</h1></div>
</center>
</body>     
</html>
