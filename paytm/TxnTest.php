<?php

$con= mysqli_connect("localhost","root","","intern","3306") or die(mysqli_error($con));
session_start();
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
	header("Pragma: no-cache");
	header("Cache-Control: no-cache");
	header("Expires: 0");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<title>Merchant Check Out Page</title>
<meta name="GENERATOR" content="Evrsoft First Page">
<style>
   body{
          background: url(../skybg.jpg) no-repeat center center fixed; 
          -webkit-background-size: cover;
          -moz-background-size: cover;
          -o-background-size: cover;
          background-size: cover;
    }
    .trey{
        border: 1px solid black;
        background-color:aliceblue;
    }
</style>
</head>
<body>
    <?php
                    $sum=0;
                    if(isset($_SESSION['user_id'])) {
                    $user_id=$_SESSION['user_id'];
                    $item_id_cart=NULL;
                    $query = "SELECT items.price AS Price, users_items.item_id as iid, users_items.user_id, users_items.id as mid, items.id, items.name AS Name FROM users_items JOIN items ON users_items.item_id = items.id WHERE users_items.user_id='$user_id' and status='Added to cart'";
                    $result= mysqli_query($con, $query) or die(mysqli_error($con));
                    if (mysqli_num_rows($result) >= 1)  {
     ?>
                   
                    <?php                           
                                while ($row = mysqli_fetch_array($result)) {
                                    $sum+= $row['Price'];
                                    $item_id_cart = $row['iid'];
                                    $actualuserid = $row['user_id'];
                                    $ordernumber= $row['mid'];
//                                    echo "<tr><td>" . "#" . $row["id"] . "</td><td>" . $row["Name"] . "</td><td>Rs " . $row["Price"] . "</td><td><a href='cartremove.php?id={$row['id']}' class='remove_item_link'> Remove</a></td></tr>";
                                }
                                
                                //$user_id = rtrim($id, ", ");
//                                echo "<tr><td></td><td>Total</td><td>Rs " . $sum . "</td><td><a href='paytm/TxnTest.php?itemsid=" . $user_id . "' class='btn btn-primary'>Confirm Order</a></td></tr>";
                    ?>
    <?php 
                    } }else {
                            echo "Add items to the cart first!";
                        }
                        ?>
                    
        <div class="text-center backk">
	<h1 class="display-3 mt-4 pt-1 trey">PAYMENT GATEWAY</h1>
	
	<form method="post" action="pgRedirect.php" class="mt-4 pt-4 offset-md-3 col-md-6">
		<table class="table table-striped table-hover table-light table-responsive" border="1">
                    <thead>
				<tr>
                                    <th scope="col">S.No</th>
                                    <th scope="col">Label</th>
				    <th scope="col">Value</th>
				</tr>
                    </thead>
                        <tbody>
				<tr>
                                    <td scope="row">1</td>
					<td><label>Item Id</label></td>
					<td><input id="ORDER_ID" tabindex="1" maxlength="20" size="20"
						name="ORDER_ID" autocomplete="off"
						value="<?php 
                                                echo $ordernumber;
                                                ?>">
					</td>
				</tr>
				<tr>
					<td scope="row">2</td>
					<td><label>Customer Id</label></td>
					<td><input id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="<?php echo $actualuserid ?>"></td>
				</tr>
				<tr>
					<td scope="row">3</td>
					<td><label>Product Type</label></td>
					<td><input id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Electronics"></td>
				</tr>
				
				<tr>
					<td scope="row">4</td>
					<td><label>Total Amount</label></td>
					<td><input title="TXN_AMOUNT" tabindex="10"
						type="text" name="TXN_AMOUNT"
						value="<?php echo $sum ?>">
					</td>
				</tr>       
			</tbody>
		</table>
            <input value="CheckOut" type="submit"	onclick=""></td>
	</form>
        </div>
        <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>