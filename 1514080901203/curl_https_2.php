<?php
function curl_https($nu = '',$com = "")
{   
	$url="http://apis.baidu.com/kuaidicom/express_api/express_api?muti=0&order=desc&nu={$nu}&com={$com}";
	
	$ch = curl_init();


    $header = array(

        'apikey: ebe7141150264cb4419415b078e67f3b',

    );

    // ����apikey��header

    curl_setopt($ch, CURLOPT_HTTPHEADER  , $header);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    // ִ��HTTP����

    curl_setopt($ch , CURLOPT_URL , $url);

    $res = curl_exec($ch);
	

	$result=json_encode(json_decode($res,true),JSON_UNESCAPED_UNICODE);
	$result=urldecode($result);
	echo $result;
	return $result ;
}
$nu=$_GET['nu'];
$com=$_GET['com'];
curl_https($nu,$com);


?>



