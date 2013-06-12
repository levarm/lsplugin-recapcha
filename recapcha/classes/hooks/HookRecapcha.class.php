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
 * Регистрация хуков
 *
 */
class PluginRecapcha_HookRecapcha extends Hook {

	public function RegisterHook() {
		foreach (Config::Get('plugin.recapcha.validate.scenario') as $sKey => $sValue) {
			$this->AddHook('template_form_add_topic_'.$sValue.'_end','FormAddTopicEnd');
		}
		if(!$this->User_GetUserCurrent()) {
			$this->AddHook('template_copyright', 'displayCopyright',__CLASS__);
		}
	}

	public function FormAddTopicEnd() {
		$bShouldBeCapchaDisplayed = $this->PluginRecapcha_Recapcha_ShouldBeCapchaDisplayed();
		
		if($bShouldBeCapchaDisplayed)
			return $this->Viewer_Fetch(Plugin::GetTemplatePath(__CLASS__).'inject.form_add_topic_topic_end.tpl');	
	}

	public function displayCopyright(){
		return 'ALASKO.ru <a href="http://www.alasko.ru/" target="_blank">бесплатные объявления</a><br/>';
	}

}
?>