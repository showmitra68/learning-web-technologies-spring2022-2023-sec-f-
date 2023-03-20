<html>
<head>
	<title>Manage Item Offer</title>
</head>
<body>
	<fieldset>
	<legend><h2>Manage Item Offer</h2></legend>

	<table border="1">
		<thead>
			<tr>
				<th>Item</th>
				<th>Price</th>
				<th>Offer</th>
				<th>Update</th>
				<th>Offer Start</th>
				<th>Offer End</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Burgers</td>
				<td>500 Taka</td>
				<td>Buy one get one free</td>
				<td>
					<form>
						<label for="burgers-price">New Price:</label>
						<input type="number" id="burgers-price" name="burgers-price"><br>
						<label for="burgers-offer">New Offer:</label>
						<input type="text" id="burgers-offer" name="burgers-offer">
						<button type="submit">Update</button>
					</form>
				</td>
				<td>
					<input type="date" name="">
				</td>
				<td>
					<input type="date" name="">
				</td>
			</tr>
			<tr>
				<td>Pizzas</td>
				<td>800 Taka</td>
				<td>50% off on 2nd pizza</td>
				<td>
					<form>
						<label for="pizzas-price">New Price:</label>
						<input type="number" id="pizzas-price" name="pizzas-price"><br>
						<label for="pizzas-offer">New Offer:</label>
						<input type="text" id="pizzas-offer" name="pizzas-offer">
						<button type="submit">Update</button>
					</form>
				</td>
				<td>
					<input type="date" name="">
				</td>
				<td>
					<input type="date" name="">
				</td>
			</tr>
			<tr>
				<td>Drinks</td>
				<td>150 Taka</td>
				<td>None</td>
				<td>
					<form>
						<label for="drinks-price">New Price:</label>
						<input type="number" id="drinks-price" name="drinks-price"><br>
						<label for="drinks-offer">New Offer:</label>
						<input type="text" id="drinks-offer" name="drinks-offer">
						<button type="submit">Update</button>
					</form>
				</td>
				<td>
					<input type="date" name="">
				</td>
				<td>
					<input type="date" name="">
				</td>
			</tr>
		</tbody>
	</table>
	</fieldset>
</body>
</html>