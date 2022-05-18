<?php include('layout/hearder.php'); ?>
<?php if(isset($_SESSION['user']))
 {
 $_SESSION['user'];
}else{
    header('Location:index.php?controller=user&action=login');
};
?>
<section id="cart_items">
	<div class="container">
		<div class="breadcrumbs">
			<ol class="breadcrumb">
				<li><a href="#">Home</a></li>
				<li class="active">Check out</li>
			</ol>
		</div>

		<?php if (isset($_SESSION['flash_message'])) : ?>
              <?php $message = $_SESSION['flash_message']; ?>
              <?php unset($_SESSION['flash_message']); ?>
              <div class="alert alert-success"><i class="fas fa-check"></i> <?= $message ?></div>
            <?php endif; ?>
		<!--/register-req-->

		<div class="shopper-informations">
			<div class="row">
				<div class="col-sm-7 clearfix">
					<div class="bill-to">
						<p>Địa chỉ giao hàng</p>
						<div class="shopper-info">
							<form method='POST'>
								<input type="text" name placeholder="Email*" value="<?= $_SESSION['user']->email ?>">
								<input type="text" placeholder="First Name *" value="<?= $_SESSION['user']->fullname ?>">
								<input type="text" placeholder="phone" value="<?= $_SESSION['user']->phone_number ?>">
								<input type="text" name='address' placeholder="phone" value="<?= $_SESSION['user']->address ?>">
								<textarea name="note" placeholder="Notes about your order, Special Notes for Delivery" rows="16"></textarea>
								<button type="submit" class="btn btn-primary" href="">Đặt hàng</button>
							</form>

						</div>
					</div>
				</div>
				<div class="col-sm-5">
					<div class="bill-to">
						<p>Tóm tắt đơn hàng</p>
						<div class="total_area">
							<ul>
								<?php
								$total = 0;
								foreach ($_SESSION['cart'] as $key => $value) :
								$total += ($value['price'] *  $value['quantityCart']);
								?>
									<li>Mã hàng : <?= $value['id'] ?> <span><?= $value['price'] ?></span></li>
								<?php endforeach; ?>
								<li>Total <span><?= number_format($total) ?> VND</span></li>
							</ul>
				
						
						</div>
					</div>

				</div>
				<div class="col-sm-4">
				</div>
			</div>
		</div>
		<div> </div><br>

	</div>
</section>
<!--/#cart_items-->
<?php include('layout/footer.php');
