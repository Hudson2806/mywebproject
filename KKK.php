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
      width: 400px;}    
 h3  {position:fixed;
      Top:80px; Right:10px;
    float:right;color:red;border:1px solid black;background-color:white;
       padding-top:5px;padding-right:30px;padding-bottom:5px;padding-left:10px;}
 h2 a {color:lightblue; text-decoration:none ;}
 h3 a  {color:red; text-decoration:none ;}
 ol  {float:right;position:fixed;Right:25px;Top:0px;} 
 ol li{display:inline;margin-right:30px;} 
 ol li a {color:white; text-decoration:none ;}  
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
     margin-top:120px;
  }
  .header{height:200px;}
    h2 a{font-size:230%;
        }
    ol li a{display:none;}
    h1{font-size:350%;
      width:700px;}
    h3 {display:none;} 
    .header h1{
     top:30px;
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

<h1 align="center">Kanna Kaanum Kaalangal</h1>  

</div>
   
<h3><a href="logout.php" onClick="return confirm('Sure to logout?');">Logout</a></h3>

<div class="home">

    <img src="./Images/KKK.jpeg" Width="300" Height="500">

    <h2><a href="./html movies/KKK(EP1).html">EPISODE - 1 (Back To School)</a></h2>
    <h2><a href="./html movies/KKK(EP2).html">EPISODE - 2 (First Warning)</a></h2>
    <h2><a href="./html movies/KKK(EP3).html">EPISODE - 3 (The Challenge)</a></h2>
    <h2><a href="./html movies/KKK(EP4).html">EPISODE - 4 (To New Beginnings)</a></h2>
    <h2><a href="./html movies/KKK(EP5).html">EPISODE - 5 (The Known Stranger)</a></h2>
    <h2><a href="./html movies/KKK(EP6).html">EPISODE - 6 (Latecomer)</a></h2>
    <h2><a href="./html movies/KKK(EP7).html">EPISODE - 7 (Heartfelt)</a></h2>
    <h2><a href="./html movies/KKK(EP8).html">EPISODE - 8 (Ray Of Hope)</a></h2>
    <h2><a href="./html movies/KKK(EP9).html">EPISODE - 9 (The Last Hope)</a></h2>
    <h2><a href="./html movies/KKK(EP10).html">EPISODE - 10 (The Revenge)</a></h2>
    <h2><a href="./html movies/KKK(EP11).html">EPISODE - 11 (The Rescuer)</a></h2>
    <h2><a href="./html movies/KKK(EP12).html">EPISODE - 12 (Jerry S Arrival)</a></h2>
    <h2><a href="./html movies/KKK(EP13).html">EPISODE - 13 (The First Impression)</a></h2>
    <h2><a href="./html movies/KKK(EP14).html">EPISODE - 14 (The Missing Data)</a></h2>
    <h2><a href="./html movies/KKK(EP15).html">EPISODE - 15 (Ray Of Light)</a></h2>
    <h2><a href="./html movies/KKK(EP16).html">EPISODE - 16 (Siragugals Hidden Gem)</a></h2>
    <h2><a href="./html movies/KKK(EP17).html">EPISODE - 17 (Tragedy Strikes)</a></h2>
    <h2><a href="./html movies/KKK(EP18).html">EPISODE - 18 (The Big Offer)</a></h2>
    <h2><a href="./html movies/KKK(EP19).html">EPISODE - 19 (Teaming Up)</a></h2>
    <h2><a href="./html movies/KKK(EP20).html">EPISODE - 20 (Trickster Principal)</a></h2>
    <h2><a href="./html movies/KKK(EP21).html">EPISODE - 21 (The Trap)</a></h2>
    <h2><a href="./html movies/KKK(EP22).html">EPISODE - 22 (A Unexpected Call)</a></h2>
    <h2><a href="./html movies/KKK(EP23).html">EPISODE - 23 (The Viral Post)</a></h2>
    <h2><a href="./html movies/KKK(EP24).html">EPISODE - 24 (The Second Warning)</a></h2>
    <h2><a href="./html movies/KKK(EP25).html">EPISODE - 25 (Siragugal S Reunion)</a></h2>
    <h2><a href="./html movies/KKK(EP26).html">EPISODE - 26 (An Uncertain Situation)</a></h2>
    <h2><a href="./html movies/KKK(EP27).html">EPISODE - 27 (My Hero)</a></h2>
    <h2><a href="./html movies/KKK(EP28).html">EPISODE - 28 (The Second Warning)</a></h2>
    <h2><a href="./html movies/KKK(EP29).html">EPISODE - 29 (A Surprise Visit)</a></h2>
    <h2><a href="./html movies/KKK(EP30).html">EPISODE - 30 (The Concern)</a></h2>
    <h2><a href="./html movies/KKK(EP31).html">EPISODE - 31 (The Missing Document)</a></h2>
    <h2><a href="./html movies/KKK(EP32).html">EPISODE - 32 (The Confession)</a></h2>
    <h2><a href="./html movies/KKK(EP33).html">EPISODE - 33 (The Defaulters List)</a></h2>
    <h2><a href="./html movies/KKK(EP34).html">EPISODE - 34 (The Decision)</a></h2>

</div>


</body>


</html>