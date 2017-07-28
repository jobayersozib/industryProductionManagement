<?php

    require_once '../inc/database.php';

?>


<!DOCTYPE html>

<html>
    <head>
        <title></title>
        <link type="text/css" rel="stylesheet" href="../style.css" />
    </head>
    <body>
        <div id="formf">
            <fieldset>
                <legend>
                    Add product
                </legend>
                <form action="" method="post">
                    <div class="f_field">
                        <label for="name">Enter product name:</label></br>
                        <input type="text" id="name" name="pname" required="" placeholder="Entre product name" value=""/>
                    </div>
                    <div class="f_field">
                        <label for="stock">product in stock :</label></br>
                        <input type="number" id="stock" name="pstock" placeholder="Entre product in stock" value=""/>
                    </div>
                    <div class="f_field">
                        <label for="price">product price :</label></br>
                        <input type="number" id="price" required="" name="pprice" placeholder="Entre product price" value=""/>
                    </div>
                    <div class="f_field">
                        <label for="pno">product No :</label></br>
                        <input type="number" id="pno" name="ptno" required="" placeholder="Entre product No" value=""/>
                    </div>
                    <div class="f_field">
                        <input type="submit" name="sbtn" value="Add product">
                        <a href="../">Back</a>
                    </div>
                    
                    
                </form>
                <?php 
                    if (isset($_POST['sbtn'])) {
                        $name=$_POST['pname'];
                        $price=$_POST['pprice'];
                        $pno=$_POST['ptno'];
                        $stock=$_POST['pstock'];
                        $data=array($name,$stock,$price,$pno);
                        $obj=new Database(); ?>
                <h4><?php $obj->insert($data); ?></h4>

                    <?php } ?>
            </fieldset>
            
        </div>
    </body>
</html>

