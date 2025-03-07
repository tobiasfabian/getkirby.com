<?php

return function ($page) {
	$sections = $page->children()->listed()->filter(function ($section) {
		return file_exists($section->root() . '/snippet.php') === true;
	});

	return [
		'questions' => $page->find('answers')->children(),
		'sections'  => $sections,
	];
};
