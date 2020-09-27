<?php include_once "session.php";?>
<?php
include "include/header.php";
include "include/connect.php";
include_once "include/nav.php";

?>


<?php

// php code to Update data from mysql database Table

if(isset($_POST['update']))
{


   // get values form input text and number

 
 $Product_Name = $_POST['Product_Name'];
 $date = $_POST['date'];
 $catagory_id = $_POST['catagory_id'];
 $amount = $_POST['amount'];
 $id = $_POST['id'];
 $price = $_POST['price'];
 

 




 $query = "SELECT * FROM product WHERE id = '$id' AND book = ('$book') AND date = ('$date')";

 $query_run = mysqli_query($con,$query);

 if (mysqli_num_rows ($query_run) > 0) {




  echo '<script type="text/javascript"> alert("This product Is Booked")</script>';

}
else {









	
   // mysql query to Update data
 $query = "UPDATE Product SET `catagory_id`='".catagory_$id"',`date`='".$date."',`email`='".$email."',`book`='".$book."' WHERE `id` = $id";

 $result = mysqli_query($con, $query);

 if($result)
 {
   echo 'Product Booked';
 }else{
   echo 'Error booking Product ! Please try again';
 }
 mysqli_close($con);
}
}
?>


<div align="center"> 

<br>

<h1 style="text-align: center; ">Book product</h1>

<br>

      <form action="Book.php" method="post">

        <br>
		id:
        <input type="int" name="id" required><br><br>

        <br>
        <br>
              Date:
        <input type="date" name="date" required><br><br>
       
        <br>
		Price:
        <input type="int" name="price" required><br><br>
		
	
		Status:
        <select name="book">
          <option value="Reserved">Reserved  </option>
          <option value="Free"> Free</option>
          
          
          <br>
          <br>
        </select>
        <br>
        <br>
        <input type="submit" name="update" value="Book Confirm" class="btn btn-primary">

      

      </form>

</div>


<?php include_once "include/footer.php"; ?>