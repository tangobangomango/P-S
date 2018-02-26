<?php 

if (!defined('ABSPATH')) die();

function ds_ct_enqueue_parent() {
 wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); }

function ds_ct_loadjs() {
 wp_enqueue_script( 'ds-theme-script', get_stylesheet_directory_uri() . '/ds-script.js',        array( 'jquery' )    );}

 add_action( 'wp_enqueue_scripts', 'ds_ct_enqueue_parent' );
 add_action( 'wp_enqueue_scripts', 'ds_ct_loadjs' );

 function add_editor_quicktags() {
 	if (wp_script_is('quicktags')){
 		?>
 		<script type="text/javascript">
 			QTags.addButton( 'left_pull_quote', 'left pull quote', '<blockquote class="et-pullquote left">', '</blockquote>', '', 'left pull quote', 36 );
 			QTags.addButton( 'right_pull_quote', 'right pull quote', '<blockquote class="et-pullquote right">', '</blockquote>', '', 'right pull quote', 37 );

 		</script>
 	<?php	}
 		}

add_action( 'admin_print_footer_scripts', 'add_editor_quicktags' );

include('login-editor.php');

?>