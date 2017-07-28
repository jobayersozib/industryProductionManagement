<?php require_once './productions.model'; ?>
<?php
    if(isset($_POST['addp'])){
        $obj= new Production();
        $obj->addproduction($_POST['productionno']);
    }
?>
<!DOCTYPE>

<html>
    <head>
        <title>Add production</title>
        <link type="text/css" rel="stylesheet" href=""/>
    </head>
    <body>
        <h1>Add production history</h1>
        <fieldset>
            <legend>Add production</legend>
            <form action="./addnewproduction.php" method="post">
                <div>
                    <label for="pid">Enter production number</label>
                    <input type="number" name="productionno" id="pid"/>
                </div>
                <div>
                    <input type="submit" name="addp" value="add"/>
                </div>
            </form>
        </fieldset>
    </body>
</html>