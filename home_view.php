<?php include 'view/header.php'; ?>

<?php include 'sidebar.php'; ?>

<div id="content">
    <br />
    <!-- display product -->
    <h1>Featured products</h1>
    <table>
    <tr>
<!--   		<td>
             <p>Category: -->
              <?php /* echo $category_name; */?>
<!--  </p>
             </td>
-->    		 </tr>
    <?php foreach ($products as $product) :
        // Get product data
        $list_price = $product['listPrice'];
        $discount_percent = $product['discountPercent'];
        $description = $product['description'];
        
        // Calculate unit price
        $discount_amount = round($list_price * ($discount_percent / 100.0), 2);
        $unit_price = $list_price - $discount_amount;

        // Get first paragraph of description
        $description = add_tags($description);
        $i = strpos($description, "</p>");
        $description = substr($description, 3, $i-3);
        
    ?>
      
      
        <tr>
            <td id="product_image_column">
                <img src="images/<?php echo $product['productCode']; ?>_s.png"
                     alt="&nbsp;">
            </td>
            
            <td>
                <p>
<!--                     <a href="?action=view_product&amp;product_id=<?php 
                             /* echo $product['productID']; */?>">-->
                        <?php echo $product['productName']; ?>
<!--                     </a>
-->                </p>
                <p>
                    <b>Your price:</b>
                    $<?php echo number_format($unit_price, 2); ?>
                </p>
                <p>
                    <?php echo $description; ?>
                </p>
            </td>
        </tr>
    <?php endforeach; ?>
    </table>
</div>
<?php include 'view/footer.php'; ?>