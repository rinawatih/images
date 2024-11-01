<?php
$hary = "mobilelegends";
$zone = "9698";
$id = "370028836";
    //$curl1 = curl_init();
    function http_request($url){
    // persiapkan curl
    $curl1 = curl_init(); 

    // set url 
    curl_setopt($curl1, CURLOPT_URL, $url);
    
    // set user agent    
    curl_setopt($curl1,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');

    // return the transfer as a string 
    curl_setopt($curl1, CURLOPT_RETURNTRANSFER, 1); 

    // $output contains the output string 
    $output = curl_exec($curl1); 

    // tutup curl 
    curl_close($curl1);      

    // mengembalikan hasil curl
    return $output;
}
   echo "<pre>";
print_r(http_request("https://haryonokudadiri.com/check-game/?id=$id&zone=$zone&name=$hary"));
echo "</pre>";                          
   