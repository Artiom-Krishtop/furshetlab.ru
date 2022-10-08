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
		<div class="clients__inner">
			<h2 class="clients__title section-title section-title-center"><?= $arResult['NAME']?></h2>

			<div class="clients__slider slider-theme">
				<div class="clients__slider-container slider-theme__container">

					<?foreach ($arResult['ITEMS'] as $item): ?>
						<?
						$this->AddEditAction($item['ID'], $item['EDIT_LINK'], CIBlock::GetArrayByID($item["IBLOCK_ID"], "ELEMENT_EDIT"));
						$this->AddDeleteAction($item['ID'], $item['DELETE_LINK'], CIBlock::GetArrayByID($item["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
						
						if (!empty($item['PROPERTIES']['VIEW_PICTURE']['VALUE'])):?>
							<div class="clients__slider-item slider-theme__item" id="<?=$this->GetEditAreaId($item['ID']);?>">
								<img class="clients__slider-item_img" src="<?= CFile::GetPath($item['PROPERTIES']['VIEW_PICTURE']['VALUE']) ?>" alt="<?= $item['NAME'] ?>">
							</div>
						<? endif; ?>
					<? endforeach; ?>

				</div>

				<div class="slider-theme__navigation">
					<div class="slider-theme__navigation-prev clients-slider__btn-prev slider-theme__navigation-btn"></div>
					<div class="slider-theme__navigation-next clients-slider__btn-next slider-theme__navigation-btn"></div>
				</div>
			</div>
		</div>
	</div>
<? endif; ?>
