<?php 
  //echo "Hello World\n"; 
  
  $curl = curl_init();
  curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'http://demo-backend-demo.pcap.at/?name=PM'
	));
  $result = curl_exec($curl);
  curl_close($curl);

?>
<!DOCTYPE HTML>

<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Hello World!</title>
</head>

<header>
    <h1>Hello World!</h1>
  </header>
  <main>
    <article>
      <h1>
        <?php
           echo $result;
        ?>
      </h1>
      <p>This is what the other service said.</p>
    </article>
  </main>
  <footer>
     <p>© 2016 by SirTobiSwobi</p>
  </footer>

</body>

</html>
