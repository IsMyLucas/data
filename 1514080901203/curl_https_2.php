<?php
function curl_https($url = '')
{
	$ch = curl_init();

    //������url = 'http://apis.baidu.com/kuaidicom/express_api/express_api?com=yuantong&nu=806820160474&muti=0&order=desc';

    $header = array(

        'apikey: bfbb340a9618592ba1f0df778aa12d38',

    );

    // ���apikey��header

    curl_setopt($ch, CURLOPT_HTTPHEADER  , $header);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    // ִ��HTTP����

    curl_setopt($ch , CURLOPT_URL , $url);

    $res = curl_exec($ch);

    //������var_dump(json_decode($res));
	return json_decode($res) ;
}

?>



