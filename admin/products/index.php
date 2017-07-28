<?php require_once './products.model'; ?>

<!DOCTYPE>

<html>
    <head>
        <title>products list</title>
        <link href="" >
    </head>
    <body>
        <nav>
            <ul>
                <li><a href="/DummyProject/admin/">Home</a></li>
                <li><a href="/DummyProject/admin/workers/">Workers</a></li>
                <li><a href="/DummyProject/admin/products/">Products</a></li>
                <li><a href="/DummyProject/admin/productions/">Productions</a></li>
            </ul>
        </nav>
        <h1>Products list</h1>
     <?php
        $obj=new Product();
        $obj->show();
     ?>
     <a href="newproduct.php">Add new product</a>
    </body>
</html>
