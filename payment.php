<?php

session_start();

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://test.instamojo.com/api/1.1/payment-requests/');
curl_setopt($ch, CURLOPT_HEADER, FALSE);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER,
            array("X-Api-Key:test_b336708173129858344158f8dee",
                  "X-Auth-Token:test_7b24a5740d33c9c56689c9a782a"));
$payload = Array(
    'purpose' => 'BUY A CAR',
    'amount' => $_GET['amount'],
    'phone' => $_SESSION['user'][0]->ContactNo,
    'buyer_name' => $_SESSION['user'][0]->FullName,
    'redirect_url' => 'http://localhost/carrental/after_payment.php?booking_id='.$_GET['booking_id'].'&&vehicle_id='.$_GET['vehicle_id'].'',
    'send_email' => true,
    'webhook' => 'http://www.example.com/webhook/',
    'send_sms' => true,
    'email' => $_SESSION['user'][0]->EmailId,
    'allow_repeated_payments' => false
);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
$response = curl_exec($ch);
curl_close($ch); 
$response = json_decode($response);

header('location:'.$response->payment_request->longurl);


?>