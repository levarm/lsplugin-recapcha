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
 * Запрещаем напрямую через браузер обращение к этому файлу.
 */
if (!class_exists('Plugin')) {
	die('Hacking attempt!');
}

class PluginRecapcha extends Plugin {

	/**
	 * Объявление переопределений (модули, мапперы и сущности)
	 */
	protected $aInherits=array(
		'action' => array(
			'ActionTopic' => '_ActionTopic',
			'ActionLink' => '_ActionLink',
			'ActionQuestion' => '_ActionQuestion',
			'ActionPhotoset' => '_ActionPhotoset'
		),
		'entity'  =>array(
			'ModuleTopic_EntityTopic' => '_ModuleTopic_EntityTopic'
		),
	);

	/**
	 * Активация плагина
	 */
    public function Activate() {
        return true;
    }

	/**
	 * Деактивация плагина
	 */
    public function Deactivate(){       
    	return true;
    }

	/**
	 * Инициализация плагина
	 */
    public function Init() {
    }

}
?>