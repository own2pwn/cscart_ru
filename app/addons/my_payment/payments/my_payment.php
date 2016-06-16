<?php
/***************************************************************************
*                                                                          *
*   (c) 2004 Vladimir V. Kalynyak, Alexey V. Vinokurov, Ilya M. Shalnev    *
*                                                                          *
* This  is  commercial  software,  only  users  who have purchased a valid *
* license  and  accept  to the terms of the  License Agreement can install *
* and use this program.                                                    *
*                                                                          *
****************************************************************************
* PLEASE READ THE FULL TEXT  OF THE SOFTWARE  LICENSE   AGREEMENT  IN  THE *
* "copyright.txt" FILE PROVIDED WITH THIS DISTRIBUTION PACKAGE.            *
****************************************************************************/

use Tygh\Payments\Processors\Alfabank;

if (defined('PAYMENT_NOTIFICATION')) {

    fn_print_r($_REQUEST);
    
    if($mode == 'ok') {
        fn_print_r('ok');
    }

    if($mode == 'fail') {
        fn_print_r('fail');   
    }

    fn_print_die('Обработка ответа от платежной системы');

    exit;

} else {

    fn_print_die(1);

   if ($processor_data['processor_params']['mode'] == 'test') {
        $post_address = "https://demomoney.yandex.ru/eshop.xml";
    } else {
        $post_address = "https://money.yandex.ru/eshop.xml";
    }

    $post_data = array(
        'shopId' => $processor_data['processor_params']['shop_id'],
        'scid' => $processor_data['processor_params']['scid'],
        'customerNumber' => $order_info['email'],
        'orderNumber' => $orderNumber,
        'shopSuccessURL' => fn_url("payment_notification.ok?payment=yandex_money&ordernumber=$orderNumber", AREA, 'https'),
        'shopFailURL' => fn_url("payment_notification.error?payment=yandex_money&ordernumber=$orderNumber", AREA, 'https'),
        'cps_email' => $order_info['email'],
        'cps_phone' => $customer_phone,
        'paymentAvisoURL' => fn_url("payment_notification.payment_aviso?payment=yandex_money", AREA, 'https'),
        'checkURL' => fn_url("payment_notification.check_order?payment=yandex_money", AREA, 'https'),
        'paymentType' => $payment_type,
        'cms_name' => 'cscart'
    );
    fn_create_payment_form($post_address, $post_data, 'My_payment', false);

}

