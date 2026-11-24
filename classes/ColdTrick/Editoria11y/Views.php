<?php

namespace ColdTrick\Editoria11y;

/**
 * Change some view vars
 */
class Views {
	
	/**
	 * Detect a longtext editor for which to init Editoria11y
	 *
	 * @param \Elgg\Event $event 'view_vars', 'elements/forms/field'
	 *
	 * @return array|null
	 */
	public static function detectEditor(\Elgg\Event $event): ?array {
		if (elgg_is_xhr()) {
			return null;
		}
		
		$vars = $event->getValue();
		if (elgg_extract('input_type', $vars) !== 'longtext' || !elgg_extract('editor', $vars, true)) {
			return null;
		}
		
		$editor_type = elgg_extract('editor_type', $vars, 'default');
		if (elgg_extract('editoria11y', $vars, $editor_type === 'default') === false) {
			return null;
		}
		
		elgg_import_esm('editoria11y/init');
		$vars['class'] = elgg_extract_class($vars, ['editoria11y-editor']);
		
		return $vars;
	}
}
