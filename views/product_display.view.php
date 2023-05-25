<link rel="stylesheet" href="../styles/product_display.css">
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

<?php
include '../templates/header.php'
?>
<?php
include '../templates/breadcrumbs.php'
?>
<?php
include '../views/sidebar.view.php'
?>

<?php
require __DIR__ . '/../components/product_navbar.component.php';
require __DIR__ . '/../components/item.component.php';
require __DIR__ . '/../components/item.component.php';
require __DIR__ . '/../components/item.component.php';
require __DIR__ . '/../components/item.component.php';
require __DIR__ . '/../components/item.component.php';
require __DIR__ . '/../components/item.component.php';
require __DIR__ . '/../components/item.component.php';
require __DIR__ . '/../components/product_navbar.component.php';

?>
<?php
include '../templates/footer.php'
?>