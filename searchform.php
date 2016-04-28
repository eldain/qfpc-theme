<div class="row">
  <div class="col-sm-6 col-sm-offset-3 ">
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
