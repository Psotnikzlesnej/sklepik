<?php 
$url_parts = parse_url($_SERVER['REQUEST_URI']);

function get_query_parameters($url_parts){
    if (isset($url_parts['query'])) {
        parse_str($url_parts['query'], $params);
    } else {
        $params = array();
    }
    return $params;
}

$params = get_query_parameters($url_parts);


function generateNavigation($pages, $currentPage, $middle_count = 3){
	if ($pages < 1) return [];
	$visiblePages = [$currentPage];
	while (count($visiblePages) < $pages && count($visiblePages) < $middle_count) {
		$firstElement = $visiblePages[0];
		$lastElement = end($visiblePages);
		if ($firstElement > 1) {
			array_unshift($visiblePages, $firstElement - 1);
		}
		if ($lastElement < $pages) {
			$visiblePages[] = $lastElement + 1;
		}
	}

    if($visiblePages[0] == 2){
        array_unshift($visiblePages, 1);
    }else if ($visiblePages[0] > 2){
        array_unshift($visiblePages, 1, '...');
    }
    if(end($visiblePages)+1 == $pages){
        $visiblePages[] = $pages;
    }else if (end($visiblePages)+1 < $pages){
        array_push($visiblePages, '...', $pages);
    }
	return $visiblePages;
};

$current_page = 4;
$pages_amount = 51;

$pages_array = generateNavigation($pages_amount, $current_page);
$current_index = array_search($current_page, $pages_array);
$previous_page = $pages_array[$current_index-1] ?? NULL;
$next_page = $pages_array[$current_index+1] ?? NULL;
$url = $_SERVER['REQUEST_URI'];
?>

<?php include __DIR__ . '/select.component.php' ?>
<nav class="product-navbar">
    <div class="product-navbar__mode">
        Widok:
        <a href="." class="product-navbar__mode-link">List</a>
        <a href="." class="product-navbar__mode-link">Grid</a>
    </div>
    <div class="product-navbar__sort">
        Sortuj
        <custom-select class="select product-navbar__select">
            <li slot="item" class="select__list-item" data-value="">Domyślnie</li>
            <li slot="item" class="select__list-item" data-value="price_asc">Cena rosnąco</li>
            <li slot="item" class="select__list-item" data-value="price_desc">Cena malejąco</li>
            <li slot="item" class="select__list-item" data-value="name_asc">Nazwa rosnąco</li>
            <li slot="item" class="select__list-item" data-value="name_desc">Nazwa malejąco</li>
        </custom-select>
    </div>
    <div class="product-navbar__visible">
        Pokaż
        <custom-select class="select product-navbar__select">
            <li slot="item" class="select__list-item" data-value="10">10</li>
            <li slot="item" class="select__list-item" data-value="20">20</li>
            <li slot="item" class="select__list-item" data-value="30">30</li>
            <li slot="item" class="select__list-item" data-value="40">40</li>
        </custom-select>
    </div>
    <!-- co to kurwa jest -->
    <?php if($previous_page): 
            $params_copy = $params; 
            $params_copy['p'] = $previous_page;
            $new_query = http_build_query($params_copy);
            $new_url = $url_parts['path'] . '?' . $new_query;
            ?>
        <a href="<?= $new_url ?>"><</a>
    <?php endif; ?>
    <div class="pages">
        <?php foreach($pages_array as $page_id):
            if($page_id != '...'):
                $params_copy = $params;
                $params_copy['p'] = $page_id;
                $new_query = http_build_query($params_copy);
                $new_url = $url_parts['path'] . '?' . $new_query;
            ?>
                <a href="<?= $new_url ?>" class="current"><?= $page_id ?></a>
            <?php else: ?>
                <span>...</span>
            <?php endif;
        endforeach; ?>
    </div>
    <?php if($next_page): 
            $params_copy = $params; 
            $params_copy['p'] = $next_page;
            $new_query = http_build_query($params_copy);
            $new_url = $url_parts['path'] . '?' . $new_query;
            ?>
        <a href="<?= $new_url ?>">></a>
    <?php endif; ?>
</nav>
<script src="../js/product_navbar.js"></script>