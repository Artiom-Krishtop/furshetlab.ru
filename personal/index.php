<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Личный кабинет");

if($USER->IsAuthorized()){
    $APPLICATION->IncludeComponent(
        "itg-soft:personal.section",
        "",
        Array(
            "CACHE_GROUPS" => "Y",
            "CACHE_TIME" => "3600",
            "CACHE_TYPE" => "A",
            "SHOW_TITLE_NAME" => "Y",
            "USER_FIELDS" => array(
                "NAME",
                "EMAIL",
                "PERSONAL_GENDER",
                "PERSONAL_BIRTHDAY",
                "PHONE_NUMBER",
            ),
            "USER_PROPERTY" => Array(),
            "SEND_INFO" => "Y", 
            "CHECK_RIGHTS" => "Y",  
            "SHOW_PROFILE_TAB" => "Y",
            "SHOW_ORDER_HISTORY_TAB" => "Y",
            "SHOW_BONUS_TAB" => "Y",
        )
    );
}else {
    LocalRedirect('/auth/');
}

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>