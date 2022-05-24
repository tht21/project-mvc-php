<?php include('layout/hearder.php');
// echo '<pre>';
// print_r($_SESSION['user']);
// die();
?>

<section id="slider">
	<!--slider-->
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div id="slider-carousel" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
						<li data-target="#slider-carousel" data-slide-to="1"></li>
						<li data-target="#slider-carousel" data-slide-to="2"></li>
					</ol>

					<div class="carousel-inner">
						<d iv class="item active">
							<div class="col-sm-6">
								<h1><span>V</span>-SHOPPER</h1>
								<h2>Free E-Commerce Template</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
								<button type="button" class="btn btn-default get">Get it now</button>
							</div>
							<div class="col-sm-6">
								<img src="assets/site/images/home/girl1.jpg" class="girl img-responsive" alt="" />
								<img src="assets/site/images/home/pricing.png" class="pricing" alt="" />
							</div>
						</d>
						<div class="item">
							<div class="col-sm-6">
								<h1><span>V</span>-SHOPPER</h1>
								<h2>100% Responsive Design</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
								<button type="button" class="btn btn-default get">Get it now</button>
							</div>
							<div class="col-sm-6">
								<img src=".assets/site/images/home/girl2.jpg" class="girl img-responsive" alt="" />
								<img src="assets/site/images/home/pricing.png" class="pricing" alt="" />
							</div>
						</div>

						<div class="item">
							<div class="col-sm-6">
								<h1><span>V</span>-SHOPPER</h1>
								<h2>Free Ecommerce Template</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
								<button type="button" class="btn btn-default get">Get it now</button>
							</div>
							<div class="col-sm-6">
								<img src="assets/site/images/home/girl3.jpg" class="girl img-responsive" alt="" />
								<img src="assets/site/images/home/pricing.png" class="pricing" alt="" />
							</div>
						</div>

					</div>

					<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
						<i class="fa fa-angle-left"></i>
					</a>
					<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
						<i class="fa fa-angle-right"></i>
					</a>
				</div>

			</div>
		</div>
	</div>
</section>
<!--/slider-->

<section>
	<div class="container">
		<div class="row">
			<div class="col-sm-3">
				<div class="left-sidebar">
					<h2>Category</h2>
					<div class="panel-group category-products" id="accordian">
						<!--category-productsr-->
						<?php foreach ($categorys as $key => $category) : ?>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="#"><?= $category->name ?></a></h4>
								</div>
							</div>
						<?php endforeach; ?>
					</div>
					<!--/category-products-->



				</div>
			</div>

			<div class="col-sm-9 padding-right">
				<div id='myTable div' class="features_items">
					<!--features_items-->
					<h2 class="title text-center">Features Items</h2>
					<?php foreach ($products as $key =>  $product) : ?>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="product info text-center">
										<img src="assets/uploads/<?= $product->image; ?>" alt="" style="width: 130px; height:180px" />
										<h2><?= number_format($product->price); ?>đ</h2>
										<p><?= $product->title; ?></p>
										<a href="index.php?controller=cart&action=add&id=<?= $product->id ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
									</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="index.php?controller=details&action=index&id=<?= $product->id ?>"><i class="fa fa-plus-square"></i>Xem chi tiết sản phẩm</a></li>

									</ul>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
				<!--features_items-->
			</div>
			<div class="row" style="text-align: right;">
				<ul class="pagination">
					<?php
					if ($current_page > 1 && $total_page > 1) {
						
						echo '<li><a href="index.php?controller=site&action=index&page=' . ($current_page - 1) . '">&laquo</a> </li> ';
					}

					// Lặp khoảng giữa
					for ($i = 1; $i <= $total_page; $i++) {
						// Nếu là trang hiện tại thì hiển thị thẻ span
						// ngược lại hiển thị thẻ a
						if ($i == $current_page) {
							echo '<li><a href="index.php?controller=site&action=index&page=' . $i . '">' . $i . '</a> </li> ';
						} else {
							echo '<li><a href="index.php?controller=site&action=index&page=' . $i . '">' . $i . '</a> </li> ';
						}
					}

					// nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
					if ($current_page < $total_page && $total_page > 1) {
						echo '<li><a href="index.php?controller=site&action=index&page=' . ($current_page + 1) . '">&raquo</a></li>  ';
					} ?>
					</ul>
					</div>
				
			</div>
		</div>
</section>

<?php include('layout/footer.php') ?>