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
	'events' => [
		'view_vars' => [
			'elements/forms/field' => [
				'\ColdTrick\Editoria11y\Views::detectEditor' => [],
			],
		],
	],
	'views' => [
		'default' => [
			'editoria11y/css/' => __DIR__ . '/vendors/itmaybejj/editoria11y/dist/css/',
			'editoria11y/js/' => __DIR__ . '/vendors/itmaybejj/editoria11y/dist/js/',
		],
	],
	'view_options' => [
		'editoria11y/init.mjs' => [
			'simplecache' => true,
		],
	],
];
