<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Memories Hotdeals</title>
	<script src="static/jquery-3.4.1.slim.min.js"></script>
	<link rel="stylesheet" href="static/bootstrap.min.css">
	<script type="text/javascript" src="static/ea_order.js"></script>
	<script src="static/bootstrap.min.js"></script>
	<link rel="stylesheet" href="static/style.css?v=44">

	<link rel="apple-touch-icon" sizes="57x57" href="static/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="static/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="static/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="static/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="static/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="static/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="static/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="static/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="static/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192" href="static/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="static/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="static/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="static/favicon/favicon-16x16.png">
	<link rel="manifest" href="static/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="static/favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<style>
		td.rimproducts.no-display {
			display: none !important;
		}
		body{
			background-color:#fafafa !important;
		}
	</style>
</head>

<body>
	<form action="" method="post">
		<div class="container-fluid mt-5">
			<div class="row justify-content-center">
				<div class="col-12 col-md-12 col-lg-8 mb-5">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">Pay with

								<select onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
									<option value="usd.html">USD</option>
									<option value="mmk.html">MMK</option>
								</select>
							</h5>

							<table class="table table-sm">
								<thead>
									<tr class="rimproducts">
										<th style="width: 40%" class="rimproducts"><strong> Package Name</strong></th>

										<th style="width: 15%" class="rimproducts"><strong> Single Price</strong></th>
										<th style="width: 12.50%" class="rimproducts"><strong> Quantity</strong></th>
										<th style="width: 20%" class="rimproducts"><strong> Total</strong></th>
									</tr>
								</thead>
								<tr class="categories">
									<td class="categories text-center text-primary" colspan="65">Adults</td>
								</tr>
								<tr class="rimproducts">
									<td class="rimproducts">BAGO YOMA SAFARI [WITH CAR OPTION]</td>
									<td class="rimproducts no-display"><input type="number" name="tax-0"
											readonly="readonly" value="0"
											class="quantity form-control form-control-sm text-center"></td>
									<td class="rimproducts"><input type="number" name="price-0" readonly="readonly"
											value="599" class="quantity form-control form-control-sm text-center"></td>
									<td class="rimproducts"><input type="number" name="quantity-0" onkeyup="getPrice(0)"
											class="quantity form-control form-control-sm text-center"></td>
									<td class="rimproducts"><input type="number" name="total-0" readonly="readonly"
											value="0.00" class="rimtotal form-control form-control-sm text-center"></td>
								</tr>
								<tr class="rimproducts">
									<td class="rimproducts">JOURNEY TO THE VALLEY OF GEMS [WITH CAR OPTION]</td>
									<td class="rimproducts no-display"><input type="number" name="tax-1"
											readonly="readonly" value="0"
											class="quantity form-control form-control-sm text-center"></td>
									<td class="rimproducts"><input type="number" name="price-1" readonly="readonly"
											value="799" class="quantity form-control form-control-sm text-center"></td>
									<td class="rimproducts"><input type="number" name="quantity-1" onkeyup="getPrice(1)"
											class="quantity form-control form-control-sm text-center"></td>
									<td class="rimproducts"><input type="number" name="total-1" readonly="readonly"
											value="0.00" class="rimtotal form-control form-control-sm text-center"></td>
								</tr>

								<tr class="rimproducts">
									<td class="rimproducts">BAGO YOMA SAFARI [WITHOUT CAR OPTION]</td>
									<td class="rimproducts no-display"><input type="number" name="tax-2"
											readonly="readonly" value="0"
											class="quantity form-control form-control-sm text-center"></td>
									<td class="rimproducts"><input type="number" name="price-2" readonly="readonly"
											value="10" class="quantity form-control form-control-sm text-center"></td>
									<td class="rimproducts"><input type="number" name="quantity-2" onkeyup="getPrice(2)"
											class="quantity form-control form-control-sm text-center"></td>
									<td class="rimproducts"><input type="number" name="total-2" readonly="readonly"
											value="0.00" class="rimtotal form-control form-control-sm text-center"></td>
								</tr>
								<tr class="rimproducts">
									<td class="rimproducts">JOURNEY TO THE VALLEY OF GEMS [WITHOUT CAR OPTION]</td>
									<td class="rimproducts no-display"><input type="number" name="tax-3"
											readonly="readonly" value="0"
											class="quantity form-control form-control-sm text-center"></td>
									<td class="rimproducts"><input type="number" name="price-3" readonly="readonly"
											value="10" class="quantity form-control form-control-sm text-center"></td>
									<td class="rimproducts"><input type="number" name="quantity-3" onkeyup="getPrice(3)"
											class="quantity form-control form-control-sm text-center"></td>
									<td class="rimproducts"><input type="number" name="total-3" readonly="readonly"
											value="0.00" class="rimtotal form-control form-control-sm text-center"></td>
								</tr>

								<tr class="rimproducts">
									<td class="rimproducts">LITTLE HOUSE ON THE MOUNTAIN OF HEAVEN</td>
									<td class="rimproducts no-display"><input type="number" name="tax-4"
											readonly="readonly" value="0"
											class="quantity form-control form-control-sm text-center"></td>
									<td class="rimproducts"><input type="number" name="price-4" readonly="readonly"
											value="19.99" class="quantity form-control form-control-sm text-center">
									</td>
									<td class="rimproducts"><input type="number" name="quantity-4" onkeyup="getPrice(4)"
											class="quantity form-control form-control-sm text-center"></td>
									<td class="rimproducts"><input type="number" name="total-4" readonly="readonly"
											value="0.00" class="rimtotal form-control form-control-sm text-center"></td>
								</tr>
								<tr class="categories">
									<td class="categories text-center text-primary" colspan="65">Child</td>
								</tr>

								<tr class="rimproducts">
									<td class="rimproducts">LITTLE HOUSE ON THE MOUNTAIN OF HEAVEN</td>
									<td class="rimproducts no-display"><input type="number" name="tax-5"
											readonly="readonly" value="0"
											class="quantity form-control form-control-sm text-center"></td>
									<td class="rimproducts"><input type="number" name="price-5" readonly="readonly"
											value="39.99" class="quantity form-control form-control-sm text-center">
									</td>
									<td class="rimproducts"><input type="number" name="quantity-5" onkeyup="getPrice(5)"
											class="quantity form-control form-control-sm text-center"></td>
									<td class="rimproducts"><input type="number" name="total-5" readonly="readonly"
											value="0.00" class="rimtotal form-control form-control-sm text-center"></td>
								</tr>

								<tr class="products2">

									<td class="products2">&nbsp;</td>
									<td class="products2">&nbsp;</td>
									<td class="rimproducts"> <strong>Total: </strong></td>
									<td class="rimproducts"><input type="number" name="subtotal" readonly="readonly"
											value="0" class="subtotal form-control form-control-sm text-center"></td>
								</tr>
							</table>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-12 col-lg-4">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">Personal information</h5>

							<div class="form-group">
								<label for="name">Name</label>
								<input type="text" class="form-control" required name="name" id="name"
									placeholder="Please Enter Your Name">
							</div>

							<div class="form-group">
								<label for="email">E-Mail</label>
								<input type="email" class="form-control" required name="email" id="email"
									placeholder="Please Enter Your E-Mail Address">
							</div>


							<div class="form-group">
								<label for="dealer-phone">Phone</label>
								<input type="tel" class="form-control" required name="dealer-phone" id="dealer-phone"
									placeholder="Please Enter Your Phone Number">
							</div>

							<button type="submit" class="btn btn-primary btn-lg btn-block">Continue to payment</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>

</body>

</html>