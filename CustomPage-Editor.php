<?php
/**
 * Plugin Name: CustomPage editor
 * Description: this plugin let me update content of custom page.
 * Version: 1.0
 * Author: Braheem Khalifa
 * Author URI: https://bkhalifa.com/
 */


 ?>

<?php

add_action('admin_menu', 'my_admin_menu');

function my_admin_menu () {

add_menu_page('Custom Page Editor', 'CustomPage ', 'manage_options','custom_page_editor_text','custom_page_editor');

}


function custom_page_editor() {
    echo "<h2>" . __( 'Custom Page Editor ', 'menu-test' ) . "</h2>";
	include_once('CustomPage-Editor-setting.php');
}
?>


