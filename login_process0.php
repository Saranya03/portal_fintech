<?php

if(empty($_SESSION)){
   session_start();
}

$userName  = $_POST['userName'];
$password = $_POST['password'];
$rememberMe = $_POST['rememberMe'];
$data = array('username' => $userName, 'password' => $password);


$body =   "{username:\"". $userName."\", password:\"". $password."\"}";
#echo $body;


$url = 'http://portal.vp-fintech.com:8080/fintech/login';

   // use key 'http' even if you send the request to https://...


   $options = array(
       'http' => array(
           'method'  => 'POST',
           'content' => json_encode( $data ),
           'header'=>  "Content-Type: application/json\r\n" .
                       "Accept: application/json\r\n"
         )
   );

   //echo json_encode( $data );




   $context = stream_context_create($options);
   $result  = file_get_contents($url, false, $context);

   $response = json_decode($result, true);


   $token = '';


   foreach($response as $key => $value)
   {
//     echo $key." is ". $value;

     if($key == "token"){
       $token = $value;
       break;
     }
   }




   if($token!=""){
     echo "success";
     $_SESSION['username']= $userName;

     

   }
   else {
     echo "failed";
   }
// echo file_get_contents("http://google.com");



?>
