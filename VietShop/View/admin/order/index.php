<?php include('./View/admin/layout/header.php') ?>
<?php include('./View/admin/layout/sidebar.php') ?>
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Danh sách dat hang </h4>
            <p class="card-description">
            <div class="row">
              <div class="col-lg-9"></div>
              <div class="col-lg-3">
                <ul class="navbar-nav ms-auto">
                  <li class="nav-item">
                    <form class="search-form" action="index.php?controller=order&action=search" method="POST">
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
                    <th> Tên người  đặt hàng</th>
                  
                    <th> Sô lượng </th>
                    <th>tong  tiền </th>
                    <th> Action</th>

                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($order as $key =>  $order) : ?>
                    <tr>
                      <td><?= ++$key ?></td>
                      <td><?= $order->title?></td>                  
                      <td><?= $order->fullname ?></td>
                      <td><?= $order->quantity ?></td>
        
                    
                      <!-- edit&id -->
                      <td>
                        
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