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

<section class="stock">
	<div class="stock__wrapper">
		<? if (!empty($arResult['DETAIL_PICTURE']) && $arParams['DISPLAY_PICTURE'] == 'Y'): ?>
			<img class="stock__img" src="<?= $arResult['DETAIL_PICTURE']['SRC'] ?>" alt="<?= $arResult['DETAIL_PICTURE']['ALT'] ?>">
		<? endif; ?>
		<div class="stock__info">
			<? if ($arParams['DISPLAY_NAME'] == 'Y'):?>
				<h2 class="stock__info-title"><?= $arResult['NAME'] ?></h2>
			<? endif; ?>
			<? if (!empty($arResult['DETAIL_TEXT'])): ?>
				<p class="stock__info-text">
					<?= $arResult['DETAIL_TEXT'] ?>
				</p>
			<? endif;?>
			<p class="stock__info-description">
				<? $APPLICATION->IncludeFile(SITE_DIR . 'include/actions/action_notice.php', [], ['NAME' => 'Текст примечания', 'MODE' => 'html'])?>
			</p>
		</div>
	</div>
</section>
