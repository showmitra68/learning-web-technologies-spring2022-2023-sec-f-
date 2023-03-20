<html>
<head>
	<title>Inventory Management</title>
</head>
<body>
	<h1>Inventory Management</h1>

	<table border="1">
		<thead>
			<tr>
				<th>Item</th>
				<th>Quantity</th>
				<th>Update</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Burgers</td>
				<td>50</td>
				<td>
					<form>
						<label for="burgers-quantity">New Quantity:</label>
						<input type="number" id="burgers-quantity" name="burgers-quantity" min="0">
						<button type="submit">Update</button>
					</form>
				</td>
			</tr>
			<tr>
				<td>Pizzas</td>
				<td>25</td>
				<td>
					<form>
						<label for="pizzas-quantity">New Quantity:</label>
						<input type="number" id="pizzas-quantity" name="pizzas-quantity" min="0">
						<button type="submit">Update</button>
					</form>
				</td>
			</tr>
			<tr>
				<td>Drinks</td>
				<td>100</td>
				<td>
					<form>
						<label for="drinks-quantity">New Quantity:</label>
						<input type="number" id="drinks-quantity" name="drinks-quantity" min="0">
						<button type="submit">Update</button>
					</form>
				</td>
			</tr>
		</tbody>
	</table>
</body>
</html>