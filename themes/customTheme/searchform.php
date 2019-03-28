<form class="form-inline mb-5 float-right" role= "search" method="get" action="<?php echo home_url('/blog'); ?>">
  <input type="search" class="form-control mb-2 mr-sm-2" value="<?php echo get_search_query(); ?>" placeholder="Search From Posts" name="s">
  <button type="submit" class="btn btn-primary mb-2">Search</button>
</form>