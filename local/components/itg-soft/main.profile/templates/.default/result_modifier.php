<?php

use Bitrix\Main\Type\Date;

if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

if(!empty($arResult['arUser']['PERSONAL_BIRTHDAY'])){
    $obDate = new Date($arResult['arUser']['PERSONAL_BIRTHDAY'], 'd.m.Y');
    $arResult['arUser']['PERSONAL_BIRTHDAY'] = $obDate->format($arParams['FORMAT_DATE']);
}