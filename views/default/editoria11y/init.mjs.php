<?php

$translator = elgg()->translator;
$supported_languages = '[';
foreach ($translator->getAllowedLanguages() as $code) {
	if (elgg_view_exists("editoria11y/js/lang/{$code}.js")) {
		$supported_languages .= "'{$code}',";
	}
}
$supported_languages .= ']';

?>
import elgg from 'elgg';
import * as Ed11y from './js/ed11y.esm.min.js';

<?= "const supported_languages = {$supported_languages};"; ?>

const current_language = elgg.config.current_language || 'en';
let language_module = './js/lang/en.js';
if (supported_languages.includes(current_language)) {
	language_module = './js/lang/' + current_language + '.js';
}

import(language_module).then((lang) => {
	const ed11y = new Ed11y.Ed11y({
		lang: lang.lang,
		cssUrls: [elgg.get_simplecache_url('editoria11y/css/editoria11y.min.css')],
		checkRoot: '.editoria11y-editor',
		ignoreContentOutsideRoots: true
	});
});
