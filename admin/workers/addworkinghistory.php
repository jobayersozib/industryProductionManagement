<?php require_once './workers.model'; ?>

<?php 
    if(isset($_POST['addhistory'])){
        $data=array($_GET['id'],$_POST['pname'],$_POST['mname'],$_POST['grossproduct'],$_POST['rejectproduct'],$_POST['averageweight'],$_POST['production_id']);
        //$data=[$_GET['id'],$_POST['pname'],$_POST['mname'],$_POST['grossproduct'],$_POST['rejectproduct'],$_POST['averageweight'],$_POST['production_id']];
        $obj=new Worker();
        $obj->addWorkingHistory($data);
    }
?>

<!DOCTYPE>

<html>
    <head>
        <title>Add working history </title>
        <link type="text/css" rel="stylesheet" href="">
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
            <legend><?php echo $_GET['name']; ?></legend>
            <?php echo "<form action='./addworkinghistory.php?id={$_GET['id']}'' method='post'>"; ?>
                <div>
                    <label for="productionid">Enter Production Id :</label>
                    <input type="number" name="production_id" />
                </div>
                <div>
                    <label for="pname">Select Product Name :</label>
                    <select name="pname" onchange="myFunction(this.value)">
                        <?php $obj= new Worker();
                              $obj->showProductList();
                        ?>
                    </select>
                </div>
                <div>
                    <label for="mname">Select Product Model :</label>
                    <select id='model' name="mname">
                        <option value="">Select product first</option>
                    </select>
                </div>
                <div>
                    <label for="grossproduction">Enter Gross Product :</label>
                    <input type="number" name="grossproduct" />
                </div>
                <div>
                    <label for="rejectproduction">Enter Reject Product :</label>
                    <input type="number" name="rejectproduct" />
                </div>
                
                <div>
                    <label for="averagewight">Enter average weight :</label>
                    <input type="number" step="any" name="averageweight" />
                </div>
                <div>
                    <input type="submit" name="addhistory" value="add" />
                </div>
            </form>
        </fieldset>
        
        <script type="text/javascript">
            function myFunction(value){
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("model").innerHTML = this.responseText;
                    }
                };
                    xmlhttp.open("GET", "getmodel.php?q="+value, true);
                    xmlhttp.send();
                }
        </script>
    </body>
</html>

