<?php

?>

<!DOCTYPE html>
<html>  
 
<title>WEB SERIES</title>

<style>

body {background-color:black;
  font-family: "Times New Roman", Times, serif;}
 h1{ color:white;
      position:fixed;
      border:3px solid #73AD21;
      Top:0;
      left:40%;
      width:400px;}    
 h3  {position:fixed;
      Top:80px; Right:10px;
    float:right;color:red;border:1px solid black;background-color:white;
       padding-top:5px;padding-right:30px;padding-bottom:5px;padding-left:10px;}
 h2 a {color:lightblue; text-decoration:none ;}
 h3 a  {color:red; text-decoration:none ;}
 ol  {float:right;position:fixed;Right:25px;Top:0px;} 
 ol li{display:inline;margin-right:30px;} 
 ol li a {color:white; text-decoration:none;} 
 .header{
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100px;
    background: #000000;
     
 }
 
 .home{
     margin-top:100px;
 }

 .header h1{
     display:inline-block;
     top:25px;
     left:25%;
 }
 .sidepanel a {display:none;}
 .openbtn {display:none;}
 
 @media only screen and (max-width: 991px) {
  /* For mobiles: */
   .home {width:100%;
  }
    .home img{width:80%;
        height:1000px;
      }
      .home{
     margin-top:150px;
  }
  .header{height:250px;}
    h2 a{font-size:240%;
        }
    ol li a{display:none;}
    h1{font-size:350%;
      width:700px;}
    h3 {display:none;} 
    .header h1{
     top:20px;
     left:19%;
  }

  .sidepanel  {
  width:0;
  position: fixed;
  z-index: 1;
  height: 600px;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 100px;
}

.sidepanel a {display:block;
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 50px;
  color: white;
  display: block;
  transition: 0.3s;
}

.sidepanel a:hover {
  color: #f1f1f1;
}

.sidepanel .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 60px;
}

.openbtn {display:block;
  font-size: 55px;
  cursor: pointer;
  background-color:black;
  color: white;
  padding: 15mm 15mm;
  border: none;
}

.openbtn:hover {
  background-color:#444;
}

}


 
</style>

<body>

<div class="header">

<div id="mySidepanel" class="sidepanel">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="home.php">Home</a>
  <a href="songs.php">Songs</a>
  <a href="movies.php">Movies</a>
  <a href="web_series.php">Web Series</a>
  <a href="logout.php" onClick="return confirm('Sure to logout?');">Logout</a>
</div>

<button class="openbtn" onclick="openNav()">☰ </button>  

<script>
function openNav() {
  document.getElementById("mySidepanel").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidepanel").style.width = "0";
}
</script>

<ol>
    <li><a href="home.php">Home</a></li>
    <li><a href="songs.php">Songs</a></li>
    <li><a href="movies.php">Movies</a></li>
    <li><a href="web_series.php">Web Series</a></li>
 </ol>

<h1 align="center">The Great Indian Murder - Season 1</h1>  

</div>
   
<h3><a href="logout.php" onClick="return confirm('Sure to logout?');">Logout</a></h3>

<div class="home">

    <img src="./Images/TGIM.jpg" Width="300" Height="500">

    <h2><a href="./html movies/TGIM(EP1).html">EPISODE 1 (Vicky Rai)</a></h2>
    <h2><a href="./html movies/TGIM(EP2).html">EPISODE 2 (Jagannath Rai)</a></h2>
    <h2><a href="./html movies/TGIM(EP3).html">EPISODE 3 (Munna Aur Eketi)</a></h2>
    <h2><a href="./html movies/TGIM(EP4).html">EPISODE 4 (Ingetayi Aur Kaala)</a></h2>
    <h2><a href="./html movies/TGIM(EP5).html">EPISODE 5 (Laal Salaam Aur Billu)</a></h2>
    <h2><a href="./html movies/TGIM(EP6).html">EPISODE 6 (Moham Kumar)</a></h2>
    <h2><a href="./html movies/TGIM(EP7).html">EPISODE 7 (Rajneeti Aur Pyaar)</a></h2>
    <h2><a href="./html movies/TGIM(EP8).html">EPISODE 8 (Asil Naqli)</a></h2>
    <h2><a href="./html movies/TGIM(EP9).html">EPISODE 9 (Dhokha)</a></h2>
    
</div>

</body>


</html>