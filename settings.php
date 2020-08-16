<?php

$server_url = "https://wallet.koinmudra.com/";  // ENTER WEBSITE URL ALONG WITH A TRAILING SLASH

$db_host = "localhost";
$db_user = "root";
$db_pass = "KoinMudra!89g9GmKRkJJVGYvz2020";
$db_name = "wallet";

$rpc_host = "127.0.0.1";
$rpc_port = "40008";
$rpc_user = "KoinMudraRpcUser";
$rpc_pass = "KoinMudraRpcPassword";

$fullname = "KoinMudra"; //Website Title (Do Not include 'wallet')
$short = "KMI"; //Coin Short (BTC)
$blockchain_tx_url = "http://explorer.koinmudra.com/tx/"; //Blockchain Url
$support = "support@koinmudra.com"; //Your support eMail
$hide_ids = array(1); //Hide account from admin dashboard
$donation_address = "KG5xaGCmpiyNCo8fyw62dH1Cywonso8bf7"; //Donation Address

$reserve = "0.001"; //This fee acts as a reserve. The users balance will display as the balance in the daemon minus the reserve. We don't reccomend setting this more than the Fee the daemon charges.
//Recaptcha
$public = "6LewWawZAAAAAOdkCDGROBBCeb_Ul8BnESBbQ9RQ";
$secret = "6LewWawZAAAAANw_ezEtNASl-YQbl-8uM7L4sEyH";

?>
