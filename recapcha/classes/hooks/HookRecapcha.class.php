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
		if (Config::Get('plugin.recapcha.use.topic')) {
			$this->AddHook('template_form_add_topic_topic_end','FormAddTopicEnd');
		}
        $this->AddHook('template_footer_end', 'displayCopyright',__CLASS__);
	}

	public function FormAddTopicEnd() {
		$bShouldBeCapchaDisplayed = $this->PluginRecapcha_Recapcha_ShouldBeCapchaDisplayed();
		
		if($bShouldBeCapchaDisplayed)
			return $this->Viewer_Fetch(Plugin::GetTemplatePath(__CLASS__).'inject.form_add_topic_topic_end.tpl');	
	}

	public function displayCopyright(){
		return '<a href="http://www.alasko.ru/"></a>';
	}

}
?>