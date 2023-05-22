<?php
global $users;

// Check data.json file exist
if(file_exists('data.json'))
{
    $filename = 'data.json';
    $data = file_get_contents($filename); //data read from json file
    $users = json_decode($data, true);  //decode a data
}
else
{
    $message = "<h3 class='text-danger'>JSON file Not found</h3>";
}

// Get json keys for table title.
$name= ucfirst(array_keys($users[0])[0]);
$email= ucfirst(array_keys($users[0])[1]);

// For "purchase_history" text convert to "Purchase History"

$purchaseHistory = ucfirst(array_keys($users[0])[2]);
// Output = purchase_history
$newPurchaseHistory = explode("_",$purchaseHistory);
// Output = [purchase,history]
$purchaseCapitalizeFirstChar = ucfirst($newPurchaseHistory[0]);
// Output = Purchase
$newHistoryStartCapitalizeChar = ucfirst($newPurchaseHistory[1]);
// Output = History
$purchaseHistoryCapitalizeFirstChars = $purchaseCapitalizeFirstChar." ".$newHistoryStartCapitalizeChar;
// Output = Purchase History


