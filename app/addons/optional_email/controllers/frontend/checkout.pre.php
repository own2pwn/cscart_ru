<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	
	if (isset($_REQUEST['user_data']['email']) && empty($_REQUEST['user_data']['email'])) {

		$_REQUEST['user_data']['email'] = fn_generate_uniq_email();
	}

}
