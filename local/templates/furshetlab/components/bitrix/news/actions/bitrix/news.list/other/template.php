<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);?>

<? if (!empty($arResult['ITEMS'])): ?>
    <section class="other-stocks">
        <h1 class="page-title section-title">
            <?= GetMessage('NA_OTHER_ACTIONS'); ?>
        </h1>
        <ul class="stocks__list">
            <? foreach ($arResult['ITEMS'] as $item): ?>
                <?
                $this->AddEditAction($item['ID'], $item['EDIT_LINK'], CIBlock::GetArrayByID($item["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($item['ID'], $item['DELETE_LINK'], CIBlock::GetArrayByID($item["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                ?>
                <li class="stocks__item" id="<?=$this->GetEditAreaId($item['ID']);?>">
                    <div class="stocks__item-left">
                        <div class="stocks__item-info">
                            <div class="stocks__item-discount">
                                <? if (!empty($item['PROPERTIES']['PROCENT_SALES']['VALUE'])): ?>
                                    <h2 class="stocks__item-discount_percent"><?= $item['PROPERTIES']['PROCENT_SALES']['VALUE'] ?></h2>
                                <? endif; ?>
                                <? if (!empty($item['PROPERTIES']['BONUS_SALES']['VALUE'])): ?>
                                    <div class="stocks__item-discount_text">
                                        <?= $item['PROPERTIES']['BONUS_SALES']['VALUE']?>
                                    </div>
                                <? endif; ?>
                            </div>
                            <? if (!empty($item['PROPERTIES']['CAUSE_SALES']['VALUE'])): ?>
                                <p class="stocks__item-text">
                                    <?= $item['PROPERTIES']['CAUSE_SALES']['VALUE'] ?>
                                </p>
                            <? endif; ?>
                        </div>
                        <? if (!empty($item['PREVIEW_PICTURE']) && $arParams['DISPLAY_PICTURE'] == 'Y'): ?>
                            <img class="stocks__item-img" src="<?= $item['PREVIEW_PICTURE']['SRC'] ?>" alt="<?= $item['PREVIEW_PICTURE']['ALT'] ?>">
                        <? endif; ?>
                    </div>
                    <div class="stocks__item-right">
                        <div class="stocks__item-right_conditions">
                            <? if (!empty($item['PROPERTIES']['PERIOD_SALES']['VALUE'])): ?>
                                <div class="stocks__item-right_condition">
                                    <h3 class="stocks__item-right_title"><?= GetMessage('NA_PERIOD_SALES')?></h3>
                                    <p class="stocks__item-right_text">
                                    <?= $item['PROPERTIES']['PERIOD_SALES']['VALUE'] ?>
                                    </p>
                                </div>
                            <? endif; ?>
                            <? if (!empty($item['PROPERTIES']['CONDITION_SALES']['VALUE'])): ?>
                                <div class="stocks__item-right_condition">
                                    <h3 class="stocks__item-right_title"><?= GetMessage('NA_CONDITION_SALES')?></h3>
                                    <p class="stocks__item-right_text">
                                        <?= $item['PROPERTIES']['CONDITION_SALES']['VALUE'] ?>
                                    </p>
                                </div>
                            <? endif; ?>
                        </div>
                        <? if (!empty($item['DETAIL_PAGE_URL'])): ?>
                            <a class="stocks__item-btn btn" href="<?= $item['DETAIL_PAGE_URL']?>"><?= GetMessage('NA_BTN_DETAIL') ?></a>
                        <? endif; ?>
                    </div>
                </li>
            <? endforeach; ?>
        </ul>
    </section>
<? endif; ?>
