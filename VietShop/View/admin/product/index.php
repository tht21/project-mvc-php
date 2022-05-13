<?php
include('./View/admin/layout/header.php');
include('./View/admin/layout/sidebar.php');
?>
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">            
            <h4 class="card-title">Danh sách sản phẩm</h4>
            <p class="card-description">
            <div class="row">
              <div class="col-lg-9"> <a class="nav-link" href="index.php?controller=product&action=add">Thêm sản phẩm </a></div>
              <div class="col-lg-3">
                <ul class="navbar-nav ms-auto">
                  <li class="nav-item">
                    <form class="search-form" action="index.php?controller=product&action=search" method="POST">
                      
                      <input type="search"placeholder="Search Here" name="search" title="Search here">
                      <button type="submit" class="btn btn-sm btn-primary">seach</button>
            
            </form>
                  </li>
                </ul> 
              </div>
            </div>
            <?php if (isset($_SESSION['flash_message'])) : ?>
              <?php $message = $_SESSION['flash_message']; ?>
              <?php unset($_SESSION['flash_message']); ?>
              <div class="alert alert-success"><i class="fas fa-check"></i> <?= $message ?></div>
            <?php endif; ?>
            <div class="table-responsive pt-3">
              <table class="table table-bordered border=1" width="500 px">
                <thead align="center" class="strong">
                  <tr>
                    <th> #</th>

                    <th> Image </th>
                    <th>Danh mục sản phẩm</th>
                    <th> Tên sản phẩm </th>
                    <th> Sô lượng </th>
                    <th> Số tiền </th>
                    <th> Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($products as $key =>  $product) : ?>
                    <tr>
                      <td><?= $product->id ?></td>

                      <td>
                        <img src="assets/uploads/<?= $product->image; ?>" alt="" style="width: 90px; height: 88px;">
                      </td>
                      <td><?= $product->name ?></td>
                      <td style="width: 20px;"><?= $product->title ?></td>
                      <td><?= $product->quantity ?></td>
                      <td><?= number_format($product->price) ?></td>
                      <!-- edit&id -->
                      <td>
                        <a href="index.php?controller=product&action=delete&id=<?= $product->id ?>" onclick="return confirm ('Bạn có chắc muốn xóa <?= $product->title ?> không')" class="btn btn-primary"><i class="mdi mdi-delete-forever"></i></a>
                        <a class="btn btn-primary" href="index.php?controller=product&action=edit&id=<?= $product->id ?>"><i class="mdi mdi-credit-card"></i></a>
                      </td>
                    </tr>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>

          </div>
        </div>
      </div>
      <?php include './View/admin/layout/footer.php' ?>