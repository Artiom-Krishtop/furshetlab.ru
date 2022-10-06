<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/**
 * @global CMain $APPLICATION
 */

global $APPLICATION;

//delayed function must return a string
if(empty($arResult)){
	return "";
}

$strReturn = '';
$strReturn .= '<nav class="breadcrumbs">
					<ul class="breadcrumbs__list">
						<li class="breadcrumbs__item">
							<a class="breadcrumbs__link" href="/">Главная</a>
						</li>';

$lastItemKey = array_key_last($arResult);

foreach ($arResult as $key => $item) {
	$strReturn .= '<li class="breadcrumbs__item">';
	
	if($key != $lastItemKey){
		$strReturn .= '<a class="breadcrumbs__link breadcrumbs__link" href="' . $item['LINK'] . '">' . $item['TITLE'] . '</a>';
	}else {
		$strReturn .= '<span class="breadcrumbs__link breadcrumbs__link--active">' . $item['TITLE'] . '</span>';
	}

	$strReturn .= '</li>';
}

$strReturn .= '</ul></nav>';

return $strReturn;

