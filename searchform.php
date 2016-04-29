<div class="row">
  <div class="col-xs-8 col-sm-6 col-md-6 col-lg-6 col-centered" style="margin-bottom: 1.5em;">
    <form role="search" method="get" class="searchform group" action="<?php echo home_url( '/' ); ?>">
      <div class="input-group">
       <input type="search" class="search-field form-control"
       placeholder="<?php echo esc_attr_x( 'Search', 'placeholder' ) ?>"
       value="<?php echo get_search_query() ?>" name="s"
       title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
        <span class="input-group-btn">
          <button class="btn btn-default" type="submit">Go!</button>
        </span>
      </div>
    </form>
  </div>
</div>
