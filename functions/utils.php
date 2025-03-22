<?php
function nycp_image_w_class($filename, $classes = null) {
	return file_get_contents(get_template_directory() . '/dist/img/' . $filename);
}