<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
    <div class="input-group">
        <label class="screen-reader-text" for="s"></label>
        <input type="text" class="form-control" id="search-field" value="" name="s" id="s" />
        <input type="hidden" value="post" name="post_type" id="post_type" />
        <div class="input-group-btn">
        <button type="submit" class="btn btn-success" id="search-btn">
          <i class="fa fa-search" aria-hidden="true"></i>
        </button>
       </div>
    </div>
</form>
