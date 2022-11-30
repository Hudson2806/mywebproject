<?php

?>

<!DOCTYPE html>
<html>  


 
<title>WEB SERIES</title>

<head>

<style>

body {background-color:black;
    font-family: "Times New Roman", Times, serif;}   
 h1{ color:white;
     position:fixed;
      border:3px solid #73AD21;
      Top:0;
      left:35%;
      width: 400px;
      padding:5px 5px;
      text-align:center;
      }    
 h3  {position:fixed;
      Top:80px; Right:10px;
    float:right;color:red;border:1px solid black;background-color:white;
       padding-top:5px;padding-right:30px;padding-bottom:5px;padding-left:10px;}
 a   {color:red; text-decoration:none ;}
 ol  {float:right;position:fixed;Right:25px;Top:0px;} 
 ol li{display:inline;margin-right:30px;} 
 ol li a {color:white;}  
 h2 {color:red;}
 .header{
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 130px;
    background: #000000;
    
 }

 .header h1{
     display:inline-block;
     top:25px;
     left:25%;
 }

 .webSeries{
     margin-top:140px;
 }
 
 .web{
     display:inline-block;
     width: 33%;
 }

 .web img{
     width: 100%;
     height: 250px;
 }

 
 .web h2 a{
     white-space:nowrap;
     text-overflow:ellipsis;
     width: 100%;
     display:inline-block;
     overflow:hidden;
 }

 .footer{display:none;}
 .sidepanel a {display:none;}
 .openbtn {display:none;}

 @media only screen and (max-width: 991px) {
  /* For mobiles: */
   .web {width:100%;
  }
    .web img{width:98%;
        height:550px;
      }
      .webSeries{
     margin-top:200px;
  }
  h2{font-size:45px;}
  .header{height:200px;}
    h2 a{font-size:100%;
        text-align:center;}
        .scroll-container{
  overflow: auto;
  white-space: nowrap;}

    ol li a{display:none;}
    h1{font-size:350%;
      width:700px;}
    h3 a{display:none;}
    h3{display:none;}
    .web h2{font-size:300%;
         }  
    .header h1{
     top:22px;
     left:18%;
  }
  
  .footer {
    display:block;
  overflow: hidden;
  background-color:black;
  position: fixed;
  bottom: 0;
  width: 100%;
}

.footer a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 32px;
  text-decoration: none;
  font-size: 50px;
}

