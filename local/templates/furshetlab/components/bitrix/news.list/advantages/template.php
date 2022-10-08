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
$this->setFrameMode(true);
?>

<? if (!empty($arResult['ITEMS'])):?>
	<div class="container">
        <div class="advantages__inner">
            <h2 class="advantages__title section-title section-title-center"><?= $arResult['NAME']?></h2>
            <div class="advantages__group">
				<?foreach ($arResult['ITEMS'] as $item): ?>
					<?
					$this->AddEditAction($item['ID'], $item['EDIT_LINK'], CIBlock::GetArrayByID($item["IBLOCK_ID"], "ELEMENT_EDIT"));
					$this->AddDeleteAction($item['ID'], $item['DELETE_LINK'], CIBlock::GetArrayByID($item["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
					?>
					<div class="advantages__group-item" id="<?=$this->GetEditAreaId($item['ID']);?>">
						<? if (!empty($item['PROPERTIES']['VIEW_PICTURE']['VALUE'])):?>
							<img class="advantages__group-img" src="<?= CFile::GetPath($item['PROPERTIES']['VIEW_PICTURE']['VALUE']) ?>" alt="<?= $item['NAME'] ?>">
						<? endif ;?>
						<h4 class="advantages__group-title">
							<?= $item['NAME']?>
						</h4>
						<? if (!empty($item['PREVIEW_TEXT'])): ?>
							<p class="advantages__group-text">
								<?= $item['PREVIEW_TEXT'] ?>
							</p>
						<? endif; ?>
					</div>
				<? endforeach; ?>
            </div>
        </div>
    </div>
<? endif; ?>

