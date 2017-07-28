<?php require_once './workers.model'; ?>

<!DOCTYPE>

<html>
    <head>
        <title>Details</title>
        <style>
            td ,th{
                border: 1px solid black;
            }
        </style>
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
        <table style="border:1px solid black">
            
            <?php
                $obj= new Worker();
                $obj->singleWorking($_GET['id'],$_GET['u']);
            ?>
        </table>   
        
    </body>
</html>