.footer a:hover {
  background:green;
  color: black;
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

 </head>

<body>
 

<div class="header">


<h1 >2022 Indian Web Series</h1> 


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
</div>

   <h3><a href="logout.php" onClick="return confirm('Sure to logout?');">Logout</a></h3>

<div class="webSeries">


<h2>ACTION SERIES</h2>
<div class="scroll-container">
<div class="web">    
      <h2><a href="P_S-2.php"><img src="./Images/Parampara Season 2.webp"  width="500"  Height="270"> </a></h2>
</div>

<div class="web">
     <h2><a href="Shoorveer.php"><img src="./Images/S-s1.jpg"  width="500"  Height="270"></a></h2>
</div>

<div class="web">
      <h2><a href="9_Hours.php"><img src="./Images/9-hours.jpg"  width="500"  Height="270">  </a></h2>
</div>

<div class="web">
       <h2><a href="Escaype_Live.php"><img src="./Images/escaype-live.jpg"  width="500"  Height="270"></a></h2>
</div><br>
</div>

<h2>COMEDY SERIES</h2>
<div class="scroll-container">
<div class="web">
     <h2><a href="Maa_Nella_Tank.php"><img src="./Images/MNT2.jpg"  width="500"  Height="270">  </a></h2>
</div>

<div class="web">
       <h2><a href="Ammuchi.php"><img src="./Images/Ammuchi.jpg"  width="500"  Height="270"></a></h2>
</div>

<div class="web">
       <h2><a href="She.php"><img src="./Images/She1.webp"  width="500"  Height="270"></a></h2>
</div>

<div class="web">
       <h2><a href="Kuthukku_Pathu.php"><img src="./Images/KP1.webp"  width="500"  Height="270"></a></h2>
</div>

<div class="web">
    <h2><a href="Home_Shanti.php"><img src="./Images/HS.jpg"  width="500"  Height="270"></a></h2>
</div>

<div class="web">
    <h2><a href="Bloody_Brothers.php"><img src="./Images/BB.jpg"  width="500"  Height="270"></a></h2> 
</div>

<div class="web">
    <h2><a href="Cubicles.php"><img src="./Images/C-2.jpg"  width="500"  Height="270"></a></h2> 
</div><br>
</div>

<h2>CRIME SERIES</h2>
<div class="scroll-container">
<div class="web">
    <h2><a href="Delhi_Crimes.php"><img src="./Images/DC.jpg"  width="500"  Height="270"></a></h2>
</div>

<div class="web">
    <h2><a href="IPTBOD.php"><img src="./Images/IPTBOD1.jpg"  width="500"  Height="270"></a></h2>
</div>

<div class="web">
    <h2><a href="Recce.php"><img src="./Images/Recce1.jpg"  width="500"  Height="270"></a></h2>
</div>

<div class="web">
    <h2><a href="Fingertip.php"><img src="./Images/F.webp"  width="500"  Height="270"></a></h2>
</div>

<div class="web">
    <h2><a href="Aashram.php"><img src="./Images/Aashram1.jpg"  width="500"  Height="270"></a></h2>
</div>

<div class="web">
    <h2><a href="9_Hours.php"><img src="./Images/9-hours.jpg"  width="500"  Height="270"></a></h2>
</div>

<div class="web">
    <h2><a href="Bloody_Brothers.php"><img src="./Images/BB.jpg"  width="500"  Height="270"></a></h2> 
</div>

<div class="web">
    <h2><a href="London_Files.php"><img src="./Images/London_Files.jpg"  width="500"  Height="270"></a></h2>
</div>

<div class="web">
    <h2><a href="Mai.php"><img src="./Images/MAi1.jpg"  width="500"  Height="270"></a></h2> 
</div>

<div class="web">
    <h2><a href="Undekhi.php"><img src="./Images/Un.jpg"  width="500"  Height="270"></a></h2>
</div>

<div class="web">   
    <h2><a href="Irai.php"><img src="./Images/Irai.jpg"  width="500"  Height="270"></a></h2>
</div><br>
</div>

<h2>DRAMA SERIES</h2>
<div class="scroll-container">
<div class="web">
    <h2><a href="Delhi_Crimes.php"><img src="./Images/DC.jpg"  width="500"  Height="270"> </a></h2>
</div>

<div class="web">
    <h2><a href="Paper_Rocket.php"><img src="./Images/Paper Rocket.jpg"  width="500"  Height="270"></a></h2>
</div>

<div class="web">
    <h2><a href="P_S-2.php"><img src="./Images/Parampara Season 2.webp"  width="500"  Height="270"></a></h2>
</div>

<div class="web">
    <h2><a href="Meme_Boys.php"><img src="./Images/MemeBoys.jpg"  width="500"  Height="270"></a></h2>
</div>

<div class="web">
    <h2><a href="Shoorveer.php"><img src="./Images/S-s1.jpg"  width="500"  Height="270"></a></h2>
</div>

<div class="web">
    <h2><a href="Recce.php"><img src="./Images/Recce1.jpg"  width="500"  Height="270"></a></h2>
</div>

<div class="web">
    <h2><a href="Fingertip.php"><img src="./Images/F.webp"  width="500"  Height="270"></a></h2>
</div>

<div class="web">
    <h2><a href="She.php"><img src="./Images/She1.webp"  width="500"  Height="270"></a></h2>
</div>

<div class="web">
    <h2><a href="KKK.php"><img src="./Images/kanna kaanum kaalangal.webp"  width="500"  Height="270"></a></h2>
</div>

<div class="web">
    <h2><a href="Masoom.php"><img src="./Images/Masoom.jpg"  width="500"  Height="270"></a></h2>
</div>

<div class="web">
    <h2><a href="Aashram.php"><img src="./Images/Aashram1.jpg"  width="500"  Height="270"></a></h2>
</div>

<div class="web">
    <h2><a href="Best_Seller.php"><img src="./Images/BS1.jpg"  width="500"  Height="270"></a></h2>
</div>

<div class="web">
    <h2><a href="Home_Shanti.php"><img src="./Images/HS.jpg"  width="500"  Height="270"></a></h2>
</div>

<div class="web">
    <h2><a href="Anantham.php"><img src="./Images/A.jpg"  width="500"  Height="270"></a></h2> 
</div>

<div class="web">
    <h2><a href="Kaarmegam.php"><img src="./Images/karmegam.jpg"  width="500"  Height="270"></a></h2> 
</div>

<div class="web">
    <h2><a href="Mai.php"><img src="./Images/MAi1.jpg"  width="500"  Height="270"></a></h2> 
</div>

<div class="web">
    <h2><a href="The_Fame_Game.php"><img src="./Images/TFG1.jpg"  width="500"  Height="270"></a></h2>
</div>

<div class="web">
    <h2><a href="Mithya.php"><img src="./Images/M-1(1).webp"  width="500"  Height="270"></a></h2>
</div>

<div class="web">
    <h2><a href="Vilangu.php"><img src="./Images/Vilangu.webp"  width="500"  Height="270"></a></h2>
</div>

<div class="web">
    <h2><a href="Rocket_Boys.php"><img src="./Images/RB1.webp"  width="500"  Height="270"></a></h2>
</div>

<div class="web">
    <h2><a href="YKKA.php"><img src="./Images/YKKA2.jpg"  width="500"  Height="270"></a></h2>
</div>

<div class="web">
    <h2><a href="Human.php"><img src="./Images/H-1.jpg"  width="500"  Height="270"></a></h2> 
</div>

<div class="web">
    <h2><a href="PPKV.php"><img src="./Images/PPKV1.jpg"  width="500"  Height="270"></a></h2> 
</div>

<div class="web">
    <h2><a href="Cubicles.php"><img src="./Images/C-2.jpg"  width="500"  Height="270"></a></h2> 
</div><br>
</div>

<h2>MYSTERY MOVIES</h2>
<div class="scroll-container">
<div class="web">
    <h2><a href="Aashram.php"><img src="./Images/Aashram1.jpg"  width="500"  Height="270"></a></h2>
</div>

<div class="web">
    <h2><a href="The_Fame_Game.php"><img src="./Images/TFG1.jpg"  width="500"  Height="270"></a></h2>
</div>

<div class="web">
    <h2><a href="Vilangu.php"><img src="./Images/Vilangu.webp"  width="500"  Height="270"></a></h2>
</div>

<div class="web">
    <h2><a href="TGIM.php"><img src="./Images/TGIM1.webp"  width="500"  Height="270"></a></h2>
</div>

<div class="web">
    <h2><a href="YKKA.php"><img src="./Images/YKKA2.jpg"  width="500"  Height="270"></a></h2>
</div><br>
</div>

<h2>ROMANCE SERIES</h2>
<div class="scroll-container">
<div class="web">
    <h2><a href="Emoji.php"><img src="./Images/Emoji.jpg"  width="500"  Height="270"></a></h2>
</div><br>
</div>

<h2>THRILLER SERIES</h2>
<div class="scroll-container">
<div class="web">
    <h2><a href="TamilRockers.php"><img src="./Images/TR.jpg"  width="500"  Height="270"></a></h2>
</div>

<div class="web">
    <h2><a href="Victim.php"><img src="./Images/Victim.jpg"  width="500"  Height="270"></a></h2>
</div>

<div class="web">
    <h2><a href="./html movies/html  video(Suzhal).html"><img src="./Images/Suzhal1.jpg"  width="500"  Height="270"></a></h2> 
</div>

<div class="web">
    <h2><a href="Recce.php"><img src="./Images/Recce1.jpg"  width="500"  Height="270"></a></h2>
</div>

<div class="web">
    <h2><a href="Fingertip.php"><img src="./Images/F.webp"  width="500"  Height="270"></a></h2>
</div>

<div class="web">
    <h2><a href="Best_Seller.php"><img src="./Images/BS1.jpg"  width="500"  Height="270"></a></h2>
</div>

<div class="web">
    <h2><a href="Escaype_Live.php"><img src="./Images/escaype-live.jpg"  width="500"  Height="270"></a></h2>
</div>

<div class="web">
    <h2><a href="Bloody_Brothers.php"><img src="./Images/BB.jpg"  width="500"  Height="270"></a></h2> 
</div>

<div class="web">
    <h2><a href="London_Files.php"><img src="./Images/London_Files.jpg"  width="500"  Height="270"></a></h2>
</div>

<div class="web">
    <h2><a href="Kaarmegam.php"><img src="./Images/karmegam.jpg"  width="500"  Height="270"></a></h2> 
</div>

<div class="web">
    <h2><a href="Mai.php"><img src="./Images/MAi1.jpg"  width="500"  Height="270"></a></h2> 
</div>

<div class="web">
    <h2><a href="The_Fame_Game.php"><img src="./Images/TFG1.jpg"  width="500"  Height="270"></a></h2>
</div>

<div class="web">
    <h2><a href="Mithya.php"><img src="./Images/M-1(1).webp"  width="500"  Height="270"></a></h2>
</div>

<div class="web">
    <h2><a href="Vilangu.php"><img src="./Images/Vilangu.webp"  width="500"  Height="270"></a></h2>
</div>

<div class="web">
    <h2><a href="Irai.php"><img src="./Images/Irai.jpg"  width="500"  Height="270"></a></h2>
</div>

<div class="web">
    <h2><a href="YKKA.php"><img src="./Images/YKKA2.jpg"  width="500"  Height="270"></a></h2>
</div>

<div class="web">
    <h2><a href="Human.php"><img src="./Images/H-1.jpg"  width="500"  Height="270"></a></h2> 
</div><br>

</div>

</div>

<div class="footer">

    <a href="home.php">Home</a>
    <a href="songs.php">Songs</a>
    <a href="movies.php">Movies</a>
    <a href="web_series.php">Web Series</a>

</div>

</body>

</html>