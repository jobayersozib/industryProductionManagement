<?php 

    require_once './inc/database.php';

?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Product list</title>
        <link type="text/css" rel="stylesheet" href="style.css" />
    </head>
    <body>
        <div id="content">
            <h1>Product List</h1>
            <table>
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th>Receive</th>
                    <th>Delivery</th>
                </tr>

                <?php
                
                    $obj= new Database();
                    $obj->select();
                
                ?>

            </table>
            <div>
                <a href="./new">Add new product </a>
            </div>

        </div>
        
    </body>
</html>
