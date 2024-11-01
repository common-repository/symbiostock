<?php

$currSS_L->disable_direct_access();

if (get_option('ss_pingback')) add_action('init','ssl_pingback');

function ssl_pingback() {
	if (isset($_GET['ss_ping'])) {
		$ping = get_plugin_data(dirname( __FILE__ ).'/'.plugin_basename( dirname( __FILE__ ) ).'.php');
		print 'Symbiostock Lite|'.$ping['Version'];
		exit();
	}
}

?>