<?php require_once './productmodels.model';?>
<?php
    if(isset($_POST['madd'])){
        
        $data=array($_POST['mname'],$_POST['mid'],$_POST['mproduct'],$_POST['mprice'],$_POST['mstock']);
        
        $obj= new ProductModel();
        $obj->create($data);
    }

?>
<!DOCTYPE>

<html>
    <head>
        <title>Add new model</title>
        <link type="" rel="" href=""/>
    </head>
    <body>
        <nav>
            <ul>
                <li><a href="/DummyProject/admin/">Home</a></li>
                <li><a href="/DummyProject/admin/workers/">Workers</a></li>
                <li><a href="/DummyProject/admin/products/">Products</a></li>
                <li><a href="/DummyProject/admin/productions">Productions</a></li>
            </ul>
        </nav>
        <fieldset>
            <legend>Add new model</legend>
            <form action="./newmodel.php" method="post">
                <div>
                    <label for="mname">Model name :</label></br>
                    <input type="text" name="mname" id="mname"/>
                </div>
                <div>
                    <label for="mid">Model id :</label></br>
                    <input type="text" name="mid" id="mid"/>
                </div>
                <div>
                    <label for="mproduct">Select Product :</label></br>
                    <select name="mproduct"id="mproduct">
                      <?php $obj= new ProductModel();
                        $obj->showProduct();
                      ?>
                    </select>
                </div>
                <div>
                    <label for="mprice">Model price :</label></br>
                    <input type="number" name="mprice" id="mprice"/>
                </div>
                <div>
                    <label for="mstock">Stock :</label></br>
                    <input type="number" name="mstock" id="mstock"/>
                </div>
                <div>
                    <input type="submit" name="madd" value="add model" id="madd"/>
                </div>
                
            </form>
        </fieldset>
    </body>
</html>

