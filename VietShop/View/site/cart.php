<?php include('layout/hearder.php');?>


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
							<td class="description"></td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						
						<tr>
							<td class="cart_product">
								<a href=""><img src="assets/uploads/<?= $addcarts->image; ?>" alt="" style="width: 82px; height: 80px;"></a>
							</td>
							<td class="cart_description">
								<h4><a href=""><?= $addcarts->title ?></a></h4>
							</td>
							<td class="cart_price">
								<p><?=number_format($addcarts->price) ?></p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">									
									<input class="cart_quantity_input" type="number" name="quantity" value="1" autocomplete="off" size="2">					
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">$59</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
							</td>
						</tr>
					
					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->

	<section id="do_action">
		<div class="container">
			<div class="heading">
				<h3>What would you like to do next?</h3>
				<p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
			</div>
			<div class="row">			
				<div class="col-sm-6">
					<div class="total_area">
						<ul>
							<li><?=number_format($addcarts->price) ?></li>
							<li></li>
							<li>Shipping Cost <span>Free</span></li>
							<li>Total <span>$61</span></li>
						</ul>
							<a class="btn btn-default update" href="">Update</a>
							<a class="btn btn-default check_out" href="">Check Out</a>
					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->
    <?php include ('layout/footer.php') ?>