<?php
// created by : will pratama - thanks to : alfian ananda putra

//url
   // url untuk ngebot : localhost/appnana.php?action=bot {} SILAHKAN PASANG DISCRIPT ROLL
   // url untuk login : localhost/appnana.php?action=login&email=EMAIL LO&pass=Password LOe
//baca ok

date_default_timezone_set("Asia/Jakarta");
$date = date("H:i:s Y-m-d");

class infoAkun
{
	// untuk adcolony
	//public $_cookiesAd = "__cfduid=d477aa86b75e52516a1d51e4c852722511556851840; csrftoken=VWZVByARZMrX9C5G0mE8Q9vyJrtCXwqt; sessionid=88f04hjam29b3coqix314vbzkhmqhyy0";
	//public $_pl = "eyyj3AehZdm41xIKtNxaHmsC-kfhhH2zl9eMQG9s7_OSVJPI99xV1srcbHlXE_dEaW7Jp1JN8qg6DoO_bvhDEJw_PhJ2d5R8iGbZW-zb3Q6Rr3H9aG1bh7xpAFa4B80OOKWWW-pCaAr9UU1IK04IRfe4Mb6lP1dfrlEhWIEnebty6BYxUYBUf-r-DYpwlTPsHzHoXCSg5D_hMfam45TxkNTH5BWCjDk2JgS7Ez17DnYhA8tk9_GJu1FW5McQ1Vw0mLyxUAVRT9L1Z42zerb2Lw9hSkuwrKeHf8nimQlcFEZHtj8D9aijpfsQfpHAUxaKDm8WvJUZ1QRpkZ8CJ6R4eF9NGyMkUis7_k4djSIPQE9kRGbobqhMlvdTLvrKtY7fhBHy8LMKW5_wKmpy_hhDtFzbzQ-ZCdsRi_e6TbgJs9LmtNXwDwPr92At-mVcSRarEjQnZUP7IfQbRbxhOc--OG1Qg-Kue89bYtv1joYhPqN_wkQw8tap0jlCKSP0HIn6lRLMSpMrT5J0X7sF24Db5l9IztNY0cclf-ZclaWggA1LlpI-mJBjJYNxs5BAwOhiXp9Onf0axWaMuKYycJmj4rOuo2cwiq1H7UnYMrFuYpqzBZusdECFblgFsBObjZp0pyMqUIY5G-CsVRjdHdazleCQeR7c3yyj0GvC-BECPJ_D8AeTzrC1FuwomcDbfGc1L6jf9NjwEuitdVi8Fl9toceocXi65P6YK_hl67yNVUOXSaZYg50Nhv1FZg45tv4UnaAX1ideUbdwreHeQOdhe75DJ8MKSfhXu-ay4YP3-FIL4NREj1z6fRSO7LFr0Fi8Db-H9AwRvxi-HYpgUr1iirXRUYNxR-sFRU7PTCoD6AGC_9sfzse2lQtGvPMs8HK9uYZoGRDf52PYL939EFyBFcP2cumuEb21U2bkNs31JA0_D-kru1fLuoC2RzZMbfSET1og3Kd3HvdxWYk4TOCnbfr2US725tR3a-cS4cBKGJsxYN1indP1sa5KFP0qkESgle_vSDtehHramy7eeCq1eD91YxuNdHh2yo9ResFynIn3DWt6AHN7mZV3XUtetltL1feS1LMQVq3IJAxBp84hLh4iBVYLgFk3w9KA7tLzvH9rQOmn0JeaCuKAYiNHsYxot1I268kGsQBFtA8hSbeiGT3WhKVYi47gB2LSbfI1V-OWKqHp82h2QC0oZlHcQhVLEN4tfitj32_snvUW1onxVYu0tD6BzqOBxZVQD_vl87-qOFzwIeqtOP-AFqbdl-4stTFMlP7rKceEt9sFmGCiS6bjhDcCiBU371eEdol9dbJEDokpjSYJybfX8Exz9TE%3D";

	// untuk appLovin
	// khusus profesional! adegan berbahaya, jangan diedit karna gk ngaruh gays
	public $_deviceToken = "MaznYs97JTiqaqEwnZGZ5idaQUefWGOP4fFLWP8xsSvdhVF-KG-h_VWuSIH8Eee08p9scMfRw1DlCHgTw_FMRI4mOA3ulUp-kh1iXtD0AJU8wsh1LCmyOxQVBHdcNCU9abdZCP-dCdoApSnBOYlPxK-4Q_oM3xDOm2XHr_6fnQE=";
	public $_userId = "28829457z26649174";
	public $_cookies = "__cfduid=d4deb499af98a4f103e3174bfff926c2e1555119043; csrftoken=sVPILMaH1WoT0YFxnNHsnH1nNl35KNKJ; sessionid=8uevpmrtbodq2bficzr043jvfjylp7ux";
}


class adcolony extends modules
{
	private function data()
	{
		$file = "cookiesAppNana.txt";
		foreach(explode(PHP_EOL, str_replace("\r", "", trim(file_get_contents($file)))) as $a => $data)
		{
			return array("cookie" => explode("||", $data)[0], "pl" => explode("||", $data)[1], "email" => explode("||", $data)[2]);
		}
	}

	public function login($email, $pass)
	{
		if(file_exists("cookiesAppNana.txt") == true) @unlink("cookiesAppNana.txt");

		$url = "https://appnana2.mapiz.com/api/nanaer_login/";
		$postdata = "email=".$email."&password=".$pass."&source=Android.google-play&signkey=".md5(rand(00000, 99999)).md5(rand(00000, 99999))."&android_id=".rand(00000, 99999)."&version=3.5.10&gaid=3cc83187-89ae-492f-ab53-".rand(00000, 99999)."&gaid_enabled=true";
		$__cfduid = "__cfduid=".md5(rand(00000, 99999)).md5(rand(00000, 99999));

		$headers = array();
		$headers[] = "Accept: application/json; version=1.2";
		$headers[] = "User-Agent: com.appnana.android.giftcardrewards/3.5.10 ".rand(00000, 99999).md5(rand(00000, 99999));
		$headers[] = "Accept-Language: en-US";
		$headers[] = "Content-Type: application/x-www-form-urlencoded";
		$headers[] = "Host: appnana2.mapiz.com";
		$headers[] = "Connection: close";
		$headers[] = "Cookie: ".$__cfduid;
		$headers[] = "Cookie2: \$Version=1";

		$login = $this->curl($url, $postdata, false, true, $headers);
		if(strpos($login, '"errstr":"SUCCESS"') == true)
		{
			@$getCookies = $this->fetchCookies($login);
			@$csrftoken = "csrftoken=".$getCookies['csrftoken'];
			@$sessionid = "sessionid=".$getCookies['sessionid'];

			$urls = "https://appnana2.mapiz.com/api/get_nanaer_info/?email=".str_replace("@", "%40", $email);
			$post = null;

			$head = array();
			$head[] = "Accept: application/json; version=1.2";
			$head[] = "Accept-Language: en-US";
			$head[] = "Host: appnana2.mapiz.com";
			$head[] = "Cookie: ".$__cfduid."; ".$csrftoken."; ".$sessionid;
			$head[] = "Cookie2: \$Version=1";

			$getInfo = $this->curl($urls, $post, false, false, $head, 'GET');	

			@$accountId = $this->getStr($getInfo, '"id":', ',', 1, 0);
			@$deviceId = $this->getStr($getInfo, '"device_id":', '}', 1, 0);

			if(!empty($csrftoken) or !empty($sessionid) or !empty($accountId) or !empty($deviceId))
			{
				$urls = "https://ads30.adcolony.com/configure";
				$post = '{"advertiser_id":"","carrier":"","custom_id":"'.$accountId."z".$deviceId.'","screen_height":1024,"screen_width":576,"limit_tracking":false,"ln":"en","locale":"US","device_brand":"xia2322323","device_model":"aawawaw","device_type":"tablet","media_path":"/data/data/com.appnana.android.giftcardrewards/files/adc3/media/","temp_storage_path":"/data/data/com.appnana.android.giftcardrewards/files/adc3/tmp/","network_type":"wifi","os_name":"android","os_version":"5.1.1","sdk_version":"3.3.5","sdk_type":"android_native","current_orientation":0,"battery_level":1,"timezone_ietf":"Asia/Shanghai","timezone_gmt_m":480,"timezone_dst_m":0,"cell_service_country_code":"id","android_id_sha1":"","device_api":22,"memory_used_mb":23,"memory_class":192,"available_stores":["google"],"permissions":["android.permission.INTERNET","android.permission.READ_EXTERNAL_STORAGE","android.permission.WRITE_EXTERNAL_STORAGE","android.permission.READ_PHONE_STATE","android.permission.ACCESS_NETWORK_STATE","android.permission.ACCESS_WIFI_STATE","android.permission.WAKE_LOCK"],"immersion":false,"display_dpi":191,"origin_store":"google","user_id":"'.$accountId."z".$deviceId.'","app_id":"appf859456ab93d4f1d8d90e3","zones":["vz57d827b000b64b8191daac"],"ad_history":{"":[]},"ad_playing":{"":[]},"ad_queue":{},"sid":"9467c89f-d6ef-434a-8435-8d648b49523e","s_imp_count":0,"device_time":1557026236698,"controller_version":"1.0.9.33","user_metadata":{},"ad_request":true,"device_audio":true,"zone_ids":[""],"force_ad_id":"","test_mode":false,"guid":"","guid_key":""}';

				$head = array();
				$head[] = "Accept-Charset: UTF-8";
				$head[] = "Content-Type: application/json";
				$head[] = "User-Agent: Dalvik/2.1.0 (Linux; U; Android 5.1.1; aawawaw Build/LMY48Z)";
				$head[] = "Host: ads30.adcolony.com";

				$getPL = $this->curl($urls, $post, false, false, $head);
				$PL = $this->getStr($getPL, 'start":"{s0}/t/5.0/start?pl=', '"', 1, 0);
				if(!empty($PL))
				{
					$this->fwrite("cookiesAppNana.txt", $__cfduid."; ".$csrftoken."; ".$sessionid."||".$PL."||".$email);
					print "success! Silahkan lanjut ngebot";
				}else{
					print "PL ngga ada broo..<br><a href='https://web.facebook.com/yaelahhwil' target='_blank'>Contact </a>";
				}
			}else{
				print "Ada yang Tidak Beres broo!..<br><a href='https://web.facebook.com/yaelahhwil' target='_blank'>Contact </a>";
			}
		}else{
			print "<pre>".$login;
		}
	}

