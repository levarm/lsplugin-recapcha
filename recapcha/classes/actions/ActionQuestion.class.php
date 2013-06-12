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
 * Экшен обработки УРЛа вида /question/ - управление своими топиками(тип: вопрос)
 *
 * @package actions
 * @since 1.0
 */
class PluginRecapcha_ActionQuestion extends PluginRecapcha_Inherit_ActionQuestion {

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
		if (in_array('question', Config::Get('plugin.recapcha.validate.scenario')) and $bShouldBeCapchaDisplayed) {
			$oTopic->setCaptcha(getRequestStr('captcha'));
		}
		
		return parent::checkTopicFields($oTopic);
	}

}