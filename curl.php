<?php
 $ch = curl_init();

 curl_setopt($ch,CURLOPT_URL,"http://www.baidu.com");
 curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);

 $output = curl_exec($ch);
 if($output === FALSE ){
    echo "CURL Error:".curl_error($ch);
 } else {
    echo "CURL output:" . $output;
 }

 curl_close($ch);