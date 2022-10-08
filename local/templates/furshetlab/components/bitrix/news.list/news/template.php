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
		<div class="news__inner">
			<h2 class="news__title section-title section-title-center"><?= $arResult['NAME']?></h2>
			<div class="news__slider slider-theme">
				<div class="news__slider-container slider-theme__container">
					<?foreach ($arResult['ITEMS'] as $item): ?>
						<?
						$this->AddEditAction($item['ID'], $item['EDIT_LINK'], CIBlock::GetArrayByID($item["IBLOCK_ID"], "ELEMENT_EDIT"));
						$this->AddDeleteAction($item['ID'], $item['DELETE_LINK'], CIBlock::GetArrayByID($item["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
						?>

						<div class="news__slider-item slider-theme__item" id="<?=$this->GetEditAreaId($item['ID']);?>">
							<? if (!empty($item['PREVIEW_PICTURE'])): ?>
								<img class="news__slider-item_img" src="<?= $item['PREVIEW_PICTURE']['SRC']?>" alt="<?= $item['PREVIEW_PICTURE']['ALT']?>">
							<? endif ;?>
							<div class="news__slider-item_info">
								<h4 class="news__slider-item_title">
									<?= $item['NAME'] ?>
								</h4>
								<? if (!empty($item['PREVIEW_TEXT']) && $arParams['DISPLAY_PREVIEW_TEXT'] == 'Y'):?>
									<p class="news__slider-item_text">
										<?= $item['PREVIEW_TEXT']?>
									</p>
								<? endif; ?>
								<div class="news__slider-item_bottom">
									<? if (!empty($item['DISPLAY_ACTIVE_FROM']) && $arParams['DISPLAY_DATE'] == 'Y'): ?>
										<h4 class="news__slider-item_date">
											<?= $item['DISPLAY_ACTIVE_FROM']?>
										</h4>
									<? endif; ?>
									<? if (!empty($item['DETAIL_PAGE_URL'])):?>
										<a class="news__slider-item_more" href="<?= $item['DETAIL_PAGE_URL']?>"><?= GetMessage('CT_BNL_READ_MORE')?></a>
									<? endif; ?>
								</div>
							</div>
						</div>
					<? endforeach; ?>
				</div>
				<div class="slider-theme__navigation">
					<div class="slider-theme__navigation-prev news-slider__btn-prev slider-theme__navigation-btn"></div>
					<div class="slider-theme__navigation-next news-slider__btn-next slider-theme__navigation-btn"></div>
				</div>
			</div>
		</div>
	</div>
<? endif; ?>

