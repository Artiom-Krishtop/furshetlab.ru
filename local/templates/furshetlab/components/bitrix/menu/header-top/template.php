<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<nav class="header__top-nav">
    <? if (!empty($arResult)):?>
        <ul class="header__top-list">
            <? foreach ($arResult as $item): ?>
                <? if ($item['DEPTH_LEVEL'] > 1) { continue; } ?>

                <li class="header__top-item item-hover">
                    <a class="header__top-link" href="<?= $item['LINK'] ?>"><?= $item['TEXT'] ?></a>
                </li> 
            <? endforeach; ?>
        </ul>
    <? endif; ?>
</nav>