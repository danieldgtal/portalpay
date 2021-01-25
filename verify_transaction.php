<?php
  $ref = $_GET['reference'];
  echo $ref;
  if($ref = ""){
    header("Location:javascript://history.go(-1)");
    echo $ref;
  }

  $curl = curl_init();
  
  curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.paystack.co/transaction/verify/".$ref,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
      "Authorization: Bearer sk_test_d47608b74f0e8f66edb22624f6fc076068478c40",
      "Cache-Control: no-cache",
    ),
  ));
  
  $response = curl_exec($curl);
  $err = curl_error($curl);
  curl_close($curl);
  
  if ($err) {
    echo "cURL Error #:" . $err;
  } else {
    echo $response;
    // $result = json_decode($response);
  }

  // if($result->data->status == "status"){
  //   $status = $result->data->status;
  //   $reference = $result->data->reference;
  //   $lName = $result->data->customer->last_name;
  //   $fName = $result->data->customer->first_name;
  //   $fullName = $fname. " ". $lname;
  //   $cusEmail = $result->data->customer->email;
  //   date_default_timezone_set("Africa/Lagos");
  //   $date_time = date('m/d/Y h:i:s a', time());

    
  // }else {
  //   header("Location: 404.html");
  // }


?>
