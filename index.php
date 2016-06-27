<?php 
  echo "Hello World\n"; 
  
  $curl = curl_init('http://php-backend-demo-party.pcap.at/')
  $result = curl_exec($curl);
  echo $result;


?>
