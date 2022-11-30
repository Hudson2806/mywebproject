<?php

?>

<!DOCTYPE html>
<html>  
 
<title>Songs</title>

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

 .songs{
     margin-top:65px;
 }
 
 .song{
     margin-top:65px;
     display:inline-block;
     width: 33%;
 }

 .song img{
     width: 100%;
     height: 250px;
 }

 
 .song h2 a{
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
   .song {width:100%;
  }
    .song img{width:100%;
        height:550px;
      }
      .song{
     margin-top:100px;}
    
  .header{height:200px;}
    h2 a{font-size:100%;
        text-align:center;}
   ol li a{display:none;}
    h1{font-size:350%;
      width:650px;}
    h3 a{display:none;}
    h3{display:none;}
    .song h2{font-size:300%;
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
     <h1>Indian Video Songs</h1>

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
    
<div class="songs">

<div class="song">
   <h2>2022 SONGS</h2>
   <a href="./html movies/T_MK.html"><img src="./Images/T_MK.jpg" ></a>
</div>

  <div class="song">
    <a href="./html movies/V_TK.html"><img src="./Images/V_TK.jpg" ></a>
</div>

<div class="song">
    <a href="./html movies/TK_T.html"><img src="./Images/TK_T.webp" ></a>
</div>

<div class="song">
   <a href="./html movies/HSR_SR.html"><img src="./Images/HSR_SR.jpg" ></a>
</div>

<div class="song">
   <a href="./html movies/V_KPK.html"><img src="./Images/V_KPK.jpg" ></a>
</div>

<div class="song">
    
    <a href="./html movies/V_MV.html"><img src="./Images/V_MV.webp" ></a>
</div>

<div class="song">
   <a href="./html movies/TW_B.html"><img src="./Images/TW_B.jpg" ></a>
</div>

<div class="song">
   <a href="./html movies/KA_RR.html"><img src="./Images/KA_RR.jpg" ></a>
</div>

<div class="song">
   <a href="./html movies/V_PS.html"><img src="./Images/V_PS.jpg" ></a>
</div>

<div class="song">
   <a href="./html movies/S_Y.html"><img src="./Images/S_Y.jpg" ></a>
</div>

<div class="song">
   <a href="./html movies/M_YR.html"><img src="./Images/M_YR.jpg" ></a>
</div>

<div class="song">
   <a href="./html movies/V_PP.html"><img src="./Images/V_PP.jpg" ></a>
</div>

<div class="song">
   <a href="./html movies/VV_FP.html"><img src="./Images/VV_FP.jpg" ></a>
</div>

<div class="song">
  <a href="./html movies/D_JJ.html"><img src="./Images/D_JJ.jpg" ></a>
</div>

<div class="song">
   <a href="./html movies/D_Bae.html"><img src="./Images/D_Bae.jpg" ></a>
</div>

<div class="song">
   <a href="./html movies/DB_IKK.html"><img src="./Images/DB_IKK.jpg" ></a>
</div>

<div class="song">
   <a href="./html movies/KRK_AT.html"><img src="./Images/KRK_AT.jpg" ></a>
</div>

<div class="song">
   <a href="./html movies/D_PP.html"><img src="./Images/D_PP.jpg" ></a>
</div>

<div class="song">
   <a href="./html movies/KRK_DD.html"><img src="./Images/KRK_DD.jpg" ></a>
</div>

<div class="song">
   <a href="./html movies/V_R.html"><img src="./Images/V_R.jpg" ></a>
</div>

<div class="song">
   <a href="./html movies/FIR_YA.html"><img src="./Images/FIR_YA.jpg" ></a>
</div>

<div class="song">
   <a href="./html movies/VV_DS.html"><img src="./Images/VV_DS.jpg" ></a>
</div>

<div class="song">
   <a href="./html movies/KRK_NP.html"><img src="./Images/KRK_NP.jpg" ></a>
</div>

<div class="song">
   <a href="./html movies/KGF_S.html"><img src="./Images/KGF_S.jpg" ></a>
</div>

<div class="song">
   <a href="./html movies/KK_YY.html"><img src="./Images/KK_YY.jpg" ></a>
</div>

<div class="song">
   <a href="./html movies/KGF_T.html"><img src="./Images/KGF_T.webp" ></a>
</div>

<div class="song">
   <a href="./html movies/KGF_M.html"><img src="./Images/KGF_M.jpg" ></a>
</div>

<div class="song">
   <a href="./html movies/B_AK.html"><img src="./Images/B_AK.webp" ></a>
</div>

<div class="song">
   <a href="./html movies/KGF_AN.html"><img src="./Images/KGF_AN.jpg" ></a>
</div>

<div class="song">
   <a href="./html movies/KRK_TT.html"><img src="./Images/KRK_TT.jpg" ></a>
</div>

<div class="song">
   <a href="./html movies/B_JG.html"><img src="./Images/B_JG.jpg" ></a>
</div>

<div class="song">
   <a href="./html movies/I_OP.html"><img src="./Images/I_OP.jpg" ></a>
</div>

<div class="song">
   <a href="./html movies/RRR_KUK.html"><img src="./Images/RRR_KUK.jpg" ></a>
</div>

<div class="song">
   <a href="./html movies/H_MB.html"><img src="./Images/H_MB.jpg" ></a>
</div>
 
<div class="song">
   <a href="./html movies/RRR_NK.html"><img src="./Images/RRR_NK.jpg" ></a>
</div>

<div class="song">
   <a href="./html movies/ET_UU.html"><img src="./Images/ET_UU.jpg" ></a>
</div>

<div class="song">
   <a href="./html movies/ET_SS.html"><img src="./Images/ET_SS.webp" ></a>
</div>

<div class="song">
   <a href="./html movies/HS_T.html"><img src="./Images/HS_T.jpg" ></a>
</div>

<div class="song">
    
    <a href="./html movies/M_MM.html"><img src="./Images/M_MM.jpg" ></a>
</div>

<div class="song">
   <a href="./html movies/HS_V.html"><img src="./Images/HS_V.jpg" ></a>
</div>
 
<div class="song">
   <a href="./html movies/H_OM.html"><img src="./Images/H_OM.jpg" ></a>
</div>
 
<div class="song">
   <a href="./html movies/M_RR.html"><img src="./Images/M_RR.jpg" ></a>
</div>

<div class="song">
   <a href="./html movies/RRR_K.html"><img src="./Images/RRR_K.jpg" ></a>
</div>

<div class="song">
   <a href="./html movies/RS_U.html"><img src="./Images/RS_U.jpg" ></a>
</div>

<div class="song">
   <a href="./html movies/V_NVM.html"><img src="./Images/V_NVM.jpg" ></a>
</div>
 
<div class="song">
   <a href="./html movies/M_EEC.html"><img src="./Images/M_EEC.jpg" ></a>
</div>
 
<div class="song">
   <a href="./html movies/HS_S.html"><img src="./Images/HS_S.webp" ></a>
</div>
 
<div class="song">
   <a href="./html movies/V_EK.html"><img src="./Images/V_EK.jpg" ></a>
</div>
 
<div class="song">
   <a href="./html movies/ESP_N.html"><img src="./Images/ESP_N.jpg" ></a>
</div>
 
<div class="song">
   <a href="./html movies/OM_S.html"><img src="./Images/OM_S.jpg" ></a>
</div>
 
<div class="song">
   <a href="./html movies/HS_M.html"><img src="./Images/HS_M.jpg" ></a>
</div>
 
<div class="song">
   <a href="./html movies/Mayakirriye.html"><img src="./Images/Mayakirriye.jpg" ></a>
</div>
 
<div class="song">
   <a href="./html movies/NS_LLA.html"><img src="./Images/NS_LLA.jpg" ></a>
</div>
 
<div class="song">
   <a href="./html movies/ESP_OP.html"><img src="./Images/ESP_OP.jpg" ></a>
</div>
 
<div class="song">
   <a href="./html movies/SNSM_VP.html"><img src="./Images/SNSM_VP.jpg" ></a>
</div>
 
<div class="song">
   <a href="./html movies/M_PU.html"><img src="./Images/M_PU.jpg" ></a>
</div>
 
<div class="song">
   <a href="./html movies/AA_AA.html"><img src="./Images/AA_AA.jpg" ></a>
</div>
 
<div class="song">
   <a href="./html movies/OM_LS.html"><img src="./Images/OM_LS.jpg" ></a>
</div>
 
<div class="song">
   <a href="./html movies/JB_ME.html"><img src="./Images/JB_ME.jpg" ></a>
</div>
 
<div class="song">
   <a href="./html movies/ESP_CP.html"><img src="./Images/ESP_CP.jpg" ></a>
</div>
 
<div class="song">
   <a href="./html movies/A_K.html"><img src="./Images/AA_K.webp" ></a>
</div>

<div class="song">
   <a href="./html movies/T_VT.html"><img src="./Images/T_VT.webp" ></a>
</div>
 
<div class="song">
   <a href="./html movies/VVS_TK.html"><img src="./Images/VVS_TK.jpg" ></a>
</div>
 
<div class="song">
   <a href="./html movies/M_MTB.html"><img src="./Images/M_MTB.webp" ></a>
</div>
 
<div class="song">
   <a href="./html movies/V_SS.html"><img src="./Images/V_SS.jpg" ></a>
</div>
 
<div class="song">
   <a href="./html movies/P_EBIEP.html"><img src="./Images/P_EBIEP.jpg" ></a>
</div>
 
<div class="song">
   <a href="./html movies/AA_K.html"><img src="./Images/A_K.jpg" ></a>
</div>
 
<div class="song">
   <a href="./html movies/V_DDT.html"><img src="./Images/V_DDT.jpg" ></a>
</div>
 
<div class="song">
   <a href="./html movies/KK_IEK.html"><img src="./Images/KK_IEK.jpg" ></a>
</div><br>

<div class="song">
   <h2>2021 SONGS</h2>
   <a href="./html movies/KK_LL.html"><img src="./Images/KK_LL.jpg" ></a>
</div>

<div class="song">
   <a href="./html movies/A_B.html"><img src="./Images/B_A.jpg" ></a>
</div>

<div class="song">
   <a href="./html movies/M_M.html"><img src="./Images/M_M.webp" ></a>
</div>
 
<div class="song">
   <a href="./html movies/E_TT.html"><img src="./Images/E_TT.webp" ></a>
</div>

<div class="song">
   <a href="./html movies/OM_BK.html"><img src="./Images/OM_BK.jpg" ></a>
</div>

<div class="song">
   <a href="./html movies/H_D.html"><img src="./Images/H_D.jpg" ></a>
</div>

<div class="song">
   <a href="./html movies/D_C.html"><img src="./Images/D_C.jpg" ></a>
</div>

<div class="song">
   <a href="./html movies/YY.html"><img src="./Images/YY.jpg" ></a>
</div>

<div class="song">
   <a href="./html movies/Thooriga.html"><img src="./Images/Thooriga.jpg" ></a>
</div>

<div class="song">
   <a href="./html movies/D_PVV.html"><img src="./Images/D_PVV.jpg" ></a>
</div>

<div class="song">
   <a href="./html movies/K_P.html"><img src="./Images/K_P.jpg" ></a>
</div><br>

<div class="song">
   <h2>2020 SONGS</h2>
   <a href="./html movies/DB_TT.html"><img src="./Images/DB_TT.jpg" ></a>
</div>

<div class="song">
   <a href="./html movies/KOK_KV.html"><img src="./Images/KOK_KV.jpg" ></a>
</div><br>

<div class="song">
  <h2> 2018 SONGS</h2>
   <a href="./html movies/K_OP.html"><img src="./Images/K_OP.jpg" ></a>
</div>

<div class="song">
   <a href="./html movies/M2_RB.html"><img src="./Images/M2_RB.webp" ></a>
</div><br>

 
</div>

<div class="footer">

    <a href="home.php">Home</a>
    <a href="songs.php">Songs</a>
    <a href="movies.php">Movies</a>
    <a href="web_series.php">Web Series</a>

</div>



</body>


</html>