<?php
/**
 * Template Name: Загаоловк з зображенням 
 *
 * @package IPZE
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

?>

<div id="titlelargepage">
<h1>Загаоловк з зображенням </h1>

    <?php get_template_part( 'template-parts/content', 'title-large' );?>
    <?php get_template_part( 'template-parts/content', 'page' );?>

</div>

<?php
get_footer();
