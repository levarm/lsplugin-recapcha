<?php
 /*--*--*--*--*--*--*--*--*--*--*--*--*--*--*--*--*--*--*--*
  *			   LiveStreet Engine Social Networking		   *
  *			   Copyright © 2008 Mzhelskiy Maxim			   *
  *   -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- --   *
  *	Plugin				: ReCapcha						   *
  *	Creation plugin		: LS: legioner					   *
  *	Official site		: www.devls.ru					   *
  *	Contact e-mail		: mod@devls.ru					   *
  *--*--*--*--*--*--*--*--*--*--*--*--*--*--*--*--*--*--*--*/

/**
 * Объект сущности топика
 *
 * @package modules.topic
 * @since 1.0
 */
class PluginRecapcha_ModuleTopic_EntityTopic extends PluginRecapcha_Inherit_ModuleTopic_EntityTopic {

	public function Init(){
		parent::Init();
		// Определяем валидацию captcha
		$this->aValidateRules[] = array('captcha', 'captcha', 'on' => array('topic','link','photoset'));
	}

}

?>
