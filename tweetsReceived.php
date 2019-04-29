<?php
@$userInp = $_POST['_userInput'];

if(!isset($_POST['_submit'])) {
    echo '<center>You did not submit any keyword.<br/>Please click <a href="index.php">here</a> to submit a keyword.';
    exit;
}

if(@$userInp == '' || @$userInp != 'nasa') {
    echo "<script> a= confirm('Error code 32 will be displayed because of static nonce problems'); if(a == true) {
    
    } else { document.write('<center>Please click <a href=index.php>here</a> to submit a keyword.</center>'); window.stop(); }</script>";
    //@$userInp = 'nasa';
}
$curl = curl_init();
	

curl_setopt_array(
		$curl, 
		array(
  
			CURLOPT_URL => "https://api.twitter.com/1.1/search/tweets.json?q=".$userInp."&result_type=popular",
  			CURLOPT_RETURNTRANSFER => true,
 
			CURLOPT_ENCODING => "",
  
			CURLOPT_MAXREDIRS => 10,
  
			CURLOPT_TIMEOUT => 30,
  
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
 
			CURLOPT_CUSTOMREQUEST => "GET",
  
			CURLOPT_POSTFIELDS => "",
  
			CURLOPT_HTTPHEADER => array(
    
				"Authorization: OAuth oauth_consumer_key=\"H0rOip9Gc5lWfBkwsbAHikHfS\",
				oauth_token=\"3424025068-CrqtCfBZW2nO7qJf906Kw63I0BLEymOxBTIWWqs\",
				oauth_signature_method=\"HMAC-SHA1\",
				oauth_timestamp=\"1556578584\",
				oauth_nonce=\"PCATESJRC1y\",
				oauth_version=\"1.0\",
				oauth_signature=\"X1DMtn7iYfvTrf2IQLJl8KBwmOQ%3D\"",

				"cache-control: no-cache"
  
				),
			
));

	

$response = curl_exec($curl);

	$err = curl_error($curl);


	curl_close($curl);


	if ($err) {
  
		echo "cURL Error #:" . $err;
	
} 
	else {
  
		echo $response;
	
}

?>