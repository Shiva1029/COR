<?php
namespace myProxy;

class HTTP_Proxy {

	public function getURL($url) {
		preg_match("/^https?\:\/\/([a-z\.]+)\//i", $url, $matches);    // Case In-sensitive
		$domain = $matches[1];
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_HTTPHEADER, array(
		"Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7",
		"Content-Type: text/html", 
		"Referer: " . $domain, 
		"Origin: " . $domain,
		"Authorization: Basic NTAyNDAwNDc4OkVEU0Z1bmNAMjJwd2Q="
	    ));
		$html = curl_exec($curl);
		curl_close ($curl);
		return $html;
    }

}

?>
