<?php include('./View/admin/layout/header.php') ?>
<?php include('./View/admin/layout/sidebar.php') ?>
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
                      <i class="icon-search"></i>
                      <input type="search" placeholder="Search Here" name="search" title="Search here">
                      <button type="submit">seach</button>
                    </form>
                  </li>
                </ul>
              </div>
            </div>

            <div class="table-responsive pt-3">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th> ID</th>
                    <th> Tên sản phẩm </th>
                    <th>Danh mục sản phẩm</th>
                    <th> Mô tả sản phẩm</th>
                    <th> Image </th>
                    <th> Sô lượng </th>
                    <th> Số tiền </th>
                    <th> Action</th>
                  
                  </tr>
                </thead>
                <tbody>
                 
                    <tr>
                    <?php foreach ($productSearch as $product) : ?>
                      <td><?= $product->id ?></td>
                      <td><?= $product->title ?></td>

                      <td><?= $product->category_id ?></td>
                      <td><?= $product->description ?></td>
                      <td><?= $product->image ?></td>
                      <td><?= $product->quantity ?></td>
                      <td><?= $product->price ?></td>
                      <!-- edit&id -->
                      <td>
                         <a href="index.php?controller=product&action=edit&id=<?= $product->id ?>">sua</a>
                          <a href="index.php?controller=product&action=delete&id=<?= $product->id ?>">xoa</a>
                      </td>
                      
                  <?php endforeach; ?>
                    </tr>
              
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <?php include './View/admin/layout/footer.php' ?>