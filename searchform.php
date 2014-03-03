<form method="get" id="searchform"class="form-search span3 nav-right" action="<?php bloginfo('url'); ?>">

<label for="s"></label>
 <input class="text search-query input-medium" type="text" placeholder="Search"  value="<?php if(trim(wp_specialchars($s,1))!='') echo trim(wp_specialchars($s,1));else echo ' ';?>" name="s" id="s" />
 <button type="submit" class="add-on"><i class="icon-search"></i></button>

</form>

