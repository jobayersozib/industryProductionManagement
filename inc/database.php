<?php

 class Database{
     private $servername = "localhost";
     private $username = "root";
     private $password = "";
     private $dbname = "tfl";
     public function __construct() {
         $this->conn = new mysqli($this->servername,$this->username, $this->password,$this->dbname);

        // Check connection
            if ($this->conn->connect_error) {
                //header("Location:'./404.php");
                //echo " not connected";
            }else{
                //echo "Connected successfully";
            }
            
            
    
            
     }
     
     public function select(){
         $sql = "SELECT * FROM products";
            $result = $this->conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td>".$row['name']."</td><td>".$row['price']."</td><td>".$row['stock']."</td><td><a href='receive.php?id={$row['productid']}'>Receive</a></td><td><a href='./deliver.php?id={$row['productid']}'>Delivery</a></td></tr>";
                }
            } else {
                echo "0 results";
            }
            $this->conn->close();
     }


     public function insert($data=  array()){
           $sql="INSERT INTO `products`(`name`, `stock`, `price`, `productid`) VALUES ('$data[0]','$data[1]','$data[2]','$data[3]')";
            if ($this->conn->query($sql) === TRUE) {
                echo "product added successfully";
            } else {
                echo "Error: ".$this->conn->error;
            }
            $this->conn->close();    
     }
     
     public function singleproduct($id,$url){
         $sql = "SELECT * FROM products where productid={$id}";
         $result = $this->conn->query($sql);
         $ret=null;
         if($result->num_rows>0){
            $row=$result->fetch_assoc();
            $ret=$row['stock'];
            echo "<h3>Product name :".$row['name']."</h3>";
            echo "<h3>Total stock :".$row['stock']."</h3>";
            echo "<h3>Market price :".$row['price']."</h3>";
            echo "<form action='./{$url}?id={$row['productid']}' method='post'>";
            echo  '<div><label for="number">Enter product quantity :</label>';
            echo  '<input type="number" id="number" name="num" placeholder="Number of products">';
            echo  '</div><input type="submit" name="store" value="submit"/></form>'; 
            
            
         }else{
             echo "Not available";
         }
         
         //$this->conn->close();
         return $ret;
         
     }

     public function storeproduct($previous,$num,$id){

        $sql="UPDATE products SET stock=$previous+$num WHERE productid=$id";
        if ($this->conn->query($sql) === TRUE) {
            header("Location:./");
        } else {
            echo "Error updating record: " . $conn->error;
        }
        $this->conn->close();

     }
     
     
     public function deliverproduct($previous,$num,$id){
        $sql="UPDATE products SET stock=$previous-$num WHERE productid=$id";
        if ($this->conn->query($sql) === TRUE) {
            header("Location:./");
        } else {
            echo "Error updating record: " . $conn->error;
        }
        $this->conn->close();
     }

     public function update(){
         
     }
     
     public function delete(){
         
     }
     
     
 }

