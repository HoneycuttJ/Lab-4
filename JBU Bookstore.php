
<<!DOCTYPE html>
<html>
	<head> 
		<title>JBU Bookstore </title>
		
		<link rel="stylesheet" href="../css/mystyles.css"/>
		<script type="text/javascript" src="../js/myjs.js"></script>
		
	</head>

<?php
 include ("db_connection.php"); ?>

<?php
	$sql_product="SELECT * FROM products_tab";
	$result_product=$connect->query($sql_product);
	
	while($row_product = $result_product -> fetch_assoc())
	{
		echo $row_product["product_name"]."<br>";
		echo $row_product["unit_price"]."<br>";
		echo $row_product["qty_in_stock"]."<br>";
		echo "<br><br>";
	}
		?>


	<body bgcolor="#fff">
		<br><br><br>
	
	<img src="https://jbuathletics.com/images/2017/9/23/branding_secondary.png" alt="JBU Eagle" style="width:250px;height:175px;" class = "img2">
	<h1 align="center"> JBU Online Store </h1>
	
	
	<ul>
		<li class="menu-item"><a href="#" class="drp">Books </a>
			<div class="menu-content">
				<a  href="add_book.php">Add Book</a><br>
				<a  href="remove_book.php">Remove Book</a><br>
				<a href="display_books.php">Display all Books</a><br>
			</div>
		
		</li>
		
		<li class="menu-item"><a href="#" class="drp">Books </a>
		<div class="menu-content">
			<a  href="add_book.php">Add Book</a><br>
			<a  href="remove_book.php">Remove Book</a><br>
			<a href="display_books.php">Display all Books</a><br>
		</div>
		
		</li>
		
		<li class="menu-item"><a href="#" class="drp">Users </a>	
		<div class="menu-content">
			<a href="add_user.php">Add User</a><br>
			<a href="remove_user.php">Remove User</a><br>
			<a href="display_users.php">Display all Users</a><br>
		</div>
		</li>
	</ul>
	<p align="center"> Welcome to JBU's Online store - open for faculty/staff and students!<p>
	
	<table align="center">
		<tr>
			<td align = "center">
			<a href = "javascript:void(0)" onclick = "popupfunction('1')" class = li>
			<img src="https://cdn.kobo.com/book-images/9cdfbb2e-4ea0-45c3-b62a-3d3958034514/1200/1200/False/the-adventures-of-huckleberry-finn-257.jpg" alt="Huckleberry" style = "width:250;height:300px"/></td>
			</a>
			</td>
			<td>
			<a href = "javascript:void(0)" onclick = "popupfunction('2')" class = li>
			<img src="https://images.penguinrandomhouse.com/cover/9780143105954" alt="MobyDick" style = "width:250;height:300px">
			</a>
			</td>
			<td>
			<a href = "javascript:void(0)" onclick = "popupfunction('3')" class = li>
			<img src="https://m.media-amazon.com/images/I/61t6c3q2suL.jpg" alt="Charlotte" style = "width:250;height:300px">
			</a>
			</td>
			<td>
			<a href = "javascript:void(0)" onclick = "popupfunction('4')" class = li>
			<img src="https://m.media-amazon.com/images/I/81EY355krJL._AC_UF1000,1000_QL80_.jpg" alt="Hobbit" style = "width:250;height:300px">
			</a>
			</td>
			<td>
			<a href = "javascript:void(0)" onclick = "popupfunction('5')" class = li>
			<img src="https://m.media-amazon.com/images/I/81gGu7UdZ2L._AC_UF1000,1000_QL80_.jpg" alt="Narnia1" style = "width:250;height:300px">
			</a>
			</td>
		</tr>
		<tr>
			<td>The Adventures of Huckleberry Finn</td>
			<td>Moby Dick</td>
			<td>Charlotte's Web</td>
			<td>The Hobbit</td>
			<td>Narnia: The Lion the Witch and the Wardrobe</td>
	
	
	<div id="popup1" class="white_content">
		<p align=center><br><br>
		<img src="https://cdn.kobo.com/book-images/9cdfbb2e-4ea0-45c3-b62a-3d3958034514/1200/1200/False/the-adventures-of-huckleberry-finn-257.jpg" width=30% /><br>The Adventures of Huckleberry Finn<br>Price:$10   Rating: 5<br><br>
		<a href = "javascript:void(0)" onclick = "popupclose('1')" class=linktext>Close Window</a>
		<a href = "javascript:void(0)" onclick = "addcart('The Adventures of Huckleberry Finn')" class=linktext>Add to Cart</a>
		</p>

	</div>

	<div id="popup2" class="white_content">
		<p align=center><br><br>
		<img src="https://images.penguinrandomhouse.com/cover/9780143105954" width=30% /><br>Moby Dick<br>Price:$12   Rating: 4.9<br><br>
		<a href = "javascript:void(0)" onclick = "popupclose('2')" class=linktext>Close Window</a>
		<a href = "javascript:void(0)" onclick = "addcart('Moby Dick')" class=linktext>Add to Cart</a>
		</p>

	</div>

	<div id="popup3" class="white_content">
		<p align=center><br><br>
		<img src="https://m.media-amazon.com/images/I/61t6c3q2suL.jpg" width=30% /><br>Charlotte's Web<br>Price:$8   Rating: 4.7<br><br>
		<a href = "javascript:void(0)" onclick = "popupclose('3')" class=linktext>Close Window</a>
		<a href = "javascript:void(0)" onclick = "addcart('Charlotte\'s Web')" class=linktext>Add to Cart</a>
		</p>

	</div>

	<div id="popup4" class="white_content">
		<p align=center><br><br>
		<img src="https://m.media-amazon.com/images/I/81EY355krJL._AC_UF1000,1000_QL80_.jpg" width=30% /><br>Hobbit<br>Price:$20   Rating: 5<br><br>
		<a href = "javascript:void(0)" onclick = "popupclose('4')" class=linktext>Close Window</a>
		<a href = "javascript:void(0)" onclick = "addcart('The Hobbit')" class=linktext>Add to Cart</a>
		</p>

	</div>
 
	<div id="popup5" class="white_content">
		<p align=center><br><br>
		<img src="https://m.media-amazon.com/images/I/81gGu7UdZ2L._AC_UF1000,1000_QL80_.jpg" width=30% /><br>Narnia: The Lion the Witch and the Wardrobe<br>Price:$15   Rating: 4.9<br><br>
		<a href = "javascript:void(0)" onclick = "popupclose('5')" class=linktext>Close Window</a>
		<a href = "javascript:void(0)" onclick = "addcart('Narnia: The Lion the Witch and the Wardrobe')" class=linktext>Add to Cart</a>
		</p>

	</div>
	
	<div class="cartImg">
		<img src="https://www.freeiconspng.com/thumbs/grocery-cart-icon/grocery-cart-icon-6.png" width=20% onclick="showcart()"/>
	</div>	
	
	<div id = "popup6" class = "cart_item">
	<label id = "cart"> </label>
	<label id = "item"> </label>
	<a href = "javascript:void(0)" onclick = "popupclose('6')" class=linktext>Close</a>
	</div>
	
	
	
<div id="fade2" class="black_content"></div>
	
	

		</center>
	</body>
</html>



