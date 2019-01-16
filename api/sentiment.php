<?php
	function sentiment($text)
	{
		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, "https://community-sentiment.p.mashape.com/text/");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, "txt=$text");
		curl_setopt($ch, CURLOPT_POST, 1);

		$headers = array();
		$headers[] = "X-Mashape-Key: 5KFjGRTAmEmshKp49XtJtvcxG7dFp1uQsJBjsnbgex8JewZDIa";
		$headers[] = "Content-Type: application/x-www-form-urlencoded";
		$headers[] = "Accept: application/json";
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

		$result = curl_exec($ch);
		if (curl_errno($ch)) {
		    echo 'Error:' . curl_error($ch);
		}
		curl_close ($ch);
		return $result;
	}


?>