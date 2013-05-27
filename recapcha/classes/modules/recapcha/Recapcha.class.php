<?php

class PluginRecapcha_ModuleRecapcha extends Module{		

	//**************************************************************************************************
	public function Init(){		
	}
	
	//**************************************************************************************************
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