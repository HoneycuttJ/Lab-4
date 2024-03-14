<?php include ("db_connection.php"); ?>

<?php
	$sql_product="SELECT * FROM product_tab";
	$result_product=$connect->query($sql_product);
	
	while($row_product = $result_product -> fetch_assoc())
	{
		echo $row_product["product_name"]."<br>";
		echo $row_product["unit_price"]."<br>";
		echo $row_product["qty_in_stock"]."<br>";
		echo "<br><br>";
	}
		?>