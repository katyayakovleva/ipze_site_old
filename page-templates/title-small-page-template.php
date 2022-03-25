<?php
/**
 * Template Name: Звичайний заголовок 
 *
 * @package IPZE
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

?>

<div class="wrapper" id="full-width-page-wrapper">


					<?php get_template_part( 'template-parts/content', 'page' );?>


</div>

<?php
get_footer();
