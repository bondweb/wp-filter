<?php
/*
Plugin Name: WP Filter
Plugin URI:  http://link to your plugin homepage
Description: This plugin replaces words with your own choice of words.
Version:     1.0
Author:      Mario Bondici
Author URI:  http://link to your website
License:     GPL2 etc
License URI: https://link to your plugin license

Copyright YEAR PLUGIN_AUTHOR_NAME (email : your email address)
(Plugin Name) is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.
 
(Plugin Name) is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
 
You should have received a copy of the GNU General Public License
along with (Plugin Name). If not, see (http://link to your plugin license).
*/

/*Use this function to replace a single word*/
function filter_wordpress_typo_fix( $text ) {
	return str_replace( 'wordpress', 'WordPress', $text );
}
add_filter( 'the_content', 'filter_wordpress_typo_fix' );

/*Or use this function to replace multiple words or phrases at once*/
function filter_content_replace( $content ) {
	$search  = array( 'wordpress', 'goat', 'Easter', '70', 'sensational' );
	$replace = array( 'WordPress', 'coffee', 'Easter holidays', 'seventy', 'extraordinary' );
	return str_replace( $search, $replace, $content );
}
add_filter( 'the_content', 'filter_content_replace' );

/*Use this function to add a note at the end of your content*/
function filter_content_footer_note( $content ) {
	$content .= '<footer class="filter-content-footer">Grazie per aver visitato questo contenuto. Magari la prossima volta mi offrirai un caffè! </footer>';
	return $content;
}
add_filter( 'the_content', 'filter_content_footer_note' );

?>