	protected function getInfo()
	{
		$url = "https://appnana2.mapiz.com/api/get_nanaer_info/?email=".$this->data()['email'];
		$postdata = null;
		$headers = array();
		$headers[] = "Accept: application/json; version=1.2";
		$headers[] = "User-Agent: com.appnana.android.giftcardrewards/3.5.10 (Linux; U; Android 5.1.1; en-US; Redmi 4A Build/LMY48Z; Xiaomi) 576X1024 Xiaomi Redmi 4A";
		$headers[] = "Accept-Language: en-US";
		$headers[] = "Host: appnana2.mapiz.com";
		$headers[] = "Cookie: ".$this->data()['cookie'];
		$getInfo = $this->curl($url, $postdata, false, false, $headers, 'GET');
		return $getInfo;
	}

	public function execute()
	{
		$url = "https://events3.adcolony.com/t/5.0/reward_v4vc?pl=".$this->data()['pl'];
		$postdata = '{"reward_name":"Nanas","reward_amount":65665,"sid":"'.$this->randStr("huruf_angka", "6").'-'.$this->randStr("huruf_angka", "6").'-'.$this->randStr("angka", "5").'-'.$this->randStr("angka", "4").'-'.$this->randStr("all", "8").'","s_imp_count":3,"s_time":239.70600008964539,"reward":true,"replay":false,"zone_id":"vz'.$this->randStr("huruf_angka", "13").'","event_type":"reward_v4vc","guid":"'.$this->randStr("huruf_angka", "4").'-'.$this->randStr("huruf_angka", "5").'-'.$this->randStr("angka", "5").'-'.$this->randStr("angka", "3").'-'.$this->randStr("all", "10").'","guid_key":"'.$this->randStr("huruf_angka", "8").'-'.$this->randStr("huruf_angka", "6").'-'.$this->randStr("angka", "5").'-'.$this->randStr("angka", "3").'-'.$this->randStr("all", "25").'"}';
		$headers = array();
		$headers[] = "Accept-Charset: UTF-8";
		$headers[] = "Content-Type: application/json";
		$headers[] = "User-Agent: Dalvik/2.1.0 (Linux; U; Android 5.1.1; Redmi ".rand(00, 99)." Build/".rand(0000000, 999999999).")";
		$headers[] = "Host: events3.adcolony.com";
		$generateRewards = $this->curl($url, $postdata, false, false, $headers);
		$obj = json_decode($generateRewards);
		$idGenerate = $obj->v4vc_callback;
		if(strpos($generateRewards, '"status":"success"') == true)
		{
			$urls = $idGenerate;
			$post = null;
			$heads = array();
			$heads[] = "Accept-Charset: UTF-8";
			$heads[] = "User-Agent: Dalvik/2.1.0 (Linux; U; Android 5.1.1; Redmi ".rand(00, 99)." Build/".rand(0000000, 999999999).")";
			$heads[] = "Host: securev4vcapi.adcolony.com";
			$validasiRewards = $this->curl($urls, $post, false, false, $heads, 'GET');
			if(preg_match('/vc_success/i', $validasiRewards))
			{
				print PHP_EOL."Point : ".json_decode($this->getInfo())->response->nanas." - Email : ".$this->data()['email'];
			}else{
				print PHP_EOL."Failed Verifikasi!".PHP_EOL.$validasiRewards;
			}
		}else{
			print PHP_EOL."Failed Generate Rewards!".PHP_EOL."Response : ".$generateRewards;
		}
	}
}


