<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$APPLICATION->IncludeComponent(
	"bitrix:sale.personal.order.list",
	"",
	array(
		"PATH_TO_DETAIL" => $arResult["PATH_TO_ORDER_DETAIL"],
		"PATH_TO_CANCEL" => $arResult["PATH_TO_ORDER_CANCEL"],
		"PATH_TO_CATALOG" => $arParams["PATH_TO_CATALOG"],
		"PATH_TO_COPY" => $arResult["PATH_TO_ORDER_COPY"],
		"PATH_TO_BASKET" => $arParams["PATH_TO_BASKET"],
		"PATH_TO_PAYMENT" => $arParams["PATH_TO_PAYMENT"],
		"SAVE_IN_SESSION" => $arParams["SAVE_IN_SESSION"],
		"ORDERS_PER_PAGE" => $arParams["ORDERS_PER_PAGE"],
		"SET_TITLE" =>$arParams["SET_TITLE"],
		"ID" => $arResult["VARIABLES"]["ID"],
		"NAV_TEMPLATE" => $arParams["NAV_TEMPLATE"],
		"ACTIVE_DATE_FORMAT" => $arParams["ACTIVE_DATE_FORMAT"],
		"HISTORIC_STATUSES" => $arParams["ORDER_HISTORIC_STATUSES"],
		"ALLOW_INNER" => $arParams["ALLOW_INNER"],
		"ONLY_INNER_FULL" => $arParams["ONLY_INNER_FULL"],
		"CACHE_TYPE" => $arParams["CACHE_TYPE"],
		"CACHE_TIME" => $arParams["CACHE_TIME"],
		"CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
		"DISALLOW_CANCEL" => $arParams["ORDER_DISALLOW_CANCEL"],
		"DEFAULT_SORT" => $arParams["ORDER_DEFAULT_SORT"],
		"RESTRICT_CHANGE_PAYSYSTEM" => $arParams["ORDER_RESTRICT_CHANGE_PAYSYSTEM"],
		"REFRESH_PRICES" => $arParams["ORDER_REFRESH_PRICES"],
	),
	$component
);
?>

<!-- <div class="account__history account__content-item">
	<div class="account__history-slider">
		<div class="account__history-list">
			<div class="account__history-item">
				<h3 class="account__history-item_title">
					Заказ номер <span>2654862</span>
				</h3>
				<ul class="account__history-item_list">
					<li class="account__history-item_point">
						<h4 class="account__history-item_point-title">Статус</h4>
						<p class="account__history-item_point-text">Завершен</p>
					</li>
					<li class="account__history-item_point">
						<h4 class="account__history-item_point-title">Дата оформления</h4>
						<p class="account__history-item_point-text">16.05.2022</p>
					</li>
					<li class="account__history-item_point">
						<h4 class="account__history-item_point-title">Доставка</h4>
						<p class="account__history-item_point-text">
							<span>17.05.2022</span>
							<span>19:00 - 19:30 </span>
						</p>
					</li>
					<li class="account__history-item_point">
						<h4 class="account__history-item_point-title">Оплата</h4>
						<p class="account__history-item_point-text">Банковской картой
							курьеру</p>
					</li>
				</ul>
			</div>
			<div class="account__history-item">
				<h3 class="account__history-item_title">
					Заказ номер <span>2654862</span>
				</h3>
				<ul class="account__history-item_list">
					<li class="account__history-item_point">
						<h4 class="account__history-item_point-title">Статус</h4>
						<p class="account__history-item_point-text">Завершен</p>
					</li>
					<li class="account__history-item_point">
						<h4 class="account__history-item_point-title">Дата оформления</h4>
						<p class="account__history-item_point-text">16.05.2022</p>
					</li>
					<li class="account__history-item_point">
						<h4 class="account__history-item_point-title">Доставка</h4>
						<p class="account__history-item_point-text">
							<span>17.05.2022</span>
							<span>19:00 - 19:30 </span>
						</p>
					</li>
					<li class="account__history-item_point">
						<h4 class="account__history-item_point-title">Оплата</h4>
						<p class="account__history-item_point-text">Банковской картой
							курьеру</p>
					</li>
				</ul>
			</div>
			<div class="account__history-item">
				<h3 class="account__history-item_title">
					Заказ номер <span>2654862</span>
				</h3>
				<ul class="account__history-item_list">
					<li class="account__history-item_point">
						<h4 class="account__history-item_point-title">Статус</h4>
						<p class="account__history-item_point-text">Завершен</p>
					</li>
					<li class="account__history-item_point">
						<h4 class="account__history-item_point-title">Дата оформления</h4>
						<p class="account__history-item_point-text">16.05.2022</p>
					</li>
					<li class="account__history-item_point">
						<h4 class="account__history-item_point-title">Доставка</h4>
						<p class="account__history-item_point-text">
							<span>17.05.2022</span>
							<span>19:00 - 19:30 </span>
						</p>
					</li>
					<li class="account__history-item_point">
						<h4 class="account__history-item_point-title">Оплата</h4>
						<p class="account__history-item_point-text">Банковской картой
							курьеру</p>
					</li>
				</ul>
			</div>
			<div class="account__history-item">
				<h3 class="account__history-item_title">
					Заказ номер <span>2654862</span>
				</h3>
				<ul class="account__history-item_list">
					<li class="account__history-item_point">
						<h4 class="account__history-item_point-title">Статус</h4>
						<p class="account__history-item_point-text">Завершен</p>
					</li>
					<li class="account__history-item_point">
						<h4 class="account__history-item_point-title">Дата оформления</h4>
						<p class="account__history-item_point-text">16.05.2022</p>
					</li>
					<li class="account__history-item_point">
						<h4 class="account__history-item_point-title">Доставка</h4>
						<p class="account__history-item_point-text">
							<span>17.05.2022</span>
							<span>19:00 - 19:30 </span>
						</p>
					</li>
					<li class="account__history-item_point">
						<h4 class="account__history-item_point-title">Оплата</h4>
						<p class="account__history-item_point-text">Банковской картой
							курьеру</p>
					</li>
				</ul>
			</div>
		</div>
		<div class="slider-theme__navigation">
			<div
				class="slider-theme__navigation-prev account__history-slider__btn-prev slider-theme__navigation-btn">
			</div>
			<div
				class="slider-theme__navigation-next account__history-slider__btn-next slider-theme__navigation-btn">
			</div>
		</div>
	</div>
</div> -->

