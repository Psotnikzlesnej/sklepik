<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/sidebar.css">
    <script src="../js/sidebar.js"></script>
</head>
<body>

    <div class="sidebar__superglue">
    <aside class="sidebar">
            <p class="sidebar__heading">
                <span class="sidebar__heading-text">Gniazdka, wyłączniki</span>
                <a class="sidebar__btn sidebar__heading-btn icon" href="javascript:void(0);" onclick="toggleElementVisibility1()">
                    <i class="sidebar__btnIcon plus" id="changeIcon1"></i>
                </a>
            </p>
        <hr class="sidebar__hr">
        <ul class="sidebar__list" id="sidebar__showHide1">
            <li class="sidebar__listItem">
                <a class="sidebar__listItemAnchor" href="#">
                    <span class="sidebar__listItemSpan">
                        SCHNEIDER ELECTRIC
                    </span>
                </a>
                <a class="sidebar__btn icon" href="javascript:void(0);" onclick="toggleElementVisibility2()">
                    <i class="sidebar__btnIcon plus" id="changeIcon2"></i>
                </a>
            </li>
            <ul class="sidebar__nestedList" id="sidebar__showHide2">
                <li class="sidebar__nestedListItem">
                    <a class="sidebar__nestedListItemAnchor" href="#">
                        <span class="sidebar__nestedListItemSpan">
                            test
                        </span>
                    </a>
                </li>
                <li class="sidebar__nestedListItem">
                    <a class="sidebar__nestedListItemAnchor" href="#">
                        <span class="sidebar__nestedListItemSpan">
                            test
                        </span>
                    </a>
                </li>
            </ul>
            <li class="sidebar__listItem">
                <a class="sidebar__listItemAnchor" href="#">
                    <span class="sidebar__listItemSpan">
                        Kontakt simon
                    </span>
                </a>
                <a class="sidebar__btn icon" href="javascript:void(0);" onclick="toggleElementVisibility3()">
                    <i class="sidebar__btnIcon plus" id="changeIcon3"></i>
                </a>
            </li>
            <ul class="sidebar__nestedList" id="sidebar__showHide3">
                <li class="sidebar__nestedListItem">
                    <a class="sidebar__nestedListItemAnchor" href="#">
                        <span class="sidebar__nestedListItemSpan">
                            test
                        </span>
                    </a>
                </li>
                <li class="sidebar__nestedListItem">
                    <a class="sidebar__nestedListItemAnchor" href="#">
                        <span class="sidebar__nestedListItemSpan">
                            test
                        </span>
                    </a>
                </li>
            </ul>
            <li class="sidebar__listItem">
                <a class="sidebar__listItemAnchor" href="#">
                    <span class="sidebar__listItemSpan">
                        Berker
                    </span>
                </a>
                <a class="sidebar__btn icon" href="javascript:void(0);" onclick="toggleElementVisibility4()">
                    <i class="sidebar__btnIcon plus" id="changeIcon4"></i>
                </a>
            </li>
            <ul class="sidebar__nestedList" id="sidebar__showHide4">
                <li class="sidebar__nestedListItem">
                    <a class="sidebar__nestedListItemAnchor" href="#">
                        <span class="sidebar__nestedListItemSpan">
                            test
                        </span>
                    </a>
                </li>
                <li class="sidebar__nestedListItem">
                    <a class="sidebar__nestedListItemAnchor" href="#">
                        <span class="sidebar__nestedListItemSpan">
                            test
                        </span>
                    </a>
                </li>
            </ul>
            <li class="sidebar__listItem">
                <a class="sidebar__listItemAnchor" href="#">
                    <span class="sidebar__listItemSpan">
                        Karlik
                    </span>
                </a>
                <a class="sidebar__btn icon" href="javascript:void(0);" onclick="toggleElementVisibility5()">
                    <i class="sidebar__btnIcon plus" id="changeIcon5"></i>
                </a>
            </li>
            <ul class="sidebar__nestedList" id="sidebar__showHide5">
                <li class="sidebar__nestedListItem">
                    <a class="sidebar__nestedListItemAnchor" href="#">
                        <span class="sidebar__nestedListItemSpan">
                            test
                        </span>
                    </a>
                </li>
                <li class="sidebar__nestedListItem">
                    <a class="sidebar__nestedListItemAnchor" href="#">
                        <span class="sidebar__nestedListItemSpan">
                            test
                        </span>
                    </a>
                </li>
            </ul>
            <li class="sidebar__listItem">
                <a class="sidebar__listItemAnchor" href="#">
                    <span class="sidebar__listItemSpan">
                        Hager
                    </span>
                </a>
                <a class="sidebar__btn icon" href="javascript:void(0);" onclick="toggleElementVisibility5()">
                    <i class="sidebar__btnIcon plus" id="changeIcon5"></i>
                </a>
            </li>
            <ul class="sidebar__nestedList" id="sidebar__showHide5">
                <li class="sidebar__nestedListItem">
                    <a class="sidebar__nestedListItemAnchor" href="#">
                        <span class="sidebar__nestedListItemSpan">
                            test
                        </span>
                    </a>
                </li>
                <li class="sidebar__nestedListItem">
                    <a class="sidebar__nestedListItemAnchor" href="#">
                        <span class="sidebar__nestedListItemSpan">
                            test
                        </span>
                    </a>
                </li>
            </ul>
            <li class="sidebar__listItem">
                <a class="sidebar__listItemAnchor" href="#">
                    <span class="sidebar__listItemSpan">
                        Ospel
                    </span>
                </a>
            </li>
            <li class="sidebar__listItem">
                <a class="sidebar__listItemAnchor" href="#">
                    <span class="sidebar__listItemSpan">
                        Kos
                    </span>
                </a>
            </li>
            <li class="sidebar__listItem">
                <a class="sidebar__listItemAnchor" href="#">
                    <span class="sidebar__listItemSpan">
                        Viplast
                    </span>
                </a>
            </li>
        </ul>
    </aside>

            <div class="sidebar__producent">
                
                <?php
                include '../components/manufacturer_checkbox.component.php';
                ?>

            </div>

            <div class="sidebar__colorpicker">
                <!-- proszę naprawić kod :) -->
            </div>

            

            <div class="sidebar_pricerange">

            <?php
            include '../components/price_range.component.php'
            ?>

            </div>

    </div>
</body>
</html>