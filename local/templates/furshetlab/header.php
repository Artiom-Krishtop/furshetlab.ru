<?php  

use Bitrix\Main\Page\Asset;
?>
<!DOCTYPE html>
<html lang="<?= LANGUAGE_ID ?>">
<head>
    <? $APPLICATION->ShowHead();?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title><? $APPLICATION->ShowTitle(); ?></title>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    
    <? Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/custom.css") ?>
    <? Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/styles.min.css") ?>
    
    <? Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/custom.js") ?>
</head>

<body>
    <? $APPLICATION->ShowPanel(); ?>
    <div class="wrapper">

        <header class="header">
            <div class="header__top">
                <div class="container">
                    <div class="header__top-inner">

                        <div class="header__top-mobile">
                            <button class="header__top-mobile_like">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/like-icon-white.svg" alt="Личный кабинет">
                            </button>

                            <button class="header__top-mobile_cart">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/cart-icon-white.svg" alt="Открыть мобильное меню">
                            </button>
                        </div>

                        <a class="header__logo" href="<?= $APPLICATION->GetCurPage() == '/' ? 'javascript:void(0)': '/' ?>">
                            <img class="header__logo-img" src="<?= SITE_TEMPLATE_PATH ?>/images/header-logo.svg" alt="Logo">
                        </a>

                        <?$APPLICATION->IncludeComponent(
                            "bitrix:menu",
                            "header-top",
                            Array(
                                "ROOT_MENU_TYPE" => "top", 
                                "MAX_LEVEL" => "1", 
                                "CHILD_MENU_TYPE" => "top", 
                                "USE_EXT" => "N",
                                "DELAY" => "N",
                                "ALLOW_MULTI_SELECT" => "N",
                                "MENU_CACHE_TYPE" => "N", 
                                "MENU_CACHE_TIME" => "3600", 
                                "MENU_CACHE_USE_GROUPS" => "N", 
                                "MENU_CACHE_GET_VARS" => "" 
                            )
                        );?>

                        <div class="header__top-mobile">
                            <button class="header__top-mobile_cabinet">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/cabinet-icon.svg" alt="Личный кабинет">
                            </button>

                            <button class="header__top-mobile_burger">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/burger.svg" alt="Открыть мобильное меню">
                            </button>
                        </div>

                        <a class="header__top-cabinet item-hover" href="account-enter_page.html">
                            Личный кабинет
                        </a>
                    </div>
                </div>
            </div>

            <div class="header__addition">
                <div class="container">
                    <div class="header__center">
                        <div class="header__center-info">
                            <p class="header__center-info_text">
                                <? $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/include/work-time-weekdays.php', [], ['NAME' => 'Режим работы (будни)', 'MODE' => 'text'])?>
                            </p>
                            <p class="header__center-info_text">
                                <? $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/include/work-time-weekend.php', [], ['NAME' => 'Режим работы (выходные)', 'MODE' => 'text'])?>
                            </p>
                        </div>
            
                        <div class="header__center-info">
                            <p class="header__center-info_text">
                                <? $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/include/adress.php', [], ['NAME' => 'Адрес', 'MODE' => 'html'])?>
                            </p>
                        </div>
            
                        <div class="header__center-info header__center-info_number">
                            <a class="number-tel item-hover" href="tel:+74995216610">+7 (499) 521-66-10</a>
                            <button class="number-order">Заказать звонок</button>
                        </div>
            
                        <form class="header__center-search"> 
                            <input type="text" name="text" placeholder="Поиск">
                        </form>
            
                        <div class="header__center-box">
                            <button class="header__center-btn header__center-btn_like">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/like-icon.svg" alt="Нравится">
                            </button>
            
                            <a class="header__center-btn header__center-btn_cart" href="cart_page.html">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/cart-icon.svg" alt="Добавить в корзину">
                            </a>
                        </div>
            
            
                    </div>
            
                    <div class="header__bottom">
                        <nav class="header__bottom-nav">
                            <ul class="header__bottom-list">
                                <li class="header__bottom-item item-hover">
                                    <a class="header__bottom-link header__bottom-link--list" href="all-dishes_page.html">
                                        Все меню
                                        <ul class="header__bottom-sublist">
                                            <li class="header__bottom-subitem">Test test</li>
                                            <li class="header__bottom-subitem">Test test test</li>
                                        </ul>
                                    </a>
                                </li>
                                <li class="header__bottom-item item-hover">
                                    <a class="header__bottom-link" href="">
                                        Скидки
                                    </a>
                                </li>
                                <li class="header__bottom-item item-hover">
                                    <a class="header__bottom-link" href="">
                                        Новинки
                                    </a>
                                </li>
                                <li class="header__bottom-item item-hover">
                                    <a class="header__bottom-link" href="stocks_page.html">
                                        Акции
                                    </a>
                                </li>
                                <li class="header__bottom-item item-hover">
                                    <a class="header__bottom-link" href="">
                                        Кейтеринг
                                    </a>
                                </li>
                                <li class="header__bottom-item item-hover">
                                    <a class="header__bottom-link" href="">
                                        Корпоративные обеды
                                    </a>
                                </li>
                                <li class="header__bottom-item item-hover">
                                    <a class="header__bottom-link" href="">
                                        Площадки
                                    </a>
                                </li>
                                <li class="header__bottom-item item-hover">
                                    <a class="header__bottom-link" href="">
                                        Для корпоративных клиентов
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

        </header>
        <!-- /.header -->

        <main class="main">

        <? if ($APPLICATION->GetCurPage() != '/') : ?>
            <div class="container">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:breadcrumb",
                    "",
                    Array(
                        "START_FROM" => "0", 
                        "PATH" => "", 
                        "SITE_ID" => SITE_ID,
                    )
                );?>
                
                <h1 class="page-title section-title"><? $APPLICATION->ShowTitle()?></h1>
            </div>
        <? endif; ?>        