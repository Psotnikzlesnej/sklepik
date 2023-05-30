
<link rel="stylesheet" href="<?= CSS_ROOT ?>/accordion.css">
<aside class="sidebar">
<p class="sidebar__heading">
                <span class="sidebar__heading-text">Gniazdka, wyłączniki</span>
                <a class="sidebar__btn sidebar__heading-btn icon" href="javascript:void(0);" onclick="toggleElementVisibility1()">
                    <i class="sidebar__btnIcon plus" id="changeIcon1"></i>
                </a>
            </p>
    <ul class="sidebar__list" id="sidebar__showHide1">
        <li class="sidebar__listItem">
        <a class="sidebar__listItemAnchor sidebar__listItemAnchor--active" href="#">
                Berker
                <i class="sidebar__btnIcon icon-minus" id="changeIcon4"></i>
</a>
            <ul class="sidebar__nestedList">
                <li class="sidebar__nestedListItem">
                    <a class="sidebar__nestedListItemAnchor" href="#">
                            test
                    </a>
                </li>
                <li class="sidebar__nestedListItem">
                    <a class="sidebar__nestedListItemAnchor" href="#">
                        test
                    </a>
                </li>
            </ul>
        </li>
        <li class="sidebar__listItem">
            <a class="sidebar__listItemAnchor" href="#">
                Berker
                <i class="sidebar__btnIcon icon-plus" id="changeIcon4"></i>
            </a>
        </li>
    </ul>
</aside>
<script src="<?= JS_ROOT ?>/accordion.js"></script>