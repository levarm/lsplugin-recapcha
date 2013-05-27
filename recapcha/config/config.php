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

$config['use']['topic'] = true; 	// Использование capcha в топиках [ true / false ]

// После изменения этих опций рекомендуется сбросить кеш сайта или переактивировать плагин
$config['ShowForAdministrators']		= false;   	//Показывать ли капчу администраторам
$config['UserRatingToDisableCapcha']	= 5;   		//Рейтинг пользователя, после которого не нужно вводить капчу

return $config;
?>