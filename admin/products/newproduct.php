
<?php

    require_once './products.model';
    if(isset($_POST['padd'])){
        $obj= new Product();
        $data=array($_POST['pname'],$_POST['pid']);
        $obj->create($data);
    }


?>

<!DOCTYPE>

<html>
    <head>
        <title>Add new Product</title>
        <link rel="" type="" href="">
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
        <fieldset>
            <legend>Add new product</legend>
            <form action="./newproduct.php" method="post">
                <div>
                    <label for="pname">Product name:</label></br>
                    <input type="text" name="pname" id="pname"/>
                </div>
                <div>
                    <label for="pid">Product id:</label></br>
                    <input type="text" name="pid" id="pid"/>
                </div>
                <div>
                    <input type="submit" name="padd" id="padd" value="addproduct"/>
                </div>
            </form>
        </fieldset>
    </body>
</html>

