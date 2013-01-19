

<div id="sidebar">
    <ul>
        <!-- These links are for testing only.
             Remove them from a production application. -->
       
        <h2>Categories</h2>
            <!-- former display links for all categories -->
        <?php foreach ($categories as $category) : ?>
        <li>
            <a href="product.php?action=list_products&amp;category_id=<?php echo $category['categoryID']; ?>">
                <?php echo $category['categoryName']; ?>
            </a>
        </li>
        <?php endforeach; ?>
        <li>&nbsp;</li>
    </ul>
</div>
