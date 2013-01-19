
<div id="main">
    
    <div id="content">
        <h1><?php echo $category_name; ?></h1>
        <ul class="nav">
            <?php foreach ($products as $product) : ?>
            <li>
                <a href="?action=view_product&amp;product_id=
                    <?php echo $product['productID']; ?>">
                    <?php echo $product['productName']; ?>
                </a>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
