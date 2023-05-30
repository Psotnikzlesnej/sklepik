<link rel="stylesheet" href="<?= CSS_ROOT?>/product_display.css">
<?php
$url = $_SERVER['REQUEST_URI'];

class URLManipulator {
    public function __construct($url){
        $this->url_parts = parse_url($url);
        $queries = $this->url_parts['query'] ?? '';
        parse_str($queries, $this->query_params);
    }

    private function setParam($key, ...$values){
        $this->query_params[$key] = join(',', $values);
    }

    private function build_url(){
        $encoded_query = http_build_query($this->query_params);
        return $this->url_parts['path'] . '?' . $encoded_query;
    }

    public function get_new_url($key, $value){
        $this->setParam($key, $value);
        $new_url = $this->build_url();
        return $new_url;
    }
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

$pages_array = generateNavigation($pages_amount, $curr_page);
$current_index = array_search($curr_page, $pages_array);
$previous_page = $pages_array[$current_index-1] ?? NULL;
$next_page = $pages_array[$current_index+1] ?? NULL;
?>

<div class="product-display">
    <?php
        require COMPONENT_ROOT . '/product_navbar.component.php';
        ?> 
        <div class="product-display__grid">
        <?php foreach($products as $item):
            ?>
            <div class="product-tile-wrapper">
                <?php require COMPONENT_ROOT . '/item.component.php'; ?>
            </div>
        <?php
        endforeach;
        ?></div>
        <?php
        require COMPONENT_ROOT . '/product_navbar.component.php';
    ?>
</div>
