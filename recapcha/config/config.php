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
 * Конфиг
 */
$config=array();

$config['validate']['scenario'] = array('topic','link','question','photoset'); 	// в каких типах топика использовать capcha

// После изменения этих опций рекомендуется сбросить кеш сайта или переактивировать плагин
$config['ShowForAdministrators']		= false;   	// показывать ли капчу администраторам
$config['UserRatingToDisableCapcha']	= 5;   		// рейтинг пользователя, после которого не нужно вводить капчу

return $config;
?>