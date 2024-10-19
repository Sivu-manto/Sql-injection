<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Product Search</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<div class="container">
		<h1>Search for a grocery item</h1>
		<form action="index.php" method="post" class="search-form">
			<label for="product_name">Product Name:</label>
			<input type="text" id="product_name" name="product_name" required placeholder="Ghee,Sugar,Salt">
			<input type="submit" value="search">
		</form>
	</div>
	<?php
// Include the database connection
include 'C:\xampp\htdocs\sna-assign\db_connection.php';

	// Check if the form is submitted
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	    // Get user input from the form
	    $product_name = $_POST['product_name'];

	    // Vulnerable SQL query construction without using prepared statements (for demonstration)
	    $query = "SELECT * FROM products WHERE product_name = '$product_name'";

	    // Execute the query
	    $result = $conn->query($query);

	    // Check if any product was found
	    if ($result->num_rows > 0) {
	        echo "<h2>Search Results</h2>";
	        echo "<table class='product-table'>";
	        echo "<thead><tr><th>Product Name</th><th>Category</th><th>Price (₹)</th><th>Quantity</th><th>Expiry Date</th></tr></thead>";
	        echo "<tbody>";

	        // Output product details in table rows
	        while ($row = $result->fetch_assoc()) {
	            echo "<tr><td>" . $row["product_name"] . "</td>";
	            echo "<td>" . $row["category"] . "</td>";
	            echo "<td>" . $row["price"] . "</td>";
	            echo "<td>" . $row["quantity"] . "</td>";
	            echo "<td>" . $row["ExpiryDate"] . "</td></tr>";
	        }

	        echo "</tbody></table>";
	    } else {
	        // Only display this message after a search is performed and no results are found
	        echo "<p>No product found with the name: $product_name</p>";
	    }
	}

	// Close the database connection
	$conn->close();
	?>
</body>

</html>