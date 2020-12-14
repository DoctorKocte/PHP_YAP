<?php
session_start();
$_SESSION['history'][] = $_SERVER['REQUEST_URI'];
$_SESSION['counter'][1] = $_SESSION['counter'][1] + 1;
echo $_SESSION['counter'][1];
?>
<HTML>
    <HEAD>
    <TITLE>Mr.Kitty</TITLE>
    </HEAD>
    <BODY style="background-color:black;">  
    <CENTER>      
                   <img src="mrkitty.png">
    </CENTER>
    </BODY>
    
    <table>
        <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
           
        }
        th, td {
            padding: 5px;
            vertical-align: top;
        }
        th {
            text-align: center;
         
        }
        </style>
        </table>
      
        
          <style>
          h6 {
            text-align: center;
            text-indent: 5px; /*красная cтрока */
            background: #242523; /* Цвет фона под заголовком */
            color: white; /* Цвет текста */
            padding: 8px;
            height: 20px;
            width: 955px;
            margin-left: 273px;
            word-spacing: 750px;
           }
          </style>
          <p>
            <body link="red" vlink="#FFFFFF" alink="#DAA520">
        <h6 style="font-family:calibri;" >  <FONT style="color:rgb(66, 66, 64);" SIZE="5"> Albums </FONT>  <FONT SIZE="5">  <a href="interview.html">Interview </a></FONT> </h6> 
        </p>
      </body>
        <table style="width:15%" ALIGN="center">
        <tr>
          <th> <img src="1.jpg" width="230" height="230" hspace="10"> <h5 style="color:grey;"> <a href="https://mrkittydm.bandcamp.com/album/ephemeral"> EPHEMERAL </a> </h5> </th>
          <th> <img src="2.jpg" width="230" height="230" hspace="10">  <h5 style="color: grey;" > A.I. </h5> </th>
          <th> <img src="3.jpg" width="230" height="230" hspace="10">  <h5 style="color:grey;" > FRAGMENTS </h5> </th>
          <th> <img src="4.jpg" width="120" height="120" hspace="10"  > 
  
         </tr>

         <tr>
          <th><img src="5.jpg  " width="230" height="230" hspace="10">  <h5 style="color:grey;" > TIME </h5> </th>
          <th><img src="6.jpg" width="230" height="230" hspace="10">  <h5 style="color:grey;" > LIFE </h5> </th>
          <th> <img src="7.jpg" width="230" height="230" hspace="10">  <h5 style="color:grey;"> ETERNITY </h5> </th>
          </tr>
     
          <tr>
            <th><img src="8.jpg  " width="230" height="230" hspace="10">  <h5 style="color:grey;" > D E Δ T H  </h5> </th>
            <th><img src="9.jpg" width="230" height="230" hspace="10">  <h2 style="color:grey;" > -+ </h2> </th>
          </tr>
       

        </table>
        
        </body>
    </HTML>
    