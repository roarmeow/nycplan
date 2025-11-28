<?php
function nycp_image_w_class($filename, $classes = null) {
	return file_get_contents(get_template_directory() . '/dist/img/' . $filename);
}

function nycp_sort_by($a, $b, $value) {
	var_dump($a[$value]);
	// return strcmp($a[$value], $b[$value]);
}
