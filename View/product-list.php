<a href="index.php?page=product-create">ADD NEW PRODUCT</a>
<table border="1px">
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Desc</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <?php if (isset($products)) :?>
    <?php foreach ($products as $product):?>
        <tr>
            <td><?php echo $product["id"]?></td>
            <td><?php echo $product["name"]?></td>
            <td><?php echo $product["price"]?></td>
            <td><?php echo $product["description"]?></td>
            <td><a href="product-detail.php?id=<?php echo $product["id"]?>">Detail</a></td>
            <td><a onclick="return confirm('Are you sure you want to delete this product?')" href="product-delete.php?id=<?php echo $product["id"]?>">Delete</a></td>
        </tr>
    <?php endforeach;?>
    <?php endif; ?>
    </tbody>
</table>