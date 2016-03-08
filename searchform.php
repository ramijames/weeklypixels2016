<?php
/**
 * The template for displaying search forms in _tk
 *
 * @package _tk
 */
?>

<form class="navbar-form search-form" role="search" _lpchecked="1"role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
  <div class="form-group">
    <label>
      <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', '_tk' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="<?php _ex( 'Search for:', 'label', '_tk' ); ?>">
    </label>
  </div>
  <button type="submit" class="btn btn-default btn-navform"><i class="fa fa-search"></i></button>
</form>