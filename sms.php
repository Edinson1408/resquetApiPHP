<?php

// $ch = curl_init();
// $url="https://api-sms.masivapp.com/send-message";
$data = array(
    'to' => '51978026546',
    'text' => 'Código temporal de acceso a EVA: 6666',
    'customdata' => 'CUS_ID_0125',
    'isPremium' => false,
    'isFlash' => false,
    'isLongmessage' => false,
    'isRandomRoute' => false,
);

// // 	"to": "51978026546",
// // "text": "Código temporal de acceso a EVA: 6666 ",
// // "customdata": "CUS_ID_0125",
// // "isPremium": false,
// // "isFlash": false,
// // "isLongmessage": false,
// // "isRandomRoute": false
// $headers = array(
//     'Content-Type:application/json'
// );
// $data = http_build_query($data);

// curl_setopt($ch, CURLOPT_POSTFIELDS,json_encode($data));
// curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
// curl_setopt($ch, CURLOPT_URL, $url);
// curl_setopt($ch, CURLOPT_USERPWD, 'api.kfjq3' . ":" . 'mRuAzAIEukzl2L@pFJ0KLHKvavKR.M');
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// curl_setopt($ch, CURLOPT_POST, 1);
// curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");  

// $output = curl_exec($ch);
// if(curl_errno($ch)){
//     echo 'ocuerrio un error';
// }
// else{
//     // echo json_decode($output);
//     curl_close($ch);
// }


                                                                 
$data_string = json_encode($data);                                                                                   
 $api_key = "";   
 $password = "";                  
 $url="",                                                                                               
$ch = curl_init(); 
curl_setopt($ch, CURLOPT_URL, $url);    
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 20);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");  
curl_setopt($ch, CURLOPT_POST, true);                                                                   
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);     
curl_setopt($ch, CURLOPT_USERPWD, $api_key.':'.$password);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC); 
curl_setopt($ch, CURLOPT_HTTPHEADER, array(   
    'Accept: application/json',
    'Content-Type: application/json')                                                           
);             

if(curl_exec($ch) === false)
{
    echo 'Curl error: ' . curl_error($ch);
}                                                                                                      
$errors = curl_error($ch);                                                                                                            
$result = curl_exec($ch);
$returnCode = (int)curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);  
echo $returnCode;
var_dump($errors);
print_r(json_decode($result, true));



?>