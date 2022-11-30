<?php

?>

<!DOCTYPE html>
<html>  
 
<title>MOVIES</title>

<style>

body {background-color:black;
    font-family: "Times New Roman", Times, serif;}
 h1{ color:white;
    position:fixed;
    border:3px solid #73AD21;
    Top:0;
    left:30%;
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

 .movies{
     margin-top:140px;
 }
 
 .movie{
     display:inline-block;
     width: 33%;
 }

 .movie img{
     width: 100%;
     height: 250px;
 }

 
 .movie h2 a{
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
   .movie {width:100%;
  }
    .movie img{width:98%;
        height:550px;
      }
      .scroll-container{
  overflow: auto;
  white-space: nowrap;}

      .movies{
     margin-top:200px;
  }
  .header{height:200px;}
    h2{font-size:45px;}
    h2 a{font-size:100%;
        text-align:center;}
     ol li a{display:none;}
    h1{font-size:350%;
      width:650px;}
    h3 a{display:none;}
    h3{display:none;}
    .movie h2{font-size:300%;
         }  
    .header h1{
     top:22px;
     left:19%;
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

<body>
<div class="header">
     
<h1>2022 Indian Movies</h1>  

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


<div class="movies">


<h2>ACTION MOVIES</h2> 
<div class="scroll-container">
<div class="movie">  
   <h2><a href="./html movies/Captain.html"><img src="./Images/Captain.jpg" width="500" height="270"></a></h2>
</div>

<div class="movie">
   <h2><a href="./html movies/L.html"><img src="./Images/L.jpg" width="500" height="270"></a></h2>
</div>

<div class="movie"> 
    <h2><a href="./html movies/R.html"><img src="./Images/R1.jpg" width="500" height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/C.html"><img src="./Images/C1.jpg" width="500" height="270"></a></h2>
</div>

<div class="movie"> 
    <h2><a href="./html movies/VR.html"><img src="./Images/VR1.jpg" width="500" height="270"></a></h2>
</div>

<div class="movie"> 
    <h2><a href="./html movies/YK.html"><img src="./Images/YK1.jpg" width="500" height="270"></a></h2>
</div>

<div class="movie">  
    <h2><a href="./html movies/PK.html"><img src="./Images/PK1.jpg" width="500" height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/YT.html"><img src="./Images/YT1.jpg" width="500" Height="270"></a></h2>
</div>

<div class="movie">
      <h2><a href="./html movies/Vm.html"><img src="./Images/Vm.jpg" width="500" height="270"></a></h2>
</div>

<div class="movie">
     <h2><a href="./html movies/K-A.html"><img src="./Images/KA1.jpg"  width="500" Height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/Sham.html"><img src="./Images/Sham.jpg"  width="500" Height="270"></a></h2>
</div>

<div class="movie">
       <h2><a href="./html movies/html  video(D Block).html"><img src="./Images/D Block1.jpg" width="500" height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/html  video(Vikram).html"><img src="./Images/Vikram1.jpg" width="500" Height="270"></a></h2> 
</div>

<div class="movie">
     <h2><a href="./html movies/html  video(Kathir).html"><img src="./Images/Kathir.jpg" width="500" height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/ASN.html"><img src="./Images/ASN2.jpg" width="500" height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/html  video(Don).html"><img src="./Images/Don1.jpg" Width="500" Height="270"></a></h2>
</div>

<div class="movie">
     <h2><a href="./html movies/html  video(Ayngaran).html"><img src="./Images/Ayngaran1.jpg" width="500" height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/html  video(RRR).html"><img src="./Images/RRR.webp" Width="500" Height="270"></a></h2> 
</div>

<div class="movie">
    <h2><a href="./html movies/html  video(KGF2).html"><img src="./Images/kgf-2.webp" width="500" Height="270"></a></h2> 
</div>

<div class="movie">
       <h2><a href="./html movies/html  video(Beast).html"><img src="./Images/Beast.jpg"  width="500"  Height="270"></a></h2> 
</div>

<div class="movie">
     <h2><a href="./html movies/Koorman.html"><img src="./Images/Koorman.jpg" width="500" Height="270"></a></h2>
</div>

<div class="movie">
     <h2><a href="./html movies/html  video(Kuttram Kuttrame).html"><img src="./Images/Kuttram-Kuttrame.jpg" width="500" height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/J.html"><img src="./Images/J.jpg" width="500" height="270"></a></h2>
</div>

<div class="movie">
     <h2><a href="./html movies/html  video(Valimai).html"><img src="./Images/Valimai1.jpg" Width="500" Height="270"></a></h2>
</div>

<div class="movie">
     <h2><a href="./html movies/Theal.html"><img src="./Images/Theal.jpeg" width="500" height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/V10.html"><img src="./Images/V10.jpg" width="500" height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/html  video(FIR).html"><img src="./Images/FIR1.jpg" width="500" hreight="270"></a></h2>
</div>

<div class="movie">
     <h2><a href="./html movies/html  video(Maaran).html"><img src="./Images/Maaran.webp" width="500" height="270"></a></h2>
</div>

<div class="movie">
     <h2><a href="./html movies/ZR.html"><img src="./Images/ZR2.jpg" Width="500" Height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/KK.html"><img src="./Images/KK.jpg" Width="500" Height="270"></a></h2>
</div><br>
</div>

<h2>ADVENTURE MOVIES</h2>
<div class="scroll-container">
<div class="movie">
    <h2><a href="./html movies/VR.html"><img src="./Images/VR1.jpg" width="500" height="270"></a></h2>
</div>

<div class="movie">
     <h2><a href="./html movies/Sham.html"><img src="./Images/Sham.jpg"  width="500" Height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/html  video(777_Charlie).html"><img src="./Images/777-Charlie.jpg" Width="500" Height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/ASN.html"><img src="./Images/ASN2.jpg" width="500" height="270"></a></h2>
</div><br>
</div>

<h2>BIOGRAPHY MOVIES</h2>
<div class="scroll-container">
<div class="movie">
    <h2><a href="./html movies/SM.html"><img src="./Images/SM.webp" width="500" height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/html  video(Rocketry THe Nambi Effect).html"><img src="./Images/Rocketry The Nambi Effect1.jpg" width="500" height="270"></a></h2>
</div>

<div class="movie">
   <h2><a href="./html movies/Jhund.html"><img src="./Images/Jhund.jpg" width="500" height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/GK.html"><img src="./Images/GK.jpg" width="500" height="270"></a></h2>
</div><br>
</div>

<h2>COMEDY MOVIES</h2>
<div class="scroll-container">
<div class="movie">
    <h2><a href="./html movies/MDB.html"><img src="./Images/MDB1.jpg" Width="500" Height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/K.html"><img src="./Images/K1.jpg" Width="500" Height="270"></a></h2>
</div>

<div class="movie">   
    <h2><a href="./html movies/gg.html"><img src="./Images/gg1.jpg" Width="500" Height="270"></a></h2>
</div>

<div class="movie">
     <h2><a href="./html movies/html  video(777_Charlie).html"><img src="./Images/777-Charlie.jpg" Width="500" Height="270"></a></h2>
</div>

<div class="movie">
     <h2><a href="./html movies/Jaadugar.html"><img src="./Images/Jaadugar.jpg" width="500" height="270"></a></h2>
</div>

<div class="movie">
     <h2><a href="./html movies/AS.html"><img src="./Images/AS.jpg" width="500" height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/ASN.html"><img src="./Images/ASN2.jpg" width="500" height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/html  video(Don).html"><img src="./Images/Don1.jpg" Width="500" Height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/html  video(Koogle Kuttapan).html"><img src="./Images/Google Kuttapan1.jpg" width="500" height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/html  video(KRK).html"><img src="./Images/KRK1.jpg" Width="500" Height="270"></a></h2>
</div>

<div class="movie">
      <h2><a href="./html movies/html  video(Hostel).html"><img src="./Images/Hostel1.jpg" width="500" height="270"></a></h2>
</div>

<div class="movie">
       <h2><a href="./html movies/html  video(Beast).html"><img src="./Images/Beast.jpg"  width="500"  Height="270"> </a></h2> 
</div>

<div class="movie">
    <h2><a href="./html movies/html  video(Idiot).html"><img src="./Images/Idiot1.jpg" width="500" height="270"></a></h2>
</div>

<div class="movie"> 
    <h2><a href="./html movies/html  video(Naai_Sekar).html"><img src="./Images/Nai_Sekar1.jpg" width="500" Height="270"></a></h2>
</div>

<div class="movie"> 
    <h2><a href="./html movies/KV.html"><img src="./Images/KV1.jpg" width="500" height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/J.html"><img src="./Images/J.jpg" width="500" height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/ZR.html"><img src="./Images/ZR2.jpg" Width="500" Height="270"></a></h2>
</div>

<div class="movie">
     <h2><a href="./html movies/MP.html"><img src="./Images/MP.jpg" Width="500" Height="270"></a></h2>
</div><br>
</div>

<h2>CRIME MOVIES</h2> 
<div class="scroll-container">
<div class="movie">
      <h2><a href="./html movies/PA.html"><img src="./Images/PA2.jpg" width="500" height="270"></a></h2>
</div>

<div class="movie"> 
    <h2><a href="./html movies/C.html"> <img src="./Images/C1.jpg" width="500" height="270"></a></h2>
</div>

<div class="movie">
     <h2><a href="./html movies/html  video(Cadaver).html"><img src="./Images/Cadaver.jpg" width="500" Height="270"></a></h2>
</div>

<div class="movie">
     <h2><a href="./html movies/html  video(Maha).html"><img src="./Images/Maha1.jpg" width="500" height="270"></a></h2>
</div>

<div class="movie">
     <h2><a href="./html movies/html  video(R23_Criminal_Diary).html"><img src="./Images/R23 Criminal Diary.jpg" width="500" Height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/html  video(Vaaitha).html"><img src="./Images/Vaaitha1.jpg"  width="500" Height="270"></a></h2>
</div>

<div class="movie">
     <h2><a href="./html movies/GK.html"><img src="./Images/GK.jpg" width="500" height="270"></a></h2>
</div>

<div class="movie">
     <h2><a href="./html movies/html  video(Nenjuku Needhi).html"><img src="./Images/Nenjuku Needhi1.jpg" width="500" height="270"></a></h2>
</div>

<div class="movie">
     <h2><a href="./html movies/html  video(Visithiran).html"><img src="./Images/Visithiran1.jpg"  width="500" Height="270"></a></h2>
</div>

<div class="movie">
     <h2><a href="./html movies/html  video(Beast).html"><img src="./Images/Beast.jpg"  width="500"  Height="270"></a></h2> 
</div>

<div class="movie">
   <h2><a href="./html movies/P.html"><img src="./Images/P.jpg" width="500" Height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/html  video(Selfie).html"><img src="./Images/Selfie1.jpg"  width="500" Height="270"></a></h2>
</div>

<div class="movie">
     <h2><a href="./html movies/PV999M.html"><img src="./Images/PV999M.jpg" width="500" height="270"></a></h2>
</div>

<div class="movie">
     <h2><a href="./html movies/html  video(Valimai).html"><img src="./Images/Valimai1.jpg" Width="500" Height="270"></a></h2>
</div><br>
</div>

<h2>DRAMA MOVIES</h2>
<div class="scroll-container">
<div class="movie"> 
    <h2><a href="./html movies/NN.html"><img src="./Images/NN.jpg" width="500" height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/Captain.html"><img src="./Images/Captain.jpg" width="500" height="270"></a></h2>
</div>

<div class="movie">
     <h2><a href="./html movies/L.html"><img src="./Images/L.jpg" width="500" height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/PA.html"><img src="./Images/PA2.jpg" width="500" height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/Jogi.html"><img src="./Images/Jogi4.jpg" width="500" height="270"></a></h2>
</div>

<div class="movie">
     <h2><a href="./html movies/VR.html"><img src="./Images/VR1.jpg" width="500" height="270"></a></h2>
</div>

<div class="movie"> 
     <h2><a href="./html movies/KS1.html"><img src="./Images/KS2.jpg" width="500" height="270"></a></h2>
</div>

<div class="movie"> 
     <h2><a href="./html movies/SR.html"><img src="./Images/SR1.jpg" width="500" height="270"></a></h2>
</div>

<div class="movie"> 
    <h2><a href="./html movies/YK.html"><img src="./Images/YK1.jpg" width="500" height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/PK.html"><img src="./Images/PK1.jpg" width="500" height="270"></a></h2>
</div>

<div class="movie">
     <h2><a href="./html movies/T.html"><img src="./Images/T1.jpg" width="500" height="270"></a></h2>
</div>

<div class="movie"> 
    <h2><a href="./html movies/Jothi.html"><img src="./Images/Jo.jpeg" width="500" height="270"></a></h2>
</div>

<div class="movie"> 
     <h2><a href="./html movies/Vm.html"><img src="./Images/Vm.jpg" width="500" height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/Ba.html"><img src="./Images/B1.webp"  width="500" Height="270"></a></h2>
</div>

<div class="movie">
     <h2><a href="./html movies/K-A.html"><img src="./Images/KA1.jpg"  width="500" Height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/yaanai.html"><img src="./Images/Y.png" width="500" height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/Vezham.html"><img src="./Images/V1.jpg"  width="500" Height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/Akka_Kuruvi.html"><img src="./Images/A-K.jpg"  width="500" Height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/Sham.html"><img src="./Images/Sham.jpg"  width="500" Height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/html  video(Pannikutty).html"><img src="./Images/Panni Kutty.jpg" width="500" Height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/html  video(Cadaver).html"><img src="./Images/Cadaver.jpg" width="500" Height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/html  video(Gargi).html"><img src="./Images/Gargi.jpg" width="500" Height="270"></a></h2>
</div>

<div class="movie">
   <h2><a href="./html movies/SM.html"><img src="./Images/SM.webp" width="500" height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/html  video(D Block).html"><img src="./Images/D Block1.jpg" width="500" height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/html  video(Vaatam).html"><img src="./Images/Vattam1.jpg"  width="500" Height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/html  video(777_Charlie).html"><img src="./Images/777-Charlie.jpg" Width="500" Height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/html  video(Rocketry THe Nambi Effect).html"><img src="./Images/Rocketry The Nambi Effect1.jpg" width="500" height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/Jaadugar.html"><img src="./Images/Jaadugar.jpg" width="500" height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/html  video(Maamanithan).html"><img src="./Images/Maamanithan.jpg" width="500" height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/html  video(Veetla Vishasam).html"><img src="./Images/VV1.webp"  width="500" Height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/VP.html"><img src="./Images/VP2.jpg" width="500" height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/Jhund.html"><img src="./Images/Jhund.jpg" width="500" height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/html  video(Vaaitha).html"><img src="./Images/Vaaitha1.jpg"  width="500" Height="270"></a></h2>
</div>

<div class="movie">
     <h2><a href="./html movies/GK.html"><img src="./Images/GK.jpg" width="500" height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/html  video(Kathir).html"><img src="./Images/Kathir.jpg" width="500" height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/html  video(Nenjuku Needhi).html"><img src="./Images/Nenjuku Needhi1.jpg" width="500" height="270"></a></h2>
</div>

<div class="movie">
     <h2><a href="./html movies/html  video(Ayngaran).html"><img src="./Images/Ayngaran1.jpg" width="500" height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/JC.html"><img src="./Images/JC.webp" width="500" height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/html  video(Koogle Kuttapan).html"><img src="./Images/Google Kuttapan1.jpg" width="500" height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/html  video(KRK).html"><img src="./Images/KRK1.jpg" Width="500" Height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/html  video(Visithiran).html"><img src="./Images/Visithiran1.jpg"  width="500" Height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/html  video(RRR).html"><img src="./Images/RRR.webp" Width="500" Height="270"></a></h2> 
</div>

<div class="movie">
     <h2><a href="./html movies/html  video(Hostel).html"><img src="./Images/Hostel1.jpg" width="500" height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/html  video(KGF2).html"><img src="./Images/kgf-2.webp" width="500" Height="270"></a></h2> 
</div>

<div class="movie">
    <h2><a href="./html movies/P.html"><img src="./Images/P.jpg" width="500" Height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/html  video(Saani_Kaayidham).html"><img src="./Images/S_K1.jpg" width="500" Height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/PG.html"><img src="./Images/PG.jpg" width="500" height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/html  video(Idiot).html"><img src="./Images/Idiot1.jpg" width="500" height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/html  video(Manmatha Leelai).html"><img src="./Images/Manmatha Leelai1.jpg" width="500" height="270"></a></h2>
</div>

<div class="movie">
     <h2><a href="./html movies/html  video(Oh My Dog).html"><img src="./Images/Oh My Dog1.jpg" width="500" Height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/KV(1).html"><img src="./Images/KV(1).jpg" width="500" height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/html  video(Naai_Sekar).html"><img src="./Images/Nai_Sekar1.jpg" width="500" Height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/html  video(Kuttram Kuttrame).html"><img src="./Images/Kuttram-Kuttrame.jpg" width="500" height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/J.html"><img src="./Images/J.jpg" width="500" height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/html  video(K_Pravin_Tambe).html"><img src="./Images/KPT1.jpg" width="500" Height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/YS.html"><img src="./Images/YS.jpg" width="500" height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/html  video(Radhe Shyam).html"><img src="./Images/Radhe Shyam1.jpg"  width="500" Height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/html  video(Hey Sinamika).html"><img src="./Images/Hey Sinamika1.jpg" width="500" Height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/V10.html"><img src="./Images/V10.jpg" width="500" height="270"></a></h2>
</div>

<div class="movie">
     <h2><a href="./html movies/SK.html"><img src="./Images/SK1.jpg" width="500" height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/KV.html"><img src="./Images/KV1.jpg" width="500" height="270"></a></h2>
</div>

<div class="movie">
     <h2><a href="./html movies/SNSM.html"><img src="./Images/SNSM1.webp" width="500" height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/KK.html"><img src="./Images/KK.jpg" Width="500" Height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/Carbon.html"><img src="./Images/Carbon.webp" Width="500" Height="270"></a></h2>
</div>

<div class="movie">
     <h2><a href="./html movies/KS.html"><img src="./Images/KS.webp" width="500" height="270"></a></h2>
</div>

<div class="movie">
     <h2><a href="./html movies/html  video(Enna Solla Pogirai).html"><img src="./Images/Enna Solla Pogirai1.jpg" width="500" height="270"></a></h2>
</div>

<div class="movie">
     <h2><a href="./html movies/RV.html"><img src="./Images/RV.jpg" Width="500" Height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/html  video(Mudhal_Ne).html"><img src="./Images/MNMN1.webp" width="500" Height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/html  video(Anbarivu).html"><img src="./Images/AA1.jpg" width="500" Height="270"></a></h2>
</div><br>
</div>

<h2>FANTASY MOVIES</h2>
<div class="scroll-container">
<div class="movie">
    <h2><a href="./html movies/MDB.html"><img src="./Images/MDB1.jpg" Width="500" Height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/Jaadugar.html"><img src="./Images/Jaadugar.jpg" width="500" height="270"></a></h2>
</div><br>
</div>

<h2>HORROR MOVIES</h2>
<div class="scroll-container">
<div class="movie">
    <h2><a href="./html movies/K.html"><img src="./Images/K1.jpg" Width="500" Height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/html  video(Hostel).html"><img src="./Images/Hostel1.jpg" width="500" height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/html  video(Idiot).html"><img src="./Images/Idiot1.jpg" width="500" height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/Yaaro.html"><img src="./Images/Yaaro.jpg" Width="500" Height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/ZR.html"><img src="./Images/ZR2.jpg" Width="500" Height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/MP.html"><img src="./Images/MP.jpg" Width="500" Height="270"></a></h2>
</div><br>
</div>

<h2>MYSTERY MOVIES</h2>
<div class="scroll-container">
<div class="movie">
    <h2><a href="./html movies/YT.html"><img src="./Images/YT1.jpg" width="500" Height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/Jiivi.html"><img src="./Images/jiivi.webp"  width="500" Height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/Dejavu.html"><img src="./Images/Dejavu.webp"  width="500" Height="270"></a></h2>
</div>

<div class="movie">
     <h2><a href="./html movies/html  video(Cadaver).html"><img src="./Images/Cadaver.jpg" width="500" Height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/html  video(Maha).html"><img src="./Images/Maha1.jpg" width="500" height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/html  video(Nenjuku Needhi).html"><img src="./Images/Nenjuku Needhi1.jpg" width="500" height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/Koorman.html"><img src="./Images/Koorman.jpg" width="500" Height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/I.html"><img src="./Images/Irul.webp" Width="500" Height="270"></a></h2>
</div>

<div class="movie">
     <h2><a href="./html movies/html  video(Kuttram Kuttrame).html"><img src="./Images/Kuttram-Kuttrame.jpg" width="500" height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/html  video(Ward 126).html"><img src="./Images/Ward-1261.jpg"  width="500" Height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/html  video(Visithiran).html"><img src="./Images/Visithiran1.jpg"  width="500" Height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/html  video(FIR).html"><img src="./Images/FIR1.jpg" width="500" hreight="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/IP.html"><img src="./Images/IP1.jpg" width="500" height="270"></a></h2>
</div><br>
</div>


<h2>ROMANCE MOVIES</h2>
<div class="scroll-container">
<div class="movie">
    <h2><a href="./html movies/NN.html"><img src="./Images/NN.jpg" width="500" height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/L.html"><img src="./Images/L.jpg" width="500" height="270"></a></h2>
</div>

<div class="movie">
     <h2><a href="./html movies/html  video(Don).html"><img src="./Images/Don1.jpg" Width="500" Height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/html  video(KRK).html"><img src="./Images/KRK1.jpg" Width="500" Height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/html  video(Manmatha Leelai).html"><img src="./Images/Manmatha Leelai1.jpg" width="500" height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/html  video(Naai_Sekar).html"><img src="./Images/Nai_Sekar1.jpg" width="500" Height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/html  video(Maha).html"><img src="./Images/Maha1.jpg" width="500" height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/html  video(Radhe Shyam).html"><img src="./Images/Radhe Shyam1.jpg"  width="500" Height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/html  video(Hey Sinamika).html"><img src="./Images/Hey Sinamika1.jpg" width="500" Height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/html  video(Enna Solla Pogirai).html"><img src="./Images/Enna Solla Pogirai1.jpg" width="500" height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/html  video(Mudhal_Ne).html"><img src="./Images/MNMN1.webp" width="500" Height="270"></a></h2>
</div><br>
</div>


<h2>SCI-FI MOVIES</h2>
<div class="scroll-container">
<div class="movie">
    <h2><a href="./html movies/Captain.html"><img src="./Images/Captain.jpg" width="500" height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/html  video(Koogle Kuttapan).html"><img src="./Images/Google Kuttapan1.jpg" width="500" height="270"></a></h2>
</div><br>
</div>


<h2>SPORT MOVIES</h2>
<div class="scroll-container">
<div class="movie">
    <h2><a href="./html movies/SM.html"><img src="./Images/SM.webp" width="500" height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/Jhund.html"><img src="./Images/Jhund.jpg" width="500" height="270"></a></h2>
</div>

<div class="movie">   
    <h2><a href="./html movies/html  video(Taanakkaran).html"><img src="./Images/Taanakkaran1.jpg" Width="500" Height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/html  video(K_Pravin_Tambe).html"><img src="./Images/KPT1.jpg" width="500" Height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/Clap.html"><img src="./Images/Clap.jpg" width="500" height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/JC.html"><img src="./Images/JC.webp" width="500" height="270"></a></h2>
</div><br>
</div>


<h2>THRILLER MOVIES </h2> 
<div class="scroll-container">
<div class="movie">
    <h2><a href="./html movies/D.html"><img src="./Images/D.jpeg" width="500" height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/PA.html"><img src="./Images/PA2.jpg" width="500" height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/R.html"><img src="./Images/R1.jpg" width="500" height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/C.html"><img src="./Images/C1.jpg" width="500" height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/K-A.html"><img src="./Images/KA1.jpg"  width="500" Height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/Jiivi.html"><img src="./Images/jiivi.webp"  width="500" Height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/Dejavu.html"><img src="./Images/Dejavu.webp"  width="500" Height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/html  video(Ward 126).html"><img src="./Images/Ward-1261.jpg"  width="500" Height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/html  video(Maha).html"><img src="./Images/Maha1.jpg" width="500" height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/html  video(D Block).html"><img src="./Images/D Block1.jpg" width="500" height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/html  video(Bestie).html"><img src="./Images/Bestie.jpg" width="500" Height="270"></a></h2> 
</div>

<div class="movie">
    <h2><a href="./html movies/html  video(Patampoochi).html"><img src="./Images/Pattampoochi1.jpg"  width="500" Height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/html  video(Vikram).html"><img src="./Images/Vikram1.jpg" width="500" Height="270"></a></h2> 
</div>

<div class="movie">
    <h2><a href="./html movies/html  video(O2).html"><img src="./Images/O21.jpg" width="500" Height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/html  video(Visithiran).html"><img src="./Images/Visithiran1.jpg"  width="500" Height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/html  video(KGF2).html"><img src="./Images/kgf-2.webp" width="500" Height="270"></a></h2> 
</div>

<div class="movie">
    <h2><a href="./html movies/Koorman.html"><img src="./Images/Koorman.jpg" width="500" Height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/P.html"><img src="./Images/P.jpg" width="500" Height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/PG.html"><img src="./Images/PG.jpg" width="500" height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/I.html"><img src="./Images/Irul.webp" Width="500" Height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/html  video(Selfie).html"><img src="./Images/Selfie1.jpg"  width="500" Height="270"></a></h2>
</div>

<div class="movie">
    
    <h2><a href="./html movies/html  video(Valimai).html"><img src="./Images/Valimai1.jpg" Width="500" Height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/html  video(FIR).html"><img src="./Images/FIR1.jpg" width="500" hreight="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/html  video(Maaran).html"><img src="./Images/Maaran.webp" width="500" height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/AGP.html"><img src="./Images/AGP.jpg" width="500" height="270"></a></h2>
</div>

<div class="movie">
     <h2><a href="./html movies/Yaaro.html"><img src="./Images/Yaaro.jpg" Width="500" Height="270"></a></h2>
</div>

<div class="movie">
    <h2><a href="./html movies/KK.html"><img src="./Images/KK.jpg" Width="500" Height="270"></a></h2>
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
     