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
 * Экшен обработки УРЛа вида /topic/ - управление своими топиками
 *
 * @package actions
 * @since 1.0
 */
class PluginRecapcha_ActionTopic extends PluginRecapcha_Inherit_ActionTopic {

	/**
	 * Проверка полей формы
	 *
	 * @return bool
	 */
	protected function checkTopicFields($oTopic) {
		/**
		 * Добавляем переменную captcha
		 */
		$bShouldBeCapchaDisplayed = $this->PluginRecapcha_Recapcha_ShouldBeCapchaDisplayed();
		if (in_array('topic', Config::Get('plugin.recapcha.validate.scenario')) and $bShouldBeCapchaDisplayed) {
			$oTopic->setCaptcha(getRequestStr('captcha'));
		}
		
		return parent::checkTopicFields($oTopic);
	}

}