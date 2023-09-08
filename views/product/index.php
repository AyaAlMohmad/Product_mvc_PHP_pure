
<?php

foreach ($products as $product) {
    $id = $product->getId();
?>

    <table>
        <tr>
            <td>
                Name Product:
            </td>
            <td><?php echo  $product->getName_pro(); ?></td>
        </tr>
        <tr>
            <td>
                price:
            </td>
            <td><?php echo $product->getPrice(); ?></td>
        </tr>
        <tr> <td>
            <form method="post" action="/darrebni/new-mvc/?action=product/edit&id=<?= $product->getId() ?>">
                <button>Edit</button>
            </form></td><td>
            <form method="post" action="/darrebni/new-mvc/?action=product/delete&id=<?= $product->getId()?>">
                <button>Delete</button>
            </form>
            </td>
        </tr>
    </table>
<?php }


?>