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
//Скрипт оплаты
//Добавил обработку ответа платежной системы
//Создал файл для расчета способа доставки
//Сделали поле данных для ввода

use Tygh\Payments\Processors\Alfabank;

if (defined('PAYMENT_NOTIFICATION')) {

    
    $order_id = $_REQUEST['order_id'];

    if($mode == 'ok') {

         $order_status = 'P';
            $pp_response = array(
                'order_status' => $order_status,
                'ID' => '0000000'
            );
    }

    if($mode == 'fail') {

        $order_status = 'F';
    }

    fn_finish_payment($order_id, $pp_response);
    fn_order_placement_routines('route', $order_id, false);

    fn_print_die('Обработка ответа от платежной системы');

    exit;

} else {


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

