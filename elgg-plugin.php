<?php

use ColdTrick\BlogTools\Controllers\ContentListing;
use ColdTrick\BlogTools\FieldsHandler;
use ColdTrick\BlogTools\Forms\PrepareFields;
use ColdTrick\BlogTools\Notifications\PublishBlogOwnerHandler;

return [
	'plugin' => [
		'version' => '0.1',
		'dependencies' => [
			'ckeditor' => [],
		],
	],
	'view_extensions' => [
		'ckeditor/init' => [
			'editoria11y/init' => [],
		],
	],
	'views' => [
		'default' => [
			'editoria11y/css/' => __DIR__ . '/vendors/itmaybejj/editoria11y/dist/css/',
			'editoria11y/js/' => __DIR__ . '/vendors/itmaybejj/editoria11y/dist/js/',
		],
	],
];
