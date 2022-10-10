<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<div class="account__data account__content-item<?if($selectedTabContent){ echo ' content-active';} ?>">
	<?$APPLICATION->IncludeComponent("itg-soft:main.profile","",Array(
			"SET_TITLE" => "N", 
			"AJAX_MODE" => "N",
			"FORMAT_DATE" => 'Y-m-d',
			"USER_FIELDS" => $arParams['USER_FIELDS'], 
			"USER_PROPERTY" => $arParams['USER_PROPERTY'], 
			"SEND_INFO" => $arParams['SEND_INFO'], 
			"CHECK_RIGHTS" => $arParams['CHECK_RIGHTS'],  
		)
	);?> 
</div>
