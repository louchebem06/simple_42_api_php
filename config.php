<?php
	$uid="";
	$secret="";
	$after_auth="";
	$index="";
	$logout="";

	function api_req($url_api)
	{
		$url = "https://api.intra.42.fr{$url_api}";

		$curl = curl_init($url);
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

		$headers = array(
		   "Authorization: Bearer {$_SESSION['token']}"
		);
		curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

		curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

		$resp = curl_exec($curl);
		curl_close($curl);

		$data = json_decode($resp);
		return ($data);
	}
?>