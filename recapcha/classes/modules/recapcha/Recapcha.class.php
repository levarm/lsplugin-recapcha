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
 * Модуль для работы с плагином 'ReCapcha'
 *
 * @package modules.recapcha
 * @since 1.0
 */
class PluginRecapcha_ModuleRecapcha extends Module{

	/**
	 * Инициализация
	 *
	 */
	public function Init(){		
	}
	
	/**
	 * Проверяет возможность отключения капчи для администраторов и пользователей с высоким рейтингом
	 *
	 * @return bool
	 */
	public function ShouldBeCapchaDisplayed(){
	
		$oUserCurrent = $this->User_GetUserCurrent();

		if($oUserCurrent 
			and $oUserCurrent->isAdministrator() 
			and !Config::Get('plugin.recapcha.ShowForAdministrators'))	return false;
			
		if($oUserCurrent 
			and $oUserCurrent->getRating() > Config::Get('plugin.recapcha.UserRatingToDisableCapcha')) return false;
			
		return true;
		
	}
	

	
}
?>