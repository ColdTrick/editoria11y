<?php

// someone does not want the editor enabled for this field
if (!elgg_extract('editor', $vars, true)) {
	return;
}

$id = elgg_extract('id', $vars);
if (!$id) {
	return;
}

$language = elgg_get_current_language();

$ed11y_lang = elgg_view_exists("editoria11y/js/lang/{$language}.js") ? $language : 'en';

?>
<script type="module">
	import * as Ed11y from '<?= elgg_get_simplecache_url('editoria11y/js/ed11y.esm.min.js'); ?>';
	import { lang } from '<?= elgg_get_simplecache_url("editoria11y/js/lang/{$ed11y_lang}.js"); ?>';
	
	const ed11y = new Ed11y.Ed11y({
		lang: lang,
		cssUrls: ["<?= elgg_get_simplecache_url('editoria11y/css/editoria11y.min.css'); ?>"]
	});
</script>
