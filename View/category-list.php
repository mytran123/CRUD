<a href="add-product.php">ADD NEW CATEGORY</a>
<table border="1px">
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
    </tr>
    </thead>
    <tbody>
    <?php if (isset($categories)) :?>
        <?php foreach ($categories as $category):?>
            <tr>
                <td><?php echo $category["id"]?></td>
                <td><?php echo $category["name"]?></td>
                <td><a href="product-detail.php?id=<?php echo $category["id"]?>">Detail</a></td>
                <td><a onclick="return confirm('Are you sure you want to delete this category?')" href="product-delete.php?id=<?php echo $category["id"]?>">Delete</a></td>
            </tr>
        <?php endforeach;?>
    <?php else :?>
        <tr>
            <td colspan="6">Không có sản phẩm nào ở đây</td>
        </tr>
    <?php endif; ?>
    </tbody>
</table>
