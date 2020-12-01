<?php

    $url = "https://ipaytotal.solutions/api/transaction";

    $_POST["api_key"] = "16630iRX27NSvssxLrBPXJDirxT4ZZTcBW4Ajaz08qSpDiwyceDqL2jhOTjey0zfpCHa";
    $_POST["card_no"] = 4242424242424242;
    $_POST["ccExpiryMonth"] = 01;
    $_POST["ccExpiryYear"] = 2021;
    $_POST["cvvNumber"] = 123;
    $_POST["ip_address"] = "192.168.2.16";
    $_POST["response_url"] = "/server.php";
    
    print_r($_POST);

    $data = $_POST;

    $curl = curl_init();

    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POST, 1);
    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_HTTPHEADER,[
        'Content-Type: application/json'
    ]);

    $response = curl_exec($curl);
    echo "Response Variable: ".$response;
    curl_close($curl);

    $responseData = json_decode($response);
    echo "<br>Response:";
    print_r($responseData);
    
?>