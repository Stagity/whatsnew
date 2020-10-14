<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Memories Hotdeals</title>
	<script src="static/jquery-3.4.1.slim.min.js"></script>
	<link rel="stylesheet" href="static/bootstrap.min.css">
	<script type="text/javascript" src="static/mmk_order.js"></script>
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
		.custom-bg {
			backgroud-image
		}
		body {
    background-color: #fafafa !important;
}
	</style>
	
</head>

<body>

<div class="pt-4">
<img src="https://memories-travel.com/wp-content/uploads/2019/08/MT-Logo-copy.png" width="100px" class="rounded mx-auto d-block" alt="...">

	</div>

	<form  method="post" action="checkout.php">
		

		<div class="container-fluid mt-5">
			<div class="row justify-content-center">
				<div class="col-12 col-md-12 col-lg-8 mb-5">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">Pay with

								<select onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
									<option value="mmk.php">MMK</option>
									<option value="usd.php">USD</option>
									
								</select>
							</h5>

							<table class="table table-sm">
								<thead>
									<tr class="rimproducts">
										<th style="width: 40%" class="rimproducts"><strong> Package Name</strong></th>

										<th style="width: 15%" class="rimproducts"><strong> Price</strong></th>
										<th style="width: 12.50%" class="rimproducts"><strong> Quantity</strong></th>
										<th style="width: 20%" class="rimproducts"><strong> Total</strong></th>
									</tr>
								</thead>
								<tr class="categories">
									<td class="categories text-center text-primary" colspan="65">Adult</td>
								</tr>

								<tr class="rimproducts">
									<td class="rimproducts">
									<img src="https://memoriesgroup.com/wp-content/uploads/2020/08/PalaungCabin_Cover.png" width="100px" height="100px" alt="..." class="img-thumbnail">		
									Charming Palaung Cabin (Per Cabin)</td>
									<td class="rimproducts no-display"><input type="number" name="tax-4"
											readonly="readonly" value="0"
											class="quantity form-control form-control-sm text-center"></td>
									<td class="rimproducts"><input type="number" name="price-4" readonly="readonly"
											value="840000" class="quantity form-control form-control-sm text-center">
									</td>
									<td class="rimproducts"><input type="number" name="quantity-4" onkeyup="getPrice(4)"
											class="quantity form-control form-control-sm text-center"></td>
									<td class="rimproducts"><input type="number" name="total-4" readonly="readonly"
											value="0.00" class="rimtotal form-control form-control-sm text-center"></td>
								</tr>

								<tr class="rimproducts">
									<td class="rimproducts">
									<img src="https://memoriesgroup.com/wp-content/uploads/2020/08/RubyLand_Cover_withCar.png" width="100px" height="100px" alt="..." class="img-thumbnail">		
									Enchanting Ruby Land (With Car & Driver)</td>
									<td class="rimproducts no-display"><input type="number" name="tax-2"
											readonly="readonly" value="0"
											class="quantity form-control form-control-sm text-center"></td>
									<td class="rimproducts"><input type="number" name="price-2" readonly="readonly"
											value="322000" class="quantity form-control form-control-sm text-center"></td>
									<td class="rimproducts"><input type="number" name="quantity-2" onkeyup="getPrice(2)"
											class="quantity form-control form-control-sm text-center"></td>
									<td class="rimproducts"><input type="number" name="total-2" readonly="readonly"
											value="0.00" class="rimtotal form-control form-control-sm text-center"></td>
								</tr>

								<tr class="rimproducts">
									<td class="rimproducts">
									<img src="https://memoriesgroup.com/wp-content/uploads/2020/08/YomaAdventure_Cover_withCar.png" width="100px" height="100px" alt="..." class="img-thumbnail">		
									Thrilling Yoma Adventure (With Car & Driver)</td>
									<td class="rimproducts no-display"><input type="number" name="tax-0"
											readonly="readonly" value="0"
											class="quantity form-control form-control-sm text-center"></td>
									<td class="rimproducts"><input type="number" name="price-0" readonly="readonly"
											value="322000" class="quantity form-control form-control-sm text-center"></td>
									<td class="rimproducts"><input type="number" name="quantity-0" onkeyup="getPrice(0)"
											class="quantity form-control form-control-sm text-center"></td>
									<td class="rimproducts"><input type="number" name="total-0" readonly="readonly"
											value="0.00" class="rimtotal form-control form-control-sm text-center"></td>
								</tr>

								

								<tr class="rimproducts">
									<td class="rimproducts">
									<img src="https://memoriesgroup.com/wp-content/uploads/2020/08/RubyLand_Cover_withoutCar.png" width="100px" height="100px" alt="..." class="img-thumbnail">		
									Enchanting Ruby Land (Without Car & Driver)</td>
									<td class="rimproducts no-display"><input type="number" name="tax-3"
											readonly="readonly" value="0"
											class="quantity form-control form-control-sm text-center"></td>
									<td class="rimproducts"><input type="number" name="price-3" readonly="readonly"
											value="257600" class="quantity form-control form-control-sm text-center"></td>
									<td class="rimproducts"><input type="number" name="quantity-3" onkeyup="getPrice(3)"
											class="quantity form-control form-control-sm text-center"></td>
									<td class="rimproducts"><input type="number" name="total-3" readonly="readonly"
											value="0.00" class="rimtotal form-control form-control-sm text-center"></td>
								</tr>

								<tr class="rimproducts">
									<td class="rimproducts">
									<img src="https://memoriesgroup.com/wp-content/uploads/2020/08/YomaAdventure_Cover_withoutCar.png" width="100px" height="100px" alt="..." class="img-thumbnail">		
									Thrilling Yoma Adventure (Without Car & Driver)</td>
									<td class="rimproducts no-display"><input type="number" name="tax-1"
											readonly="readonly" value="0"
											class="quantity form-control form-control-sm text-center"></td>
									<td class="rimproducts"><input type="number" name="price-1" readonly="readonly"
											value="225400" class="quantity form-control form-control-sm text-center"></td>
									<td class="rimproducts"><input type="number" name="quantity-1" onkeyup="getPrice(1)"
											class="quantity form-control form-control-sm text-center"></td>
									<td class="rimproducts"><input type="number" name="total-1" readonly="readonly"
											value="0.00" class="rimtotal form-control form-control-sm text-center"></td>
								</tr>

								
								
								<tr class="categories">
									<td class="categories text-center text-primary" colspan="65">Child</td>
								</tr>

								<tr class="rimproducts">
									<td class="rimproducts">
									<img src="https://memoriesgroup.com/wp-content/uploads/2020/08/Child-Packages.png" width="100px" height="100px" alt="..." class="img-thumbnail">		
									Charming Palaung Cabin or Enchanting Ruby Land Child (Age 3-10) Price</td>
									<td class="rimproducts no-display"><input type="number" name="tax-5"
											readonly="readonly" value="0"
											class="quantity form-control form-control-sm text-center"></td>
									<td class="rimproducts"><input type="number" name="price-5" readonly="readonly"
											value="225400" class="quantity form-control form-control-sm text-center">
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
								<label for="name">Full name</label>
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

							<input type="hidden" name="saved" value="yes">
             			 	<input type="hidden" name="form_name" value="MT Whatsnew">

							<button type="submit" name="formSubmit" value="Submit" class="btn btn-primary btn-lg btn-block">Continue to payment</button>
						</div>
					</div>
					<div class="pt-4"> </div>
					<div class="card custom-edit">
						<div class="card-body">


							<div class="text-center">
								<h4>Need a hand?</h4>
								<p>We're available</p>
								<p><strong><span>Mon - Fri, 9am to 5:30pm (<a
												href="https://www.timeanddate.com/worldclock/myanmar/yangon"
												target="_blank">MM time</a>)</span></strong></p>
								<ul class="">
									<a href="tel:+95(9)534-2939">+95 (9) 534-2939</a><br>
									<a href="tel:+95(9)25405-2298">+95 (9) 25405-2298</a><br>
									<a href="mailto:whatsnew@memories-travel.com"><i
												class="icon icon-envelop5"></i>whatsnew@memories-travel.com</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>

</body>

</html>