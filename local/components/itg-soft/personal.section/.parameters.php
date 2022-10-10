<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$arComponentParameters = array(
	"GROUPS" => array(
		"ORDER_HISTORY"    =>  array(
			"NAME"  =>  GetMessage("SPS_GROUP_ORDER"),
			"SORT"  =>  "520",
		),
		"MAIN_PROFILE"    =>  array(
			"NAME"  =>  GetMessage("SPS_GROUP_PROFILE"),
			"SORT"  =>  "530",
		),
		"BONUS"    =>  array(
			"NAME"  =>  GetMessage("SPS_GROUP_BONUS"),
			"SORT"  =>  "540",
		),
	),
	"PARAMETERS" => array(		
		"SHOW_PROFILE_TAB" => array(
			"NAME" => GetMessage("SPS_SHOW_PROFILE_PAGE"),
			"TYPE" => "CHECKBOX",
			"DEFAULT" => "Y",
			"PARENT" => "BASE",
			"REFRESH" => "Y"
		),
		"SHOW_BONUS_TAB" => array(
			"NAME" => GetMessage("SPS_SHOW_BONUS_PAGE"),
			"TYPE" => "CHECKBOX",
			"DEFAULT" => "Y",
			"PARENT" => "BASE",
			"REFRESH" => "Y"
		),
		"SHOW_ORDER_HISTORY_TAB" => array(
			"NAME" => GetMessage("SPS_SHOW_ORDER_PAGE"),
			"TYPE" => "CHECKBOX",
			"DEFAULT" => "Y",
			"PARENT" => "BASE",
			"REFRESH" => "Y"
		),	
		"CACHE_TIME"  =>  array("DEFAULT"=>3600),		
		"CACHE_GROUPS" => array(
			"PARENT" => "CACHE_SETTINGS",
			"NAME" => GetMessage("SPS_CACHE_GROUPS"),
			"TYPE" => "CHECKBOX",
			"DEFAULT" => "Y",
		),
	)
);

if ($arCurrentValues["SHOW_PROFILE_TAB"] !== "N")
{
	$arComponentParameters["PARAMETERS"]["USER_FIELDS"] = array(
		'NAME' => GetMessage("SPS_SHOW_USER_FIELDS"),
		'TYPE' => 'LIST',
		"VALUES" => array(
			"NAME" => GetMessage('SPS_SHOW_FIELD_NAME'),
			"LAST_NAME" => GetMessage('SPS_SHOW_FIELD_LAST_NAME'),
			"SECOND_NAME" => GetMessage('SPS_SHOW_FIELD_SECOND_NAME'),
			"EMAIL" => GetMessage('SPS_SHOW_FIELD_EMAIL'),
			"PERSONAL_GENDER" => GetMessage('SPS_SHOW_FIELD_PERSONAL_GENDER'),
			"PERSONAL_BIRTHDAY" => GetMessage('SPS_SHOW_FIELD_PERSONAL_BIRTHDAY'),
			"PHONE_NUMBER" => GetMessage('SPS_SHOW_FIELD_PHONE_NUMBER'),
		),
		"MULTIPLE" => "Y",
		"DEFAULT" => 0,
		"PARENT" => "MAIN_PROFILE"
	);

	$arComponentParameters["PARAMETERS"]["SEND_INFO"] = array(
		"PARENT" => "MAIN_PROFILE",
		"NAME" => GetMessage("SPS_PRIVATE_SEND_INFO"),
		"TYPE" => "CHECKBOX",
		"DEFAULT" => "N",
	);

	$arComponentParameters["PARAMETERS"]["CHECK_RIGHTS"] = array(
		"PARENT" => "MAIN_PROFILE",
		"NAME" => GetMessage("SPS_PRIVATE_CHECK_RIGHTS"),
		"TYPE" => "CHECKBOX",
		"DEFAULT" => "N",
	);
}

