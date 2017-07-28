<?php require_once './workers.model'; ?>

<!DOCTYPE>

<html>
    <head>
        <title>workers list</title>
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
    <?php
          $obj= new Worker();
          $obj->show();
    ?>
        <a href="newworker.php">Add new worker</a>
    </body>
</html>

