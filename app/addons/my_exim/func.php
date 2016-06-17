<?php

function fn_my_only_update($primary_object_id, $object, &$pattern, $options, &$processed_data, $processing_groups, &$skip_record)
{	
	if($options['only_update'] == 'Y'){
		$pattern['update_only'] = true;
	}
}