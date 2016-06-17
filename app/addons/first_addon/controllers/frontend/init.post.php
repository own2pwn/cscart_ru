<?php



if (!defined('BOOTSTRAP')) { die('Access denied');}
use Tygh\Http;
use Tygh\Registry;


$my_city = fn_get_session_data('my_city');

$cart = $_SESSION['cart'];
if (empty($my_city))
{

	$ip = '87.76.12.115';

	$url = 'http://ipgeobase.ru:7020/geo';

	$param = array(
		'ip' => $ip
	);

	$extra = array(
	'timeout' => 3
	);

	$result = Http::get($url, $param, $extra);

	$result = (array) @simplexml_load_string($result);

	$my_city = (array) $result['ip'];

	fn_set_session_data('my_city', $my_city);
}

if (!empty($my_city['city']))
{
	Registry::get('view')->assign('my_city', $my_city);
}
