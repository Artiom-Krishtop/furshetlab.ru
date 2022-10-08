<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Акции");

$APPLICATION->IncludeComponent(
    "bitrix:news",
    "actions",
    Array(
    "DISPLAY_DATE" => "Y",
    "DISPLAY_PICTURE" => "Y",
    "DISPLAY_PREVIEW_TEXT" => "Y",
    "SEF_MODE" => "Y",
    "AJAX_MODE" => "N",
    "IBLOCK_TYPE" => "content",
    "IBLOCK_ID" => "4",
    "NEWS_COUNT" => "20",
    "USE_SEARCH" => "N",
    "USE_RSS" => "N",
    "USE_RATING" => "N",
    "USE_CATEGORIES" => "N",
    "USE_REVIEW" => "N",
    "USE_FILTER" => "Y",
    "SORT_BY1" => "ACTIVE_FROM",
    "SORT_ORDER1" => "DESC",
    "SORT_BY2" => "SORT",
    "SORT_ORDER2" => "ASC",
    "CHECK_DATES" => "Y",
    "PREVIEW_TRUNCATE_LEN" => "",
    "LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
    "LIST_FIELD_CODE" => Array(),
    "LIST_PROPERTY_CODE" => Array(
        0 => 'PROPERTY_PROCENT_SALES',
        1 => 'PROPERTY_BONUS_SALES',
        2 => 'PROPERTY_CAUSE_SALES',
        3 => 'PROPERTY_PERIOD_SALES',
        4 => 'PROPERTY_CONDITION_SALES',
    ),
    "HIDE_LINK_WHEN_NO_DETAIL" => "Y",
    "DISPLAY_NAME" => "Y",
    "META_KEYWORDS" => "-",
    "META_DESCRIPTION" => "-",
    "BROWSER_TITLE" => "-",
    "DETAIL_SET_CANONICAL_URL" => "N",
    "DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
    "DETAIL_FIELD_CODE" => Array(),
    "DETAIL_PROPERTY_CODE" => Array(),
    "DETAIL_DISPLAY_TOP_PAGER" => "N",
    "DETAIL_DISPLAY_BOTTOM_PAGER" => "N",
    "DETAIL_PAGER_TITLE" => "Акции",
    "DETAIL_PAGER_TEMPLATE" => "",
    "DETAIL_PAGER_SHOW_ALL" => "Y",
    "STRICT_SECTION_CHECK" => "Y",
    "SET_TITLE" => "N",
    "ADD_SECTIONS_CHAIN" => "Y",
    "ADD_ELEMENT_CHAIN" => "Y",
    "SET_LAST_MODIFIED" => "N",
    "PAGER_BASE_LINK_ENABLE" => "N",
    "SET_STATUS_404" => "Y",
    "SHOW_404" => "Y",
    "MESSAGE_404" => "",
    "PAGER_BASE_LINK" => "",
    "PAGER_PARAMS_NAME" => "arrPager",
    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
    "USE_PERMISSIONS" => "N",
    "GROUP_PERMISSIONS" => Array(),
    "CACHE_TYPE" => "A",
    "CACHE_TIME" => "3600",
    "CACHE_FILTER" => "Y",
    "CACHE_GROUPS" => "N",
    "DISPLAY_TOP_PAGER" => "N",
    "DISPLAY_BOTTOM_PAGER" => "Y",
    "PAGER_TITLE" => "Новости",
    "PAGER_SHOW_ALWAYS" => "N",
    "PAGER_TEMPLATE" => "",
    "PAGER_DESC_NUMBERING" => "N",
    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
    "PAGER_SHOW_ALL" => "Y",
    "FILTER_NAME" => "arrActionsFilter",
    "FILTER_FIELD_CODE" => Array(),
    "FILTER_PROPERTY_CODE" => Array(),
    "NUM_NEWS" => "20",
    "NUM_DAYS" => "30",
    "YANDEX" => "Y",
    "MAX_VOTE" => "5",
    "VOTE_NAMES" => Array("0", "1", "2", "3", "4"),
    "CATEGORY_IBLOCK" => Array(),
    "CATEGORY_CODE" => "CATEGORY",
    "CATEGORY_ITEMS_COUNT" => "5",
    "MESSAGES_PER_PAGE" => "10",
    "USE_CAPTCHA" => "N",
    "REVIEW_AJAX_POST" => "N",
    "PATH_TO_SMILE" => "",
    "FORUM_ID" => "",
    "URL_TEMPLATES_READ" => "",
    "SHOW_LINK_TO_FORUM" => "N",
    "POST_FIRST_MESSAGE" => "N",
    "SEF_FOLDER" => "/actions/",
    "SEF_URL_TEMPLATES" => Array(
        "news" => "",
        "section" => "#SECTION_CODE#/",
        "detail" => "#ELEMENT_CODE#/",
    ),
    "USE_SHARE" => "N",
    )
);

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>