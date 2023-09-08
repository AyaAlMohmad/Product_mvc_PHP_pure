<h1>Delete Product</h1>
<form method="post" action="?action=product/delete">
are you sure to delete <?php echo $product->getName_pro(); ?>
<input type="hidden" name="id" value="<?= $product->getId()?>">
<button name="delete" >Delete</button>
<button name="no" > Back</button>
</form>
