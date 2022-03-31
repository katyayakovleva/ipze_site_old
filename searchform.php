
<?php
/**
 * Пошукова форма
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package IPZE
 */

?>
<form role="search" method="get" id="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
  <input type="text" placeholder="Пошук..." id="search-input" name="s" value="<?php echo esc_attr( get_search_query() ); ?>">
  <button type="submit"></button>
</form>
 