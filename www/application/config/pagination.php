<?php defined('SYSPATH') or die('No direct script access.');

return array(
        // Application defaults
        'default' => array(
            'current_page'      => array('source' => 'route', 'key' => 'img'), // source: "query_string" or "route"
            'total_items'       => 0,
            'items_per_page'    => 1,
            'view'              => 'pagination/forkohana',
            'auto_hide'         => TRUE,
            'first_page_in_url' => FALSE,
        ),
);