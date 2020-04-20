<?php
//$globalOptions = array(
//
//	/* (string) The title displayed on the options page. Required. */
//	'page_title' => 'Website Global Settings',
//
//	/* (string) The title displayed in the wp-admin sidebar. Defaults to page_title */
//	'menu_title' => 'Website Global Settings',
//
//	/* (int|string) The position in the menu order this menu should appear.
//	WARNING: if two menu items use the same position attribute, one of the items may be overwritten so that only one item displays!
//	Risk of conflict can be reduced by using decimal instead of integer values, e.g. '63.3' instead of 63 (must use quotes).
//	Defaults to bottom of utility menu items */
//	'position' => false,
//
//	/* (string) The icon class for this menu. Defaults to default WordPress gear.
//	Read more about dashicons here: https://developer.wordpress.org/resource/dashicons/ */
//	'icon_url' => 'dashicons-admin-site',
//
//	/* (string) The update button text. Added in v5.3.7. */
//	'update_button'		=> __('Update', 'acf'),
//
//	/* (string) The message shown above the form on submit. Added in v5.6.0. */
//	'updated_message'	=> __("Options Updated", 'acf'),
//
//);
//$charitiesSupported = array(
//
//	/* (string) The title displayed on the options page. Required. */
//	'page_title' => 'Supported Charities',
//
//	/* (string) The title displayed in the wp-admin sidebar. Defaults to page_title */
//	'menu_title' => 'Supported Charities',
//
//	/* (int|string) The position in the menu order this menu should appear.
//	WARNING: if two menu items use the same position attribute, one of the items may be overwritten so that only one item displays!
//	Risk of conflict can be reduced by using decimal instead of integer values, e.g. '63.3' instead of 63 (must use quotes).
//	Defaults to bottom of utility menu items */
//	'position' => false,
//
//	/* (string) The icon class for this menu. Defaults to default WordPress gear.
//	Read more about dashicons here: https://developer.wordpress.org/resource/dashicons/ */
//	'icon_url' => 'dashicons-admin-page',
//
//	/* (string) The update button text. Added in v5.3.7. */
//	'update_button'		=> __('Update', 'acf'),
//
//	/* (string) The message shown above the form on submit. Added in v5.6.0. */
//	'updated_message'	=> __("Options Updated", 'acf'),
//
//);
//if( function_exists('acf_add_options_page') ) {
//	acf_add_options_page($globalOptions);
//	acf_add_options_page($charitiesSupported);
//}

add_filter( 'wpseo_breadcrumb_links', 'my_breadcrumb_filter_function' );
function my_breadcrumb_filter_function( $crumbs ) {
	foreach( $crumbs as $i => $crumb ) {
		if($crumb['id'] != 183) {
			$new_crumbs[] = $crumbs[$i];
		}
	}
	return $new_crumbs;
}

function preview_text($TEXT, $LIMIT, $TAGS = 0) {

	// TRIM TEXT
	$TEXT = trim($TEXT);

	// STRIP TAGS IF PREVIEW IS WITHOUT HTML
	if ($TAGS == 0) $TEXT = preg_replace('/\s\s+/', ' ', strip_tags($TEXT));

	// IF STRLEN IS SMALLER THAN LIMIT RETURN
	if (strlen($TEXT) < $LIMIT) return $TEXT;

	if ($TAGS == 0)
	{
		return substr($TEXT, 0, $LIMIT);
	}
	else
	{
		$COUNTER = 0;
		for ($i = 0; $i<= strlen($TEXT); $i++)
		{
			if ($TEXT{$i} == "<")
			{
				$STOP = 1;
			}

			if ($STOP != 1)
			{
				$COUNTER++;
			}

			if ($TEXT{$i} == ">")
			{
				$STOP = 0;
			}

			$RETURN .= $TEXT{$i};

			if ($COUNTER >= $LIMIT && $TEXT{$i} == " ")
			{
				break;
			}
		}
		return $RETURN;
	}
}