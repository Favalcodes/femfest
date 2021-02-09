<?php
// Reads the variables sent via POST
$sessionId   = $_POST["sessionId"];  
$serviceCode = $_POST["serviceCode"];  
$text = $_POST["text"];
//This is the first menu screen
if ( $text == "" ) {
$response  = "CON Welcome to FemfestMakurdi \n";
$response .= "1. New User \n";
$response .= "2. Check Balance \n";
$response .= "3. Request for funds \n";
$response .= "4. Account Settings";
}
// Menu for a user who selects '1' from the first menu
// Will be brought to this second menu screen
else if ($text == "1") {
$response  = "CON  New User \n";
$response .= "1. Enter Full name \n";
$response .= "2. Create Virtual account \n";
$response .= "3. Create Pin";
}
// Menu for user who selects '2' from the first menu
else if ($text == "2") {
$response  = "CON  Check balance \n";
$response .= "1. Input Pin";
}
// Menu for user who selects '3' from the first menu
else if ($text == "3") {
$response  = "CON  Request for funds \n";
$response .= "1. Input Amount \n";
$response .= "2. Enter Reason for the funds";
}
// Menu for user who selects '4' from the first menu
else if ($text == "4") {
$response  = "CON  Account Settings \n";
$response .= "1. See Profile \n";
$response .= "2. Change PIN \n";
$response .= "3. Delete Account";
}
//Menu for a user who selects '1' from the second menu above
// Will be brought to this third menu screen
else if ($text == "1*1") {
$response = "CON Full name \n";
$response .= "Please Enter Full Name";
}
else if ($text == "2*1") {
$response = "CON Input PIN \n";
$response .= "Enter PIN to continue \n";
$response .= "Enter 0 to cancel";
}
else if ($text == "3*1") {
$response = "CON Amount";
$response .= "Enter Amount";
}
else if ($text == "3*2") {
$response = "CON Reason";
$response .= "Enter Reason for funds";
}
// // Menu for a user who selects "2" from the second menu above
// // Will be brought to this fourth menu screen
// else if ($text == "1*2") {
// $response = "CON You are about to book a table for 4 \n";
// $response .= "Please Enter 1 to confirm \n";
// }
// // Menu for a user who selects "1" from the fourth menu screen
// else if ($text == "1*2*1") {
// $response = "CON Table for 4 cost -N- 150,000.00 \n";
// $response .= "Enter 1 to continue \n";
// $response .= "Enter 0 to cancel";
// }
// else if ($text == "1*2*1*1") {
// $response = "END Your Table reservation for 4 has been booked";
// }
// else if ($text == "1*2*1*0") {
// $response = "END Your Table reservation for 4 has been canceled";
// }
// // Menu for a user who enters "3" from the second menu above
// // Will be brought to this fifth menu screen
// else if ($text == "1*3") {
// $response = "CON You are about to book a table for 6 \n";
// $response .= "Please Enter 1 to confirm \n";
// }
// // Menu for a user who enters "1" from the fifth menu
// else if ($text == "1*3*1") {
// $response = "CON Table for 6 cost -N- 250,000.00 \n";
// $response .= "Enter 1 to continue \n";
// $response .= "Enter 0 to cancel";
// }
// else if ($text == "1*3*1*1") {
// $response = "END Your Table reservation for 6 has been booked";
// }
// else if ($text == "1*3*1*0") {
// $response = "END Your Table reservation for 6 has been canceled";
// }
// // Menu for a user who enters "4" from the second menu above
// // Will be brought to this sixth menu screen
// else if ($text == "1*4") {
// $response = "CON You are about to book a table for 8 \n";
// $response .= "Please Enter 1 to confirm \n";
// }
// // Menu for a user who enters "1" from the sixth menu
// else if ($text == "1*4*1") {
// $response = "CON Table for 8 cost -N- 250,000.00 \n";
// $response .= "Enter 1 to continue \n";
// $response .= "Enter 0 to cancel";
// }
// else if ($text == "1*4*1*1") {
// $response = "END Your Table reservation for 8 has been booked";
// }
// else if ($text == "1*4*1*0") {
// $response = "END Your Table reservation for 8 has been canceled";
// }
//echo response
header('Content-type: text/plain');
echo $response
?>