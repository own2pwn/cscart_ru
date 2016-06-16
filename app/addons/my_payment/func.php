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

if (!defined('BOOTSTRAP')) { die('Access denied'); }

function fn_my_payment_install()
{
    fn_my_payment_uninstall();

    $_data = array(
        'processor' => 'My_payment',
        'processor_script' => 'my_payment.php',
        'processor_template' => 'views/orders/components/payments/cc_outside.tpl',
        'admin_template' => 'my_payment.tpl',
        'callback' => 'N',
        'type' => 'P',
        'addon' => 'my_payment'
    );

    db_query("INSERT INTO ?:payment_processors ?e", $_data);
}

function fn_my_payment_uninstall()
{
    db_query("DELETE FROM ?:payment_processors WHERE processor_script = ?s", "alfabank.php");
}


