<?php 

//simple e-wallet

$balance =2.0;

$hundredplus = 2.0;


$minus = $balance - $hundredplus;

// if($minus < 0)
// {
//     print("Insufficient balance !<br>");
//     print ("balance : RM".$balance);
// } else {
//     $balance = $minus;
//     print("Payment has been made!<br>");
//     print ("balance : RM".$balance);
// }


$mainMenu = "osdcjksioxjc0scdsj";


switch($mainMenu){

    case "Startgame" :
        print("game will start in 10sec");
        break;
    case "Setting" :  
        print("Redirect to setting page");
        break;
    case "exit" :
        print("Game will exit");
        break;
    default :
        print "error!";


}








?>