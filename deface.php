<?php


function create(){

system("clear");
echo "
             ███████████████████████████
             ███████▀▀▀░░░░░░░▀▀▀███████
             ████▀░░░░░░░░░░░░░░░░░▀████
             ███│░░░░░░░░░░░░░░░░░░░│███
             ██▌│░░░░░░░░░░░░░░░░░░░│▐██
             ██░└┐░░░░░░░░░░░░░░░░░┌┘░██
             ██░░└┐░░░░░░░░░░░░░░░┌┘░░██
             ██░░┌┘▄▄▄▄▄░░░░░▄▄▄▄▄└┐░░██
             ██▌░│██████▌░░░▐██████│░▐██
             ███░│▐███▀▀░░▄░░▀▀███▌│░███
             ██▀─┘░░░░░░░▐█▌░░░░░░░└─▀██
             ██▄░░░▄▄▄▓░░▀█▀░░▓▄▄▄░░░▄██
             ████▄─┘██▌░░░░░░░▐██└─▄████
             █████░░▐█─┬┬┬┬┬┬┬─█▌░░█████
             ████▌░░░▀┬┼┼┼┼┼┼┼┬▀░░░▐████
             █████▄░░░└┴┴┴┴┴┴┴┘░░░▄█████
             ███████▄░░░░░░░░░░░▄███████
             ██████████▄▄▄▄▄▄▄██████████
             ███████████████████████████
";

echo"
 
";
 
echo"\033[1;32m ------‐------------------------------------------";
 
echo"
";
echo"\033[1;36m               Author : wh1t3 shadow    ";
 
echo"
";
echo "\033[1;36m              Bangladesh Cyber Ghost      ";
 
echo"
";
echo"\033[1;32m -----‐-----------‐--------------------------------";
echo"
 
 
";
$a= readline("your code name : ");
$d= readline("\033[1;35m your title : ");
$t= readline("\033[1;33m your team name : ");
 
 
echo"
 
";
 
 
echo"
 
";
 
/*
echo " ﻿\033[0;36m
 
﻿<html>
 <head>
 <title>hacked</title>
 </head>
<body bgcolor=black>
 <br> <br> <br> <br>
<center>
 <marquee> <font color= #00FF00 size=8> $a</font> </marquee>
 <hr color=blue width=90%>
 <br> <br>
 <center><p style='color:red; font-size:45px;'>$d</h1></center>
<br> <br> <br>
<img src='https://i.gifer.com/CX6Z.gif' height='700px' width='750px'>
 </center>
<br> <br> <br>
<center>
 <font size=7 color=blue>Don't play with me <hr color=blue width=50%> <hr color=blue width=50%>$t  <hr color=blue width=50%>
</font>
</center>
</body>
 </html>
 
 
";
*/
 
 
 
 
 
$myfile = fopen("deface.html", "w") or die("Unable to open file!");
 
 
$txt = "
﻿<html>
 <head>
 <title>hacked</title>
 </head>
<body bgcolor=black>
 <br> <br> <br> <br>
<center>
 <marquee> <font color= #00FF00 size=8> $a</font> </marquee>
 <hr color=blue width=90%>
 <br> <br>
 <center><p style='color:red; font-size:45px;'>$d</h1></center>
<br> <br> <br>
<img src='https://i.gifer.com/CX6Z.gif' height='700px' width='750px'>
 </center>
<br> <br> <br>
<center>
 <font size=7 color=blue>Don't play with me <hr color=blue width=50%> <hr color=blue width=50%>$t  <hr color=blue width=50%>
</font>
</center>
</body>
 </html>
";
 
 
fwrite($myfile, $txt);
fclose($myfile);
 
 
system("clear");
system("cp deface.html /sdcard");
echo"
 
 
";
echo"\033[1;35m       This deface page saved to your phone storage";
 
 
 
echo"
 
";
 
echo"                 Thanks for useing this tool";
 
echo"
 
";
}

function download(){

system ("clear");
echo"
                    ▄───▄
                    █▀█▀█
                    █▄█▄█
                    ─███──▄▄
                    ─████▐█─█
                    ─████───█
                    ─▀▀▀▀▀▀▀

";
echo"
  
";
echo"\033[1;32m ------‐---------------------------------------------";
echo"
";
echo"\033[1;36m               Author : wh1t3 shadow     ";
echo"
";
echo "\033[1;36m              Bangladesh Cyber Ghost      ";
echo"
";
echo"\033[1;32m -----‐-----------‐----------------------------------";
echo"
 
 
 
 
 
";


$a=readline("inter your deface url :  ");

$url = file_get_contents($a);

$myfile = fopen("deface.html", "w") or die("Unable to open file");

$txt = $url;

fwrite($myfile, $txt);

system("clear");
system("cp deface.html /sdcard");
echo"


";
echo"\033[1;35m       This deface page saved to your phone storage";



echo"

";

echo"                 Thanks for useing this tool";

echo"

";


}


system("clear");

echo"

          ░█──░█ █──█ ▄█─ ▀▀█▀▀ █▀▀█ 　
          ░█░█░█ █▀▀█ ─█─ ──█── ──▀▄ 　
          ░█▄▀▄█ ▀──▀ ▄█▄ ──▀── █▄▄█ 　

          ░█▀▀▀█ █──█ █▀▀█ █▀▀▄ █▀▀█ █───█
          ─▀▀▀▄▄ █▀▀█ █▄▄█ █──█ █──█ █▄█▄█
          ░█▄▄▄█ ▀──▀ ▀──▀ ▀▀▀─ ▀▀▀▀ ─▀─▀─
";


echo"
  
";
echo"\033[1;32m ------‐---------------------------------------------";
echo"
";
echo"\033[1;36m               Author : wh1t3 shadow     ";
echo"
";
echo "\033[1;36m              Bangladesh Cyber Ghost      ";
echo"
";
echo"\033[1;32m -----‐-----------‐----------------------------------";
echo"
 

";
echo"inter 1 for create deface page ";
echo"
            
";
echo"inter 2 for download any deface page from  deface url";
echo"


";

$ab=readline("inter your option number : ");
if ($ab=="1"){


create();
}


elseif ($ab=="2"){

download();
}

else{
echo "inter a valid option";
}




?>
