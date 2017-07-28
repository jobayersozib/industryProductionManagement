<?php require_once './productmodels.model'; ?>

<!DOCTYPE>

<html>
    <head>
        <title>Product page</title>
        <link rel="" type="" >
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
        <h1>Product name:<?php echo $_GET['name']; ?></h1>
        
        <table>
            <table>
                <tr>
                  <th>Model Name</th>
                  <th>Price</th>
                  <th>Stock</th>
                  <th>Receive</th>
                  <th>Delivery</th>
                </tr>
                <?php 
                    $obj= new ProductModel();
                    $obj->show($_GET['id']);
                ?>
            </table>
        <a href="./newmodel.php">Add new model</a>
    </body>
</html>
