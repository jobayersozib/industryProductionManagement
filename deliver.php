

<?php
require_once './inc/database.php';


?>
<! DOCTYPE>

<html>
    <head>
        <title>Deliver product</title>
        <link rel="stylesheet" type="text/css" href="">
    </head>
    
    <body>
        <fieldset id="details">
            <legend>Deliver Product</legend>
            <?php 
            $obj= new Database();
            if(isset($_GET['id']) && !isset($_POST['store'])){
                if(is_numeric($_GET['id'])){
                    $id=$_GET['id'];
                     
                    $obj->singleproduct($id,"deliver.php");
                    

                }else{
                    header('Location:./');
                }

            }elseif (isset ($_POST['store'])) {
                 $pstock=$obj->singleproduct($_GET['id'],"deliver.php");
                 $obj->deliverproduct($pstock,$_POST['num'],$_GET['id']);
            }
            else{
                header('Location:./');
            }
        
        ?>
             
        </fieldset>
        
    </body>
</html>



