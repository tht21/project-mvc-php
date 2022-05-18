<?php include('layout/hearder.php');
//print_r($_SESSION['cart']);die();
$carts = (isset($_SESSION['cart'])) ? $_SESSION['cart'] : [];

?>
<form method="post" action=''>
		<section id="cart_items">
		
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
					<li><a href="#">Home</a></li>
					<li class="active">Shopping Cart</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">

							<td class="image">Item</td>
							<td class="description">Ten san pham</td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
							<td class="total"></td>


						</tr>
					</thead>
					<tbody>
						<?php $total = 0 ?>
						<?php foreach ($carts as $key => $order) :
							$total += ($order['price'] *  $order['quantityCart']);
						?>
							<tr>
								<td class="cart_product">
									<a href=""><img src="assets/uploads/<?= $order['image']; ?>" alt="" style="width: 110px; height: 100px;"></a>
								</td>
								<td class="cart_description">
									<h4><a href=""><?= $order['title'] ?></a></h4>
								</td>
								<td class="cart_price">
									<p><?= number_format($order['price']) ?></p>
								</td>
								<td class="cart_quantity">
									<div class="cart_quantity_button">
										<input class="cart_quantity_input" name='quantityCart' value="<?= $order['quantityCart'] ?>" autocomplete="off" size="2">
									</div>
								</td>
								<td class="cart_total">
									<p class="cart_total_price"><?= number_format($order['price'] *  $order['quantityCart']) ?></p>
								</td>
								<td class="cart_delete">
									<a class="cart_quantity_delete" href="index.php?controller=cart&action=delete&id=<?= $order['id'] ?>"><i class="fa fa-times"></i></a>
								</td>
							</tr>
						<?php endforeach; ?>
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td>tong tien</td>
							<td  class="">
								<p class="cart_total_price"><?= number_format($total) ?> VND
								</p>
							</td>
							<td><a type="submit" class="btn btn-default check_out" href="index.php?controller=cart&action=checkout" value="">Đặt hàng<a></td>
						</tr>
					</tbody>


				</table>

			</div>
		</div>
	</section>
	<!--/#cart_items-->

	
</form>
<!--/#do_action-->
<?php include('layout/footer.php') ?>