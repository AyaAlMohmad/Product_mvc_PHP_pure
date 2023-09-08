<h1>Edit Product</h1>
<form method="post" action="?action=product/update">
    <div>
        <label for="name">Name Product:</label>
        <input type="text" name="name" id="name" value="<?= $product->getName_pro() ?>">
    </div>
    <div>
        <label for="price">Price:</label>
        <input type="price" name="price" id="price" value="<?= $product->getPrice() ?>">
    </div>
    <input type="hidden" name="id" value="<?= $product->getId() ?>">
    <button>Update</button>
</form>