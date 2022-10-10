<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use \Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);

class ITGPersonalSection extends CBitrixComponent
{
	public function onPrepareComponentParams($arParams)
	{
		$arParams['SHOW_TITLE_NAME'] = !empty($arParams['SHOW_TITLE_NAME']) ? $arParams['SHOW_TITLE_NAME'] : 'Y';

		return $arParams;
	}

	public function executeComponent()
	{
		global $USER;

		if($USER->IsAuthorized()){
			if($this->arParams['SHOW_TITLE_NAME'] == 'Y'){
				$this->arResult['TITLE_NAME'] = $USER->GetFirstName();
			}

			$this->includeComponentTemplate();
		}else {
			LocalRedirect('/auth/');
		}
	}
}