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

$schema['em_subscribers'] = array (
    'modes' => array (
        'delete' => array (
            'permissions' => 'manage_email_marketing'
        )
    ),
    'permissions' => array ('GET' => 'view_email_marketing', 'POST' => 'manage_email_marketing')
);

$schema['tools']['modes']['update_status']['param_permissions']['table']['em_subscribers'] = 'manage_email_marketing';

$schema['exim']['modes']['export']['param_permissions']['section']['subscribers'] = 'view_email_marketing';
$schema['exim']['modes']['import']['param_permissions']['section']['subscribers'] = 'manage_email_marketing';

return $schema;
