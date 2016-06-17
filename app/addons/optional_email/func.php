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

function fn_generate_uniq_email()
{
	$id = fn_get_id_for_email();

	$addon_info = Registry::get('addons.optional_email');

	$email = $addon_info['email_prefix'] . $id . $addon_info['email_suffix'];

	return $email;
}

function fn_get_id_for_email()
{
	if (isset($_SESSION['settings']['cu_id']['value'])){
		$id = $_SESSION['settings']['cu_id']['value'];
	} else {
		$id = 0;
	}

	return $id;
}


