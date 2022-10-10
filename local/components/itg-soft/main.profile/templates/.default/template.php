<?
/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 */
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();?>

<form action="<?= $arResult['FORM_TARGET']?>" method="POST" enctype="multipart/form-data">
	<?= bitrix_sessid_post() ?>
	<div class="account__data-item">
		<h4 class="account__data-title"><?= GetMessage('USER_GROUP')?></h4>
		
		<? 
		$group = GetMessage('UNDEFINED_GROUP');

		if (in_array(INDIVIDUAL_GROUP, $arResult['USER_GROUPS'])){
			$group = GetMessage('INDIVIDUAL_GROUP');
		}elseif(in_array(JURIDIC_GROUP, $arResult['USER_GROUPS'])){
			$group = GetMessage('JURIDIC_GROUP');
		}?>
		
		<p class="account__data-text">
			<?= $group?>
		</p>
	</div>
	
	<? if (in_array('PERSONAL_GENDER', $arParams['USER_FIELDS'])):?>
		<div class="account__data-item">
			<h4 class="account__data-title"><?= GetMessage('PERSONAL_GENDER')?></h4>
			<div class="account__data-radio">
				<div class="account__data-radio_item<?= $arResult['arUser']['PERSONAL_GENDER'] == 'M' ? ' account__data-radio_item--checked' : '' ?>">
					<input class="account__data-radio_btn" 
						type="radio" 
						id="man" 
						name="PERSONAL_GENDER"
						value="M"
						<?= $arResult['arUser']['PERSONAL_GENDER'] == 'M' ? 'checked' : '' ?>>
					<label class="account__data-radio_name" for="man"><?= GetMessage('USER_MALE')?></label>
				</div>
				<div class="account__data-radio_item<?= $arResult['arUser']['PERSONAL_GENDER'] == 'F' ? ' account__data-radio_item--checked' : '' ?>">
					<input class="account__data-radio_btn" 
						type="radio" 
						id="woman" 
						name="PERSONAL_GENDER"
						value="F" 
						<?= $arResult['arUser']['PERSONAL_GENDER'] == 'F' ? 'checked' : '' ?>>
					<label class="account__data-radio_name" for="woman"><?= GetMessage('USER_FEMALE')?></label>
				</div>
			</div>
		</div>
		<? unset($arResult['arUser']['PERSONAL_GENDER'])?>
	<? endif;?>

	<? foreach ($arResult['arUser'] as $key => $value) {
		if(in_array($key, $arParams['USER_FIELDS'])): ?>
			<div class="account__data-item account__data-item--edit<?= $key == 'PERSONAL_BIRTHDAY' ? ' account__data-item--edit-birth' : '' ?>">
				<h4 class="account__data-title"><?= GetMessage($key)?></h4>
				<input class="account__data-input" name="<?= $key?>" type="<?= $key == 'PERSONAL_BIRTHDAY' ? 'date' : 'text' ?>" value="<?= $value ?>">
			</div>
		<? endif;
	}?>

	<div class="account__data-item account__data-item--edit">
		<h4 class="account__data-title"><?= GetMessage('ADRESS')?></h4>
		<input class="account__data-input" name="ADRESS" type="text" placeholder="<?= GetMessage('PLACEHOLDER_STREET')?>" value="">
	</div>
	
	<input type="submit" name="save" class="account__data-btn btn" value="<?= GetMessage('SAVE')?>">
</form>

