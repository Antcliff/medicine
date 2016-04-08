
<?php 
if (is_archive() && !is_front_page()) {
	get_template_part('page');
} elseif (is_single() && !is_front_page()) {
	get_template_part('single');
} else {
	get_template_part('404');
}

