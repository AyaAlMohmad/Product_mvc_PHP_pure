<!DOCTYPE html>
<html>
<head>
    <title>PHP MVC Example</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="/darrebni/new-mvc/">Home</a></li>
            <li><a href="/darrebni/new-mvc/?action=create">Create User</a></li>
            <li><a href="/darrebni/new-mvc/?action=product/create">Create Product</a></li>
            <li><a href="/darrebni/new-mvc/?action=product/index">All Product</a></li>
        </ul>
    </nav>
    <main>
        <?php require "views/$view.php"; ?>
    </main>
</body>
</html>