<?php

?>

<!DOCTYPE html>
<html>  
 
<title>Home Page</title>

<style>

body {background-color:black;
  font-family: "Times New Roman", Times, serif;}   
 h1{ color:white;
      background-color:black;
      position:fixed;
      border:3px solid #73AD21;
      Top: 20px;
      left:25%;
      width: 400px;
     padding-top:5px;padding-bottom:5px;
     text-align:center;
     }    
 h3  {position:fixed;
      Top:80px; Right:10px;
    float:right;color:red;border:1px solid black;background-color:white;
       padding-top:5px;padding-right:30px;padding-bottom:5px;padding-left:10px;}
 a   {color:red; text-decoration:none ;}
 ol  {color:white;background-color:black;float:right;position:fixed;border:1px solid black;Right:25px;Top:0%;} 
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
 
 .home{
     margin-top:130px;
  }

  .banner{display:none;}
  .footer{display:none;}
  .sidepanel a {display:none;}
 .openbtn {display:none;}

 @media only screen and (max-width: 991px) {
  /* For mobiles: */
   .home {width:100%;
  }
    img{width:32%;
        height:400px;
      }

      .banner{
    
     display:block;
}
.scroll-container{
        display:block;
        overflow:auto;
        white-space: nowrap;
        animation: bannermove 10s linear infinite;}
.banner img{width:95%;height:500px;
           }
 
      .home{
     margin-top:200px;
  }
  .header{height:200px;}
    h2{font-size:45px;}
    ol li a{display:none;} 
    h1{font-size:350%;
      Top: 22px;;
      left:18%;
      width:700px;}
    h3 a{display:none;} 
    h3{display:none;}
    

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
     

 <h1 >Welcome To Home Page</h1> 

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

  <h3><a href="logout.php" onClick="return confirm('Sure to logout?');">Logout</a></h3>

</div>

<div class="home">

<div class="banner"> 
<div class="scroll-container"> 
    <a href="./html movies/NN.html"><img src="./Images/NN.jpg" alt="" width="500" height="270"></a>
    <a href="Delhi_Crimes.php"><img src="./Images/DC.jpg" alt="" width="500"  Height="270"></a>
    <a href="./html movies/D.html"><img src="./Images/D.jpeg" alt="" width="500" height="270"></a>
    <a href="./html movies/T_MK.html"><img src="./Images/T_MK.jpg" alt=""></a>
    <a href="./html movies/Captain.html"><img src="./Images/Captain.jpg" alt="" width="500" height="270"></a>
</div>
</div>

<h2><a href="movies.php">LATEST MOVIES</h2>

<div class="scroll-container">

<a href="./html movies/NN.html"><img src="./Images/NN1.jpg" width="140" Height="200"></a>
<a href="./html movies/D.html"><img src="./Images/D1.jpg" width="140" Height="200"></a>
<a href="./html movies/Captain.html"><img src="./Images/Captain1.jpg" Width="140" Height="200"></a>
<a href="./html movies/L.html"><img src="./Images/L1.webp" Width="140" Height="200"></a>
<a href="./html movies/PA.html"><img src="./Images/PA1.jpg" width="140" Height="200"></a>
<a href="./html movies/R.html"><img src="./Images/R.jpg" Width="140" Height="200"></a>
<a href="./html movies/Jogi.html"><img src="./Images/Jogi3.jpg" Width="140" Height="200"></a>
<a href="./html movies/C.html"><img src="./Images/C.jpg" width="140" Height="200"></a>
<a href="./html movies/VR.html"><img src="./Images/VR.jpg" width="140" Height="200"></a>
<a href="./html movies/KS1.html"><img src="./Images/KS1.jpg" width="140" Height="200"></a>

</div>

<h2><a href="web_series.php">LATEST WEB SERIES</h2>

<div class="scroll-container">

<a href="Delhi_Crimes.php"><img src="./Images/DC1.jpg" Width="140" Height="200"></a>
<a href="TamilRockers.php"><img src="./Images/TR1.jpg" width="140" Height="200"></a>
<a href="Emoji.php"><img src="./Images/Emoji1.jpg" width="140" Height="200"></a>
<a href="Victim.php"><img src="./Images/Victim1.jpg" width="140" Height="200"></a>
<a href="Paper_Rocket.php"><img src="./Images/Paper_Rocket.webp" width="140" Height="200"></a>
<a href="P_S-2.php"><img src="./Images/Parampara_Season-2.jpg" width="140" Height="200"></a>
<a href="Meme_Boys.php"><img src="./Images/Meme-Boys.webp" width="140" Height="200"></a>
<a href="IPTBOD.php"><img src="./Images/IPTBOD.jpeg" Width="140" Height="200"></a>
<a href="Maa_Nella_Tank.php"><img src="./Images/MNT.jpg" width="140" Height="200"></a>
<a href="Shoorveer.php"><img src="./Images/S-s1(1).jpeg" width="140" Height="200"></a>

</div>

<h2><a href="movies.php">TOP RATED MOVIES</h2>

<div class="scroll-container">

<a href="./html movies/html  video(Vaaitha).html"><img src="./Images/Vaaitha2.jpg" width="140" Height="200"></a>
<a href="./html movies/html  video(777_Charlie).html"><img src="./Images/707C.jpg" width="140" Height="200"></a>
<a href="./html movies/SK.html"><img src="./Images/SK.jpg" width="140" Height="200"></a>
<a href="./html movies/html  video(K_Pravin_Tambe).html"><img src="./Images/KPT.jpg" width="140" Height="200"></a>
<a href="./html movies/Jogi.html"><img src="./Images/Jogi3.jpg" Width="140" Height="200"></a>
<a href="./html movies/KK.html"><img src="./Images/KK1.png" width="140" Height="200"></a>
<a href="./html movies/VP.html"><img src="./Images/VP1.webp" width="140" Height="200"></a>
<a href="./html movies/KV.html"><img src="./Images/KV.jpg" width="140" Height="200"></a>
<a href="./html movies/html  video(Vikram).html"><img src="./Images/Vikram2.jpg" width="140" Height="200"></a>
<a href="./html movies/T.html"><img src="./Images/T.jpg" Width="140" Height="200"></a>

</div>

<h2><a href="web_series.php">TOP RATED WEB SERIES</h2>

<div class="scroll-container">

<a href="Kuthukku_Pathu.php"><img src="./Images/KP.webp" width="140" Height="200"></a>
<a href="KKK.php"><img src="./Images/KKK.jpeg" width="140" Height="200"></a>
<a href="London_Files.php"><img src="./Images/london-files.jpg" width="140" Height="200"></a>
<a href="Paper_Rocket.php"><img src="./Images/Paper_Rocket.webp" width="140" Height="200"></a>
<a href="Rocket_Boys.php"><img src="./Images/RB.jpg" Width="140" Height="200"></a>
<a href="Ammuchi.php"><img src="./Images/Ammuchi1.jpg" width="140" Height="200"></a>
<a href="Kaarmegam.php"><img src="./Images/Karmegam1.jpg" width="140" Height="200"></a>
<a href="Home_Shanti.php"><img src="./Images/HS1.jpeg" width="140" Height="200"></a>
<a href="Cubicles.php"><img src="./Images/C-2(1).jpg" width="140" Height="200"></a>
<a href="Human.php"><img src="./Images/H-1(1).jpg" Width="140" Height="200"></a>

</div>

<h2>ACTION MOVIES<h2>

<div class="scroll-container">

<a href="./html movies/html  video(Beast).html"><img src="./Images/Beast1.webp" width="140" Height="200"></a>
<a href="./html movies/VR.html"><img src="./Images/VR.jpg" width="140" Height="200"></a>
<a href="./html movies/html  video(Maaran).html"><img src="./Images/Maaran1.jpg" Width="140" Height="200"></a>
<a href="./html movies/html  video(Don).html"><img src="./Images/Don2.jpg" width="140" Height="200"></a>
<a href="./html movies/html  video(Vikram).html"><img src="./Images/Vikram2.jpg" width="140" Height="200"></a>
<a href="./html movies/C.html"><img src="./Images/C.jpg" width="140" Height="200"></a>
<a href="./html movies/html  video(Valimai).html"><img src="./Images/Valimai2.jpg" width="140" Height="200"></a>
<a href="./html movies/html  video(RRR).html"><img src="./Images/RRR1.jpg" width="140" Height="200"></a>
<a href="./html movies/html  video(KGF2).html"><img src="./Images/Kgf_2.jpeg" width="140" Height="200"></a>
<a href="./html movies/html  video(FIR).html"><img src="./Images/FIR2.jpg" width="140" Height="200"></a>

</div>

<h2>ADVENTURE MOVIES</h2>

<div class="scroll-container">

<a href="./html movies/ASN.html"><img src="./Images/ASN1.jpg" width="140" Height="200"></a>
<a href="./html movies/VR.html"><img src="./Images/VR.jpg" width="140" Height="200"></a>
<a href="./html movies/Sham.html"><img src="./Images/Sham1.jpg" width="140" Height="200"></a>
<a href="./html movies/html  video(777_Charlie).html"><img src="./Images/707C.jpg" width="140" Height="200"></a>

</div>

<h2>BIOGRAPHY MOVIES</h2>

<div class="scroll-container">

<a href="./html movies/Jhund.html"><img src="./Images/Jhund1.jpg" width="140" Height="200"></a>
<a href="./html movies/SM.html"><img src="./Images/SM1.webp" width="140" Height="200"></a>
<a href="./html movies/html  video(Rocketry THe Nambi Effect).html"><img src="./Images/RTNE.jpg" width="140" Height="200"></a>
<a href="./html movies/GK.html"><img src="./Images/GK1.jpg" width="140" Height="200"></a>

</div>

<h2>COMEDY MOVIES</h2>

<div class="scroll-container">

<a href="./html movies/html  video(Oh My Dog).html"><img src="./Images/Oh My Dog2.jpg" width="140" Height="200"></a>
<a href="./html movies/html  video(Don).html"><img src="./Images/Don2.jpg" width="140" Height="200"></a>
<a href="./html movies/html  video(Koogle Kuttapan).html"><img src="./Images/Google Kuttapan2.jpg" width="140" Height="200"></a>
<a href="./html movies/MDB.html"><img src="./Images/MDB.jpg" width="140" Height="200"></a>
<a href="./html movies/html  video(KRK).html"><img src="./Images/KRK2.jpg" width="140" Height="200"></a>
<a href="./html movies/html  video(Hostel).html"><img src="./Images/Hostel2.jpg" width="140" Height="200"></a>
<a href="./html movies/html  video(Naai_Sekar).html"><img src="./Images/Nai_Sekar.jpg" width="140" Height="200"></a>
<a href="./html movies/K.html"><img src="./Images/K.jpg" Width="140" Height="200"></a>
<a href="./html movies/html  video(Idiot).html"><img src="./Images/Idiot2.jpg" width="140" Height="200"></a>
<a href="./html movies/gg.html"><img src="./Images/gg.jpg" width="140" Height="200"></a>

</div>

<h2>CRIME MOVIES</h2>

<div class="scroll-container">

<a href="./html movies/html  video(Valimai).html"><img src="./Images/Valimai2.jpg" width="140" Height="200"></a>
<a href="./html movies/html  video(Cadaver).html"><img src="./Images/Cadaver1.jpg" width="140" Height="200"></a>
<a href="./html movies/html  video(Maha).html"><img src="./Images/Maha2.jpg" width="140" Height="200"></a>
<a href="./html movies/html  video(Nenjuku Needhi).html"><img src="./Images/Nenjuku Needhi2.jpg" width="140" Height="200"></a>
<a href="./html movies/html  video(Beast).html"><img src="./Images/Beast1.webp" width="140" Height="200"></a>
<a href="./html movies/html  video(FIR).html"><img src="./Images/FIR2.jpg" width="140" Height="200"></a>
<a href="./html movies/html  video(Visithiran).html"><img src="./Images/Visithiran2.jpg" width="140" Height="200"></a>
<a href="./html movies/C.html"><img src="./Images/C.jpg" width="140" Height="200"></a>
<a href="./html movies/html  video(R23_Criminal_Diary).html"><img src="./Images/R23_Criminal_Diary.jpg" width="140" Height="200"></a>
<a href="./html movies/html  video(Selfie).html"><img src="./Images/Selfie2.jpg" width="140" Height="200"></a>

</div>

<h2>DRAMA MOVIES</h2>

<div class="scroll-container">

<a href="./html movies/html  video(Gargi).html"><img src="./Images/Gargi1.jpg" width="140" Height="200"></a>
<a href="./html movies/html  video(Vaatam).html"><img src="./Images/Vattam2.jpg" width="140" Height="200"></a>
<a href="./html movies/html  video(Maamanithan).html"><img src="./Images/Maamanithan1.jpg" width="140" Height="200"></a>
<a href="./html movies/html  video(Mudhal_Ne).html"><img src="./Images/MNMN.jpg" width="140" Height="200"></a>
<a href="./html movies/html  video(Veetla Vishasam).html"><img src="./Images/V_V.jpg" width="140" Height="200"></a>
<a href="./html movies/html  video(Saani_Kaayidham).html"><img src="./Images/S_K.jpg" width="140" Height="200"></a>
<a href="./html movies/html  video(Oh My Dog).html"><img src="./Images/Oh My Dog2.jpg" width="140" Height="200"></a>
<a href="./html movies/html  video(Hey Sinamika).html"><img src="./Images/Hey Sinamika2.jpg" width="140" Height="200"></a>
<a href="./html movies/html  video(Anbarivu).html"><img src="./Images/AA.jpg" width="140" Height="200"></a>
<a href="./html movies/html  video(Nenjuku Needhi).html"><img src="./Images/Nenjuku Needhi2.jpg" width="140" Height="200"></a>

</div>

<h2>FANTASY MOVIES</h2>

<div class="scroll-container">

<a href="./html movies/MDB.html"><img src="./Images/MDB.jpg" width="140" Height="200"></a>
<a href="./html movies/Jaadugar.html"><img src="./Images/Jaadugar1.jpg" width="140" Height="200"></a>

</div>

<h2>HORROR MOVIES</h2>

<div class="scroll-container">

<a href="./html movies/Yaaro.html"><img src="./Images/Yaaro1.jpg" Width="140" Height="200"></a>
<a href="./html movies/html  video(Idiot).html"><img src="./Images/Idiot2.jpg" width="140" Height="200"></a>
<a href="./html movies/ZR.html"><img src="./Images/ZR1.jpg" Width="140" Height="200"></a>
<a href="./html movies/html  video(Hostel).html"><img src="./Images/Hostel2.jpg" width="140" Height="200"></a>
<a href="./html movies/MP.html"><img src="./Images/MP1.jpg" Width="140" Height="200"></a>
<a href="./html movies/K.html"><img src="./Images/K.jpg" Width="140" Height="200"></a>

</div>

<h2>MYSTERY MOVIES</h2>

<div class="scroll-container">

<a href="./html movies/html  video(FIR).html"><img src="./Images/FIR2.jpg" width="140" Height="200"></a>
<a href="./html movies/Koorman.html"><img src="./Images/Koorman1.jpg" width="140" Height="200"></a>
<a href="./html movies/html  video(Visithiran).html"><img src="./Images/Visithiran2.jpg" width="140" Height="200"></a>
<a href="./html movies/Dejavu.html"><img src="./Images/Dejavu1.jpeg" Width="140" Height="200"></a>
<a href="./html movies/html  video(Cadaver).html"><img src="./Images/Cadaver1.jpg" width="140" Height="200"></a>
<a href="./html movies/html  video(Maha).html"><img src="./Images/Maha2.jpg" width="140" Height="200"></a>
<a href="./html movies/YT.html"><img src="./Images/YT.jpg" Width="140" Height="200"></a>
<a href="./html movies/Jiivi.html"><img src="./Images/jiivi1.jpg" Width="140" Height="200"></a>
<a href="./html movies/html  video(Nenjuku Needhi).html"><img src="./Images/Nenjuku Needhi2.jpg" width="140" Height="200"></a>
<a href="./html movies/html  video(Ward 126).html"><img src="./Images/Ward_126.jpg" width="140" Height="200"></a>

</div>

<h2>ROMANCE MOVIES</h2>

<div class="scroll-container">

<a href="./html movies/html  video(KRK).html"><img src="./Images/KRK2.jpg" width="140" Height="200"></a>
<a href="./html movies/html  video(Radhe Shyam).html"><img src="./Images/Radhe Shyam2.jpg" width="140" Height="200"></a>
<a href="./html movies/html  video(Maha).html"><img src="./Images/Maha2.jpg" Width="140" Height="200"></a>
<a href="./html movies/html  video(Naai_Sekar).html"><img src="./Images/Nai_Sekar.jpg" width="140" Height="200"></a>
<a href="./html movies/html  video(Hey Sinamika).html"><img src="./Images/Hey Sinamika2.jpg" width="140" Height="200"></a>
<a href="./html movies/html  video(Don).html"><img src="./Images/Don2.jpg" width="140" Height="200"></a>
<a href="./html movies/html  video(Manmatha Leelai).html"><img src="./Images/M_L.jpg" width="140" Height="200"></a>
<a href="./html movies/html  video(Enna Solla Pogirai).html"><img src="./Images/ESP.jpg" width="140" Height="200"></a>
<a href="./html movies/html  video(Mudhal_Ne).html"><img src="./Images/MNMN.jpg" width="140" Height="200"></a>
<a href="./html movies/html  video(Bestie).html"><img src="./Images/Bestie1.webp" width="140" Height="200"></a>

</div>
<h2>SCI-FI MOVIES</h2>

<div class="scroll-container">

<a href="./html movies/Captain.html"><img src="./Images/Captain1.jpg" Width="140" Height="200"></a>
<a href="./html movies/html  video(Koogle Kuttapan).html"><img src="./Images/Google Kuttapan2.jpg" width="140" Height="200"></a>

</div>

<h2>SPORT MOVIES</h2>

<div class="scroll-container">

<a href="./html movies/html  video(Taanakkaran).html"><img src="./Images/Taanakkaran2.jpg" width="140" Height="200"></a>
<a href="./html movies/SM.html"><img src="./Images/SM1.webp" width="140" Height="200"></a>
<a href="./html movies/Clap.html"><img src="./Images/Clap1.jpg" width="140" Height="200"></a>
<a href="./html movies/JC.html"><img src="./Images/JC1.jpg" width="140" Height="200"></a>
<img src="./Images/83.jpg" width="140" Height="200">
<a href="./html movies/Jhund.html"><img src="./Images/Jhund1.jpg" width="140" Height="200"></a>
<a href="./html movies/html  video(K_Pravin_Tambe).html"><img src="./Images/KPT.jpg" width="140" Height="200"></a>

</div>

<h2>THRILLER MOVIES</h2>

<div class="scroll-container">

<a href="./html movies/html  video(Ward 126).html"><img src="./Images/Ward_126.jpg" width="140" Height="200"></a>
<a href="./html movies/C.html"><img src="./Images/C.jpg" width="140" Height="200"></a>
<a href="./html movies/Dejavu.html"><img src="./Images/Dejavu1.jpeg" Width="140" Height="200"></a>
<a href="./html movies/html  video(Valimai).html"><img src="./Images/Valimai2.jpg" width="140" Height="200"></a>
<a href="./html movies/html  video(Bestie).html"><img src="./Images/Bestie1.webp" width="140" Height="200"></a>
<a href="./html movies/html  video(KGF2).html"><img src="./Images/Kgf_2.jpeg" width="140" Height="200"></a>
<a href="./html movies/html  video(Patampoochi).html"><img src="./Images/Pattampoochi2.jpg" width="140" Height="200"></a>
<a href="./html movies/html  video(Maaran).html"><img src="./Images/Maaran1.jpg" Width="140" Height="200"></a>
<a href="./html movies/html  video(Vikram).html"><img src="./Images/Vikram2.jpg" width="140" Height="200"></a>
<a href="./html movies/html  video(O2).html"><img src="./Images/o2.jpg" width="140" Height="200"></a>

</div>

<h2><a href="movies.php">2022 INDIAN MOVIES</h2>

<div class="scroll-container">

<a href="./html movies/html  video(Radhe Shyam).html"><img src="./Images/Radhe Shyam2.jpg" width="140" Height="200">
<a href="./html movies/html  video(Beast).html"><img src="./Images/Beast1.webp" width="140" Height="200"></a>
<a href="./html movies/html  video(Valimai).html"><img src="./Images/Valimai2.jpg" width="140" Height="200"></a>
<a href="./html movies/html  video(KGF2).html"><img src="./Images/Kgf_2.jpeg" width="140" Height="200"></a>
<a href="./html movies/html  video(Vikram).html"><img src="./Images/Vikram2.jpg" width="140" Height="200"></a>
<a href="./html movies/html  video(Maaran).html"><img src="./Images/Maaran1.jpg" Width="140" Height="200"></a>
<a href="./html movies/html  video(RRR).html"><img src="./Images/RRR1.jpg" width="140" Height="200"></a>
<a href="./html movies/C.html"><img src="./Images/C.jpg" width="140" Height="200"></a>
<a href="./html movies/Vm.html"><img src="./Images/Vm1.jpg" width="140" Height="200"></a>
<a href="./html movies/html  video(KRK).html"><img src="./Images/KRK2.jpg" width="140" Height="200"></a>
<a href="./html movies/html  video(Don).html"><img src="./Images/Don2.jpg" width="140" Height="200"></a>
<a href="./html movies/html  video(Maha).html"><img src="./Images/Maha2.jpg" Width="140" Height="200"></a>
<a href="./html movies/yaanai.html"><img src="./Images/Yaanai.jpg" width="140" Height="200"></a>
<a href="./html movies/html  video(FIR).html"><img src="./Images/FIR2.jpg" width="140" Height="200"></a>
<a href="./html movies/html  video(Rocketry THe Nambi Effect).html"><img src="./Images/RTNE.jpg" width="140" Height="200"></a>
<a href="./html movies/html  video(Hey Sinamika).html"><img src="./Images/Hey Sinamika2.jpg" width="140" Height="200"></a>
<a href="./html movies/html  video(Patampoochi).html"><img src="./Images/Pattampoochi2.jpg" width="140" Height="200"></a>
<a href="./html movies/html  video(Nenjuku Needhi).html"><img src="./Images/Nenjuku Needhi2.jpg" width="140" Height="200"></a>
<a href="./html movies/html  video(Taanakkaran).html"><img src="./Images/Taanakkaran2.jpg" width="140" Height="200"></a>
<a href="./html movies/Vezham.html"><img src="./Images/V.jpg" Width="140" Height="200"></a>

</div>

<h2><a href="web_series.php">2022 INDIAN WEBSERIES</h2>

<div class="scroll-container">

<a href="London_Files.php"><img src="./Images/london-files.jpg" width="140" Height="200"></a>
<a href="Kuthukku_Pathu.php"><img src="./Images/KP.webp" width="140" Height="200"></a>
<a href="Shoorveer.php"><img src="./Images/S-s1(1).jpeg" width="140" Height="200"></a>
<a href="./html movies/html  video(Suzhal).html"><img src="./Images/suzhal2.jpg" Width="140" Height="200"></a>
<a href="Kaarmegam.php"><img src="./Images/Karmegam1.jpg" width="140" Height="200"></a>
<a href="Victim.php"><img src="./Images/Victim1.jpg" width="140" Height="200"></a>
<a href="IPTBOD.php"><img src="./Images/IPTBOD.jpeg" Width="140" Height="200"></a>
<a href="Escaype_Live.php"><img src="./Images/Escaype-Live.webp" width="140" Height="200"></a>
<a href="KKK.php"><img src="./Images/KKK.jpeg" Width="140" Height="200"></a>
<a href="9_Hours.php"><img src="./Images/9_hours.jpg" width="140" Height="200"></a>
<a href="Cubicles.php"><img src="./Images/C-2(1).jpg" width="140" Height="200"></a>
<a href="Paper_Rocket.php"><img src="./Images/Paper_Rocket.webp" width="140" Height="200"></a>
<a href="Meme_Boys.php"><img src="./Images/Meme-Boys.webp" width="140" Height="200"></a>
<a href="Maa_Nella_Tank.php"><img src="./Images/MNT.jpg" width="140" Height="200"></a>
<a href="Human.php"><img src="./Images/H-1(1).jpg" Width="140" Height="200"></a>
<a href="Emoji.php"><img src="./Images/Emoji1.jpg" width="140" Height="200"></a>
<a href="P_S-2.php"><img src="./Images/Parampara_Season-2.jpg" width="140" Height="200"></a>
<a href="TamilRockers.php"><img src="./Images/TR1.jpg" width="140" Height="200"></a>
<a href="Delhi_Crimes.php"><img src="./Images/DC1.jpg" Width="140" Height="200"></a>
<a href="Ammuchi.php"><img src="./Images/Ammuchi1.jpg" width="140" Height="200"></a>

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



