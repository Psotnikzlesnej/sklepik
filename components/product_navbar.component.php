<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../styles/product_navbar.css">
<?php
$url = $_SERVER['REQUEST_URI'];
$url_manipulator = new URLManipulator($url);

class URLManipulator {
    public function __construct($url){
        $this->url_parts = parse_url($url);
        $queries = $this->url_parts['query'] ?? '';
        parse_str($queries, $this->query_params);
    }

    public function setParam($key, ...$values){
        $this->query_params[$key] = join(',', $values);
    }

    public function build_url(){
        $encoded_query = http_build_query($this->query_params);
        return $this->url_parts['path'] . '?' . $encoded_query;
    }
}

function get_new_page_url($url_manipulator, $page) {
    $url_manipulator->setParam('p', $page);
    $new_url = $url_manipulator->build_url();
    return $new_url;
}


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
?>
<?php include __DIR__ . '/select.component.php' ?>

<nav class="product-navbar" id="navbar-product">
    <div class="product-navbar__mode">
        <span class="product-navbar__mode-text">Widok:</span>
        <a href="#" class="product-navbar__mode-link" id="gridViewLink">
            <i class="product-navbar__mode-icon icon-e90a gridView"></i>
        </a>
        <a href="#" class="product-navbar__mode-link hidden" id="listViewLink">
            <i class="product-navbar__mode-icon icon-e90b listView"></i>
        </a>
    </div>
    <div class="product-navbar__right">
        <div class="product-navbar__section product-navbar__section-sort">
            <h3 class="product-navbar__section-title">Sortuj</h3>
            <custom-select class="select product-navbar__select">
                <li slot="item" class="select__list-item" data-value="">Domyślnie</li>
                <li slot="item" class="select__list-item" data-value="price_asc">Cena rosnąco</li>
                <li slot="item" class="select__list-item" data-value="price_desc">Cena malejąco</li>
                <li slot="item" class="select__list-item" data-value="name_asc">Nazwa rosnąco</li>
                <li slot="item" class="select__list-item" data-value="name_desc">Nazwa malejąco</li>
            </custom-select>
        </div>
        <div class="product-navbar__section product-navbar__section-show">
            <h3 class="product-navbar__section-title">Pokaż</h3>
            <custom-select class="select product-navbar__select">
                <li slot="item" class="select__list-item" data-value="10">10</li>
                <li slot="item" class="select__list-item" data-value="20">20</li>
                <li slot="item" class="select__list-item" data-value="30">30</li>
                <li slot="item" class="select__list-item" data-value="40">40</li>
            </custom-select>
        </div>
        <div class="product-navbar__section product-navbar__pages">
            <?php
                if($previous_page):
                $new_url = get_new_page_url($url_manipulator, "$previous_page");
            ?>
                <a href="<?= $new_url ?>" class="product-navbar__page-link"><</a>
            <?php
                endif;
                foreach($pages_array as $page_id):
                if($page_id != '...'):
                $new_url = get_new_page_url($url_manipulator, "$page_id");
            ?>
                <a href="<?= $new_url ?>" class="product-navbar__page-link <?= $current_page == $page_id ? 'product-navbar__page-link--current' : '' ?>">
                    <?= $page_id ?>
                </a>
            <?php else: ?>
                <span class="product-navbar__page-dots">...</span>
            <?php endif; endforeach;
                if($next_page):
                $new_url = get_new_page_url($url_manipulator, "$next_page");
            ?>
            <a href="<?= $new_url ?>" class="product-navbar__page-link">></a>
        <?php endif; ?>
        </div>
    </div>
</nav>
<script src="../js/product_navbar.js"></script>