if ($arCurrentValues["SHOW_ORDER_PAGE"] !== "N")
{
	$arComponentParameters['PARAMETERS']['SAVE_IN_SESSION'] = array(
		"NAME" => GetMessage("SPS_SAVE_IN_SESSION"),
		"TYPE" => "CHECKBOX",
		"DEFAULT" => "Y",
		"PARENT" => "ORDER",
	);

	if(CModule::IncludeModule("iblock"))
	{
		$arComponentParameters["PARAMETERS"]["ACTIVE_DATE_FORMAT"] = CIBlockParameters::GetDateFormat(GetMessage("SPS_ACTIVE_DATE_FORMAT"), "ORDER");

		$arComponentParameters["PARAMETERS"]["CUSTOM_SELECT_PROPS"] = array(
			"NAME" => GetMessage("SPS_PARAM_CUSTOM_SELECT_PROPS"),
			"TYPE" => "STRING",
			"MULTIPLE" => "Y",
			"VALUES" => array(),
			"PARENT" => "ORDER",
		);
	}

	if(CModule::IncludeModule("sale"))
	{
		$dbPerson = CSalePersonType::GetList(array("SORT" => "ASC", "NAME" => "ASC"));

		$userInfo = array(
			"LOGIN" => GetMessage("SPS_USER_INFO_LOGIN"),
			"EMAIL" => GetMessage("SPS_USER_INFO_EMAIL"),
			"PERSON_TYPE_NAME" => GetMessage("SPS_USER_INFO_PERSON_TYPE_NAME"),
			0 => GetMessage("SPS_SHOW_ALL"),
		);

		$arComponentParameters['PARAMETERS']['ORDER_HIDE_USER_INFO'] = array(
			"NAME" => GetMessage("SPS_ORDER_HIDE_USER_INFO"),
			"TYPE" => "LIST",
			"VALUES" => $userInfo,
			"MULTIPLE" => "Y",
			"DEFAULT" => 0,
			"PARENT" => "ORDER"
		);

		while($arPerson = $dbPerson->GetNext())
		{

			$arPers2Prop = array("" => GetMessage("SPS_SHOW_ALL"));
			$bProp = false;
			$dbProp = CSaleOrderProps::GetList(array("SORT" => "ASC", "NAME" => "ASC"), array("PERSON_TYPE_ID" => $arPerson["ID"]));
			while($arProp = $dbProp -> GetNext())
			{

				$arPers2Prop[$arProp["ID"]] = $arProp["NAME"];
				$bProp = true;
			}

			if($bProp)
			{
				$arComponentParameters["PARAMETERS"]["PROP_".$arPerson["ID"]] =  array(
					"NAME" => GetMessage("SPS_PROPS_NOT_SHOW")." \"".$arPerson["NAME"]."\" (".$arPerson["LID"].")",
					"TYPE"=>"LIST", "MULTIPLE"=>"Y",
					"VALUES" => $arPers2Prop,
					"DEFAULT"=>"",
					"COLS"=>25,
					"ADDITIONAL_VALUES"=>"N",
					"PARENT" => "ORDER",
				);
			}
		}

		$statusList = array();

		$listStatusNames = Bitrix\Sale\OrderStatus::getAllStatusesNames(LANGUAGE_ID);
		foreach($listStatusNames as $key => $data)
		{
			$statusList[$key] = $data;
		}

		$arComponentParameters['PARAMETERS']['ORDER_HISTORIC_STATUSES'] = array(
			"NAME" => GetMessage("SPS_HISTORIC_STATUSES"),
			"TYPE" => "LIST",
			"VALUES" => $statusList,
			"MULTIPLE" => "Y",
			"DEFAULT" => "F",
			"PARENT" => "ORDER",
		);

		array_unshift($statusList, GetMessage("SPS_NOT_CHOSEN"));

		$arComponentParameters['PARAMETERS']['ORDER_RESTRICT_CHANGE_PAYSYSTEM'] = array(
			"NAME" => GetMessage("SPS_RESTRICT_CHANGE_PAYSYSTEM"),
			"TYPE" => "LIST",
			"VALUES" => $statusList,
			"MULTIPLE" => "Y",
			"DEFAULT" => 0,
			"PARENT" => "ORDER",
			"SIZE" => 5,
		);

		$orderSortList = array(
			'STATUS' => GetMessage("SPS_ORDER_LIST_SORT_STATUS"),
			'ID' => GetMessage("SPS_ORDER_LIST_SORT_ID"),
			'ACCOUNT_NUMBER'=> GetMessage("SPS_ORDER_LIST_SORT_ACCOUNT_NUMBER"),
			'DATE_INSERT'=> GetMessage("SPS_ORDER_LIST_SORT_DATE_CREATE"),
			'PRICE'=> GetMessage("SPS_ORDER_LIST_SORT_PRICE")
		);

		$arComponentParameters['PARAMETERS']['ORDER_DEFAULT_SORT'] = array(
			"NAME" => GetMessage("SPS_ORDER_LIST_DEFAULT_SORT"),
			"TYPE" => "LIST",
			"VALUES" => $orderSortList,
			"MULTIPLE" => "N",
			"DEFAULT" => "STATUS",
			"PARENT" => "ORDER",
		);

		$arComponentParameters['PARAMETERS']['ORDER_REFRESH_PRICES'] = array(
			"NAME" => GetMessage("SPS_REFRESH_PRICE_AFTER_PAYSYSTEM_CHANGE"),
			"TYPE" => "CHECKBOX",
			"DEFAULT" => "N",
			"PARENT" => "ORDER",
		);

		$arComponentParameters['PARAMETERS']['ACCOUNT_PAYMENT_SELL_USER_INPUT'] = array(
			"NAME"=>GetMessage("SPS_ACCEPT_USER_AMOUNT"),
			"TYPE"=>"CHECKBOX",
			"MULTIPLE"=>"N",
			"DEFAULT" => "Y",
			"ADDITIONAL_VALUES"=>"N",
			"PARENT" => "ACCOUNT",
		);

		$arComponentParameters['PARAMETERS']['ORDER_DISALLOW_CANCEL'] = array(
			"NAME" => GetMessage("SPS_DISALLOW_CANCEL"),
			"TYPE" => "CHECKBOX",
			"DEFAULT" => "N",
			"PARENT" => "ORDER",
		);

		if (CBXFeatures::IsFeatureEnabled('SaleAccounts'))
		{
			$arComponentParameters['PARAMETERS']['ALLOW_INNER'] = array(
				"NAME" => GetMessage("SPS_ALLOW_INNER"),
				"TYPE" => "CHECKBOX",
				"DEFAULT" => "N",
				"PARENT" => "ORDER",
			);

			$arComponentParameters['PARAMETERS']['ONLY_INNER_FULL'] = array(
				"NAME" => GetMessage("SPS_ONLY_INNER_FULL"),
				"TYPE" => "CHECKBOX",
				"DEFAULT" => "N",
				"PARENT" => "ORDER",
			);
		}

		$arComponentParameters['PARAMETERS']['NAV_TEMPLATE'] = array(
			"NAME" => GetMessage("SPS_NAV_TEMPLATE"),
			"TYPE" => "STRING",
			"DEFAULT" => "",
			"PARENT" => "ORDER",
		);

		$arComponentParameters['PARAMETERS']['ORDERS_PER_PAGE'] = array(
			"NAME" => GetMessage("SPS_ORDERS_PER_PAGE"),
			"TYPE" => "STRING",
			"MULTIPLE" => "N",
			"DEFAULT" => "20",
			"PARENT" => "ORDER",
		);
	}
}