class applovin extends modules
{
	protected $_deviceToken;
	protected $_userId;
	protected $_cookies;
	protected $infoAkun;

	public function __construct()
	{
		$this->infoAkun = new infoAkun();
		$this->_deviceToken = $this->infoAkun->_deviceToken;
		$this->_userId = $this->infoAkun->_userId;
		$this->_cookies = $this->infoAkun->_cookies;
	}

	protected function getInfo()
	{
		$url = "https://appnana2.mapiz.com/api/get_nanaer_info/?email=wgansangad%40gmail.com";
		$postdata = null;
		$headers = array();
		$headers[] = "Accept: application/json; version=1.2";
		$headers[] = "User-Agent: com.appnana.android.giftcardrewards/3.5.10 (Linux; U; Android 5.1.1; en-US; Redmi 4A Build/LMY48Z; Xiaomi) 576X1024 Xiaomi Redmi 4A";
		$headers[] = "Accept-Language: en-US";
		$headers[] = "Host: appnana2.mapiz.com";
		$headers[] = "Cookie: ".$this->_cookies;
		$getInfo = $this->curl($url, $postdata, false, false, $headers, 'GET');
		return $getInfo;
	}

	protected function getClcCode()
	{
		$getSc = "FAIWnPXbGBb%2Bh9wYGwOMDkJBTk5FUjpSRUdVTEFSawRsg9mH0Jnx25C5ASUIFTIWoLjcGADxt%2F%2FR4c6Zg2clChU6FqC43BgA9ZqH18mp3fY1JSoVwAMWoLjcGACmjfmJlOOsz8kBJSoV3AMWoLjcGAAADUlOVEVSOlJFR1VMQVJrAWyS342bg6%2BB6zglBBUEFqC43BgAAAxJTlRFUjpWSURFT0EUAhQCSwFsoJrOou6VvvCnARUCFRIVNhaguNwYAAAA";
		$url = "https://a.applovin.com/3.0/ad?accept=custom_size,launch_app,video&v4=true&api_did=103eb192c03cc3a122&zone_id=inter_videoa_direct&country_code=ID&sim=0&carrier=Smartfren&preloading=false&idfa=2&wvvc=0&dy=1024&format=json&orientation_lock=portrait&plugin_version=MoPub-3.1.0&adns=1.19375&sdk_key=wT2o5DOKtwBs_nrNr8rVnBTkEGJV4Q_-v1m_F9J63Vz3GoQ6wFcgQ4PfKi9O89N1A80PHKWKqTN5FpCA2psTuF&gy=true&v1=true&brand_name=vivo&sc=".$getSc."&si=0&volume=73&dnt=false&dx=576&locale=en_US&revision=vivo+1606&ia=1&li=528&huc=true&adr=0&os=5.1.1&v3=true&tz_offset=8.0&network=wifi&platform=android&app_version=3.5.10&adnsd=191&build=103&installer_name=&brand=vivo&sdk_version=8.1.4&v2=true&pnr=false&vz=1e89c69ab45abdfb&hardware=intel&model=vivo+1606";
		$postdata = null;
		$headers = array();
		$headers[] = "User-Agent: Dalvik/2.1.0 (Linux; U; Android 5.1.1; vivo 1606 Build/LMY48Z)";
		$headers[] = "Host: a.applovin.com";
		$get = $this->curl($url, $postdata, false, false, $headers, 'GET');
		//$clcCode = $this->getStr($get, '"click_tracking_url":"https://prod-a.applovin.com/redirect?clcode=', '&did=', 1, 0);
		return $get;
	}

	protected function acceptedClcCode($clcCode)
	{
		$url = "https://d.applovin.com/vr?device_token=".$this->_deviceToken;
		$postdata = '{"clcode":"'.$clcCode.'","user_id":"'.$this->_userId.'","zone_id":"inter_videoa_direct"}';
		$headers = array();
		$headers[] = "";
		$accepted = $this->curl($url, $postdata, false, false, $headers);
		return $accepted;
	}

	public function execute()
	{
		$getclcCode = $this->getClcCode();
		@$clcCode = str_replace("\r", "", trim($this->getStr($getclcCode, 'redirect?clcode=', '&did=', 1, 0)));
	//	$sc = $this->getStr($this->getClcCode(""), '"sc":"', '"', 1, 0);
	//	@$clcCode = $this->getStr($getclcCode, '"clcode":"', '"', 1, 0);
	//	@$clcCode = $this->getStr($getclcCode, '"click_tracking_url":"https://prod-a.applovin.com/redirect?clcode=', '&did=', 1, 0);
	//	@$clcCode = $this->getStr($getclcCode, 'var trackingUrl = \"http://prod-a.applovin.com/redirect?clcode=', '&placement=', 1, 0);
		if(!empty($clcCode))
		{
			$acceptedClcCode = $this->acceptedClcCode($clcCode);
			if(strpos($acceptedClcCode, '"result":"accepted"') == true)
			{
				print PHP_EOL."success accepted clCode, Tambah Nanas : ";
				$url = "https://d.applovin.com/cr?device_token=".$this->_deviceToken;
				$postdata = '{"clcode":"'.$clcCode.'","fire_percent":-1,"zone_id":"inter_videoa_direct","result":"accepted","params":{"amount":"5","currency":"Nanas"},"user_id":"'.$this->_userId.'"}';
				$headers = array();
				$headers[] = "Content-Type: application/json; charset=utf-8";
				$headers[] = "User-Agent: Dalvik/2.1.0 (Linux; U; Android 5.1.1; vivo 1606 Build/LMY48Z)";
				$headers[] = "Host: d.applovin.com";
				$tambahNanas = $this->curl($url, $postdata, false, false, $headers);
				if(strpos($tambahNanas, '"result":"accepted"') == true or preg_match('/accepted/i', $tambahNanas))
				{
					$getInfo = $this->getInfo();
					$nanas = json_decode($getInfo)->response->nanas;
					print "success! Point : ".$nanas;
				}elseif(strpos($tambahNanas, '"result":"rejected"') == true){
					print "rejected";
				}else{
					print "failed tambah point!".$tambahNanas;
				}
			}else{
				print PHP_EOL."failed accepted clc Code".PHP_EOL."response : ".$acceptedClcCode;
			}
		}elseif(preg_match('/502 Bad Gateway/i', $getclcCode) or strpos($getclcCode, 'Bad Gateway')){
			print PHP_EOL."502 Bad Gateway";
		}else{
			print PHP_EOL."clcCode not found".PHP_EOL."response clc code : ".$getclcCode;
		}
	}
}

