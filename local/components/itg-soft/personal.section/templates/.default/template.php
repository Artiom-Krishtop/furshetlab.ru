<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<div class="container">
    <section class="account">
        <? if (!empty($arResult['TITLE_NAME'])): ?>
            <h2 class="account__login"><?= $arResult['TITLE_NAME'] ?></h2>
        <? endif;?>
        <div class="account__tabs">
            <nav class="account__nav">
                
                <? $selectedTab = true; ?>

                <? if ($arParams['SHOW_PROFILE_TAB'] == 'Y'): ?>
                    <li class="account__nav-item<?if($selectedTab){ echo ' account__nav-item--active';} ?>" id="contentTab1"><?= GetMessage('SPS_PROFILE_TAB_NAME')?></li>
                    <? $selectedTab = false; ?>
                <? endif; ?>
                <? if ($arParams['SHOW_BONUS_TAB'] == 'Y'): ?>
                    <li class="account__nav-item<?if($selectedTab){ echo ' account__nav-item--active';} ?>" id="contentTab2"><?= GetMessage('SPS_BONUS_TAB_NAME')?></li>
                    <? $selectedTab = false; ?>
                <? endif; ?>
                <? if ($arParams['SHOW_ORDER_HISTORY_TAB'] == 'Y'): ?>
                    <li class="account__nav-item<?if($selectedTab){ echo ' account__nav-item--active';} ?>" id="contentTab3"><?= GetMessage('SPS_HISTORY_ORDER_TAB_NAME')?></li>
                    <? $selectedTab = false; ?>
                <? endif;?>
                <btn class="account__nav-item"><?= GetMessage('SPS_EXIT_BTN')?></btn>
            </nav>
            <div class="account__content">

                <? $selectedTabContent = true; ?>

                <? if ($arParams['SHOW_PROFILE_TAB'] == 'Y'){
                    require_once __DIR__ . '/profile.php';
    
                    $selectedTabContent = false;
                }?>

                <div class="account__bonuses account__content-item">
                    <h3 class="account__bonuses-title">
                        На вашем счету <span>500</span> бонусных рублей
                    </h3>

                    <div class="account__bonuses-status">
                        <h3 class="account__bonuses-status_title">Статус</h3>
                        <ul class="account__bonuses-status_list">
                            <li class="account__bonuses-status_item account__bonuses-status_item--active">
                                <div>
                                    <span class="account__bonuses-status_item-type">Бронзовый</span>
                                    <span class="account__bonuses-status_item-cashback">Кэшбэк
                                        <span>3</span>%
                                    </span>
                                </div>
                            </li>
                            <li class="account__bonuses-status_item">
                                <div>
                                    <span class="account__bonuses-status_item-type">Серебро</span>
                                    <span class="account__bonuses-status_item-cashback">Кэшбэк
                                        <span>5</span>%
                                    </span>
                                </div>
                                <p class="account__bonuses-status_item-descr">
                                    Что бы получить статус нужно заказать еще на сумму 30 000₽
                                </p>
                            </li>
                            <li class="account__bonuses-status_item">
                                <div>
                                    <span class="account__bonuses-status_item-type">Золото</span>
                                    <span class="account__bonuses-status_item-cashback">Кэшбэк
                                        <span>7</span>%
                                    </span>
                                </div>
                                <p class="account__bonuses-status_item-descr">
                                    Что бы получить статус нужно заказать еще на сумму 50 000₽
                                </p>
                            </li>
                            <li class="account__bonuses-status_item">
                                <div>
                                    <span class="account__bonuses-status_item-type">Платина</span>
                                    <span class="account__bonuses-status_item-cashback">Кэшбэк
                                        <span>10</span>%
                                    </span>
                                </div>
                                <p class="account__bonuses-status_item-descr">
                                    Что бы получить статус нужно заказать еще на сумму 70 000₽
                                </p>
                            </li>
                            <li class="account__bonuses-status_item">
                                <div>
                                    <span class="account__bonuses-status_item-type">Бриллиант</span>
                                    <span class="account__bonuses-status_item-cashback">Кэшбэк
                                        <span>12</span>%
                                    </span>
                                </div>
                                <p class="account__bonuses-status_item-descr">
                                    Что бы получить статус нужно заказать еще на сумму 100 000₽
                                </p>
                            </li>
                            <li class="account__bonuses-status_item">
                                <div>
                                    <span class="account__bonuses-status_item-type">Калифорний</span>
                                    <span class="account__bonuses-status_item-cashback">Кэшбэк
                                        <span>15</span>%
                                    </span>
                                </div>
                                <p class="account__bonuses-status_item-descr">
                                    Что бы получить статус нужно заказать еще на сумму 140 000₽
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>

                <? if ($arParams['SHOW_ORDER_HISTORY_TAB'] == 'Y'){
                    require_once __DIR__ . '/orders.php';
    
                    $selectedTabContent = false;
                }?>

            </div>
        </div>
    </section>
</div>