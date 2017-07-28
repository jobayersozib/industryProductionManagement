<?php require_once './workers.model'; ?>

<!DOCTYPE>

<html>
    <head>
        <title>Workers Details</title>
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
        
        <?php
            if(isset($_GET['id'])){
                $obj=new Worker();
                $obj->single($_GET['id']);
            }
            $obj= new Worker();?>
        
            <?php
            $obj->showHistory($_GET['id']);
            ?>
        </table>   
        
    </body>
</html>