class modules 
{
	var $ch;

	public function curl($url, $params, $cookie, $header, $httpheaders = array(), $request = 'POST', $socks = null)
	{
		$this->ch = curl_init();
			
		curl_setopt($this->ch, CURLOPT_URL, $url);
		curl_setopt($this->ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($this->ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($this->ch, CURLOPT_FOLLOWLOCATION, 1);

		curl_setopt($this->ch, CURLOPT_POSTFIELDS, $params);
		curl_setopt($this->ch, CURLOPT_CUSTOMREQUEST, $request);

		if($cookie == true)
		{	
			$cookFile = tempnam('/tmp','cookie.txt');
			curl_setopt($this->ch, CURLOPT_COOKIEJAR, $cookFile);
			curl_setopt($this->ch, CURLOPT_COOKIEFILE, $cookFile);
		}

		curl_setopt($this->ch, CURLOPT_HEADER, $header);
		@curl_setopt($this->ch, CURLOPT_HTTPHEADER, $httpheaders);

		curl_setopt($this->ch, CURLOPT_HTTPPROXYTUNNEL, 1);
		curl_setopt($this->ch, CURLOPT_PROXY, $socks);
		curl_setopt($this->ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS4);

		curl_setopt($this->ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
		$response = curl_exec($this->ch);
		curl_close($this->ch);
		return $response;
	}

	public function getStr($page, $str1, $str2, $line_str2, $line)
	{
		$get = explode($str1, $page);
		$get2 = explode($str2, $get[$line_str2]);
		return $get2[$line];
	}

	public function randStr($type, $length)	
	{
		$characters = array();
		$characters['angka'] = '0123456789';
		$characters['kapital'] = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$characters['huruf'] = 'abcdefghijklmnopqrstuvwxyz';
		$characters['kapital_angka'] = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$characters['huruf_angka'] = '0123456789abcdefghijklmnopqrstuvwxyz';
		$characters['all'] = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters[$type]);
		$randomString = '';

		for ($i = 0; $i < $length; $i++) 
		{
			$randomString .= $characters[$type][rand(0, $charactersLength - 1)];
		}

		return $randomString;

	}   

	public function fwrite($namafile, $data)
	{
		$fh = fopen($namafile, "a");
		fwrite($fh, $data);
		fclose($fh);  
	}

	public function fetchCookies($source) 
	{
		preg_match_all('/^Set-Cookie:\s*([^;]*)/mi', $source, $matches);
		$cookies = array();
		foreach($matches[1] as $item) 

		{
			parse_str($item, $cookie);
			$cookies = array_merge($cookies, $cookie);
		}

		return $cookies;
	}
}	

$adcolony = new adcolony();
$applovin = new applovin();
$modules = new modules();

// url untuk ngebot : localhost/appnana.php?action=bot
// url untuk login : localhost/appnana.php?action=login&email=EMAIL LO&pass=Password LOe

$die = json_encode(array("status" => "badRequest"));
@$action = $_GET['action'];
if(!empty($action))
{
	if($action == "login")
	{
		@$email = $_GET['email'];
		@$pass = $_GET['pass'];
		if(!empty($email) or !empty($pass))
		{
			print $adcolony->login(trim($email), trim($pass));
		}else{
			print $die;
		}
	}elseif($action == "bot"){
		print $adcolony->execute();
	}else{
		print $die;
	}
}else{
	print $die;
}

?>
