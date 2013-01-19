<?php
    require 'database.php';

    // Get category ID
    $category_id = $_GET['category_id'];
    if (!isset($category_id)) {
        $category_id = 1;
    }

    // Get name for current category
    $query = "SELECT * FROM categories
              WHERE categoryID = $category_id";
    $category = $db->query($query);
    $category = $category->fetch();
    $category_name = $category['categoryName'];

    // Get all categories
    $query = 'SELECT * FROM categories
              ORDER BY categoryID';
    $categories = $db->query($query);

    // Get products for selected category
    $query = "SELECT * FROM products
              WHERE categoryID = $category_id
              ORDER BY productID";
    $products = $db->query($query);
?>
<?php
require_once('util/main.php');
require_once('util/tags.php');
require_once('model/database.php');
require_once('model/product_db.php');
require_once('model/category_db.php');

// Get all categories
$categories = get_categories();

// Set the featured product IDs in an array
$product_ids = array(1, 7, 9);
// Note: You could also store a list of featured products in the database

// Get an array of featured products from the database
$products = array();
foreach ($product_ids as $product_id) {
    $product = get_product($product_id);
    $products[] = $product;   // add product to array
}

// Display the home page
include('home_view.php');
?>
<?php
require('../model/database.php');
require('../model/product_db.php');
require('../model/category_db.php');

if (isset($_POST['action'])) {
    $action = $_POST['action'];
} else if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'list_products';
}

if ($action == 'list_products') {
    $category_id = $_GET['category_id'];
    if (empty($category_id)) {
        $category_id = 1;
    }

    $categories = get_categories();
    $category_name = get_category_name($category_id);
    $products = get_products_by_category($category_id);

    include('product_list.php');
} else if ($action == 'view_product') {
    $categories = get_categories();

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
}
?>