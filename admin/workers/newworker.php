<?php require_once './workers.model'; ?>

<?php
    if(isset($_POST['submit'])){
//        echo $_POST['wname'];
//        echo $_POST['wid'];
//        echo $_POST['wmobile'];
//        echo $_POST['waddress'];
//        echo $_POST['wjoiningdate'];
        $data=array($_POST['wname'],$_POST['wid'],$_POST['wmobile'],$_POST['waddress'],$_POST['wjoiningdate']);
        $obj=new Worker();
        $obj->create($data);
    }
?>
<!DOCTYPE>

<html>
    <head>
        <title>Create new worker</title>
        <link type=" " rel="" href="">
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
            <legend>Add worker</legend>
            <form action="./newworker.php" method="post">
                <div>
                    <label for="workername">Name:</label></br>
                    <input type="text" name="wname" id="workername"/>
                </div>
                <div>
                    <label for="workerid">worker ID:</label></br>
                    <input type="text" name="wid" id="workerid"/>
                </div>
                <div>
                    <label for="workermobile">Mobile No:</label></br>
                    <input type="number" name="wmobile" id="workermobile"/>
                </div>
                <div>
                    <label for="workerjoiningdate">Joining date:</label></br>
                    <input type="date" name="wjoiningdate" id="workerjoiningdate"/>
                </div>
                <div>
                    <label for="workeraddress">Address:</label></br>
                    <textarea rows="10" cols="15" name="waddress" id="workeraddress"></textarea>
                </div>
                <div>
                    <input type="submit" name="submit" value="add worker"/>
                </div>
                
            </form>
        </fieldset>
    </body>
    
</html>
