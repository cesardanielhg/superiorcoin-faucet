<?php
$walletAddress = $_GET['walletAddress'];


require "../vendor/autoload.php";
use Superior\Wallet;
$wallet = new Superior\Wallet();


if(isset($_GET['walletAddress']))
{
    $userWallet = "Yes";
} else{
	$userWallet = "No";
}



$address = $wallet->getAddress();
$balance = $wallet->getBalance();

$getfaucetbal = json_decode($balance);
$realBalance = number_format($getfaucetbal->{'balance'}/100000000);
$realBalance = number_format($realBalance, 2, '.', '');

$date = new DateTime();
$date->format('Y-m-d H:i:s');


$response = array();
$response[0] = array(
    'userWallet' => $userWallet,
    'balance'=> $realBalance,
    'height'=> 'HeightHere',
    'timeRequest'=>$date
);



/*
if ( $option == 1 ) {
    $data = [ 'a', 'b', 'c' ];
    // will encode to JSON array: ["a","b","c"]
    // accessed as example in JavaScript like: result[1] (returns "b")
} else {
    $data = [ 'name' => 'God', 'age' => -1 ];
    // will encode to JSON object: {"name":"God","age":-1}  
    // accessed as example in JavaScript like: result.name or result['name'] (returns "God")
}
*/

header('Content-Type: application/json');
echo json_encode($response);
?>