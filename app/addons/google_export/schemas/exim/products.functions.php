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

use Tygh\Registry;

fn_define('GOOGLE_EXPORT_MAX_DESCR_LENGTH', 4999);

function fn_exim_google_export_format_description($product_descr, $max_length = GOOGLE_EXPORT_MAX_DESCR_LENGTH)
{
    $return = strip_tags($product_descr);
    if (strlen($return) > $max_length) {
        $return = substr($return, 0, $max_length);
    }

    return $return;
}

/**
 * Format product price
 *
 * @param float $product_price Original product price
 * @param int $product_id Current product identifier
 * @param bool $use_discount Flag indicating if discount have to be substracted from price
 *
 * @return string
 */
function fn_exim_google_export_format_price($product_price, $product_id = 0, $use_discount = true)
{
    static $auth;

    if (empty($auth)) {
        $auth = fn_fill_auth();
    }

    $_discount = 0;

    if ($use_discount) {
        $product = fn_get_product_data($product_id, $auth, CART_LANGUAGE, false, false, false, false, false, false, false);

        fn_promotion_apply('catalog', $product, $auth);

        if (!empty($product['discount'])) {
            $_discount = $product['discount'];
        }
    }

    $price = fn_format_price($product_price - $_discount, CART_PRIMARY_CURRENCY, null, false);
    return $price . ' ' . CART_PRIMARY_CURRENCY;
}

/**
 * Filter products with zero prices
 *
 * @param array $options    Datafeed export options
 * @param array $conditions Product query conditions
 */
function fn_google_export_filter_products($options, &$conditions) {
    if (!empty($options['skip_zero_prices']) && $options['skip_zero_prices'] == 'Y') {
        $conditions[] = "product_prices.price > 0";
    }
}

/**
 * Format product weight
 *
 * @param float $weight Weight
 *
 * @return string Weight with unit
 */
function fn_exim_google_export_format_weight($weight)
{
    return $weight . ' ' . Registry::get('settings.General.weight_symbol');
}
