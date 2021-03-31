<form class="form-inline my-2 my-lg-0" action="<?php echo home_url('/');?>">
  <div class="input-group mb-3 mt-3">
	  <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="basic-addon2" value="<?php echo get_search_query();?>" name="s">
	  <div class="input-group-append">
	    <button type ="submit" class="btn btn-secondary shadow-none" type="button"><i class="fas fa-search"></i></button>
	  </div>
	</div>
</form>