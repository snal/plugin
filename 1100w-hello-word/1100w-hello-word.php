<?php
/*
Plugin Name: show IMT official site
Descriprion: show the content of IMT official site where the shortcode 'get_from_IMTsite' is used
Version: 1.0
*/

/*Admin Pages*/
/*function hello_admin()
{
	add_menu_page('my_test','my_test','manage_options','mytest_manage','mytest_manage');
}
*/
/*hook for admin pages*/
// add_action('admin_menu','hello_admin');

function mytest_manage(){
$content=wp_remote_retrieve_body(wp_remote_get('https://www.imt-atlantique.fr/fr'));
# $content_obj=json_decode($content);
# $vars=get_object_vars($content_obj);
#print($content);
return $content;
}

function create_shortcode()
{
	# add_shortcode('recent_post','insert_str');
	add_shortcode('get_from_IMTsite','mytest_manage');
}

add_action('init','create_shortcode');

?>
