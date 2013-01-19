
<?php
require_once('util/main.php');
require_once('util/tags.php');
require_once('model/database.php');
require_once('model/product_db.php');
require_once('model/category_db.php');

// Get all categories
$categories = get_categories();
$category_id = $_GET['category_id'];
if (empty($category_id)) {
	$category_id = 1;
}

$category_name = get_category($category_id);
$products = get_products_by_category($category_id);


//include('product_list.php');

if ($action == 'list_products') {
	$category_id = $_GET['category_id'];
	//    if (empty($category_id)) {
	//        $category_id = 1;
	 //   }

	$category_name = get_category($category_id);
	$products = get_products_by_category($category_id);

	include('product_list.php');
} else if ($action == 'view_product') {
	$category_name = get_category($category_id);
	$products = get_products_by_category($category_id);
	
	$category_id = $_GET['category_id'];
	$product_id = $_GET['product_id'];
	$product = get_product($product_id);
	
	// Get product data
	$code = $product['productCode'];
	$name = $product['productName'];
	$list_price = $product['listPrice'];
	
	// Set the discount percent (for all web orders)
	$discount_percent = 30;
	
	// Calculate discounts
	$discount_amount = round($list_price * ($discount_percent / 100.0), 2);
	$unit_price = $list_price - $discount_amount;
	
	// Format the calculations
	$discount_amount = number_format($discount_amount, 2);
	$unit_price = number_format($unit_price, 2);
	
	// Get image URL and alternate text
	$image_filename = '../images/' . $code . '.png';
	$image_alt = 'Image: ' . $code . '.png';
	
	include('product_view.php');
} 	else if (empty($action)) {
	include('home.php');	
	
}
?>
