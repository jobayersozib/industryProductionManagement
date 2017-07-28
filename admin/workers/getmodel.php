<?php
require_once './workers.model';
$obj= new Worker();
$obj->showProductModel($_GET['q']);
?>
