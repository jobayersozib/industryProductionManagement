<?php require_once './productions.model'; ?>

<!DOCTYPE>

<html>
    <head>
        <title>Production list</title>
        <link type="text/css" rel="stylesheet" href=""/>
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
        <h1>Production list below</h1>
        <table>
            <tr>
                <th>Production number</th>
                <th>Date</th>
            </tr>
            <?php 
                $obj= new Production();
                $obj->show();
            ?>
        </table>
        <a href="./addnewproduction.php">add new production</a>
    </body>
</html>
