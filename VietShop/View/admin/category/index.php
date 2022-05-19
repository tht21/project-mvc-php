<?php include('./View/admin/layout/header.php') ?>
<?php include('./View/admin/layout/sidebar.php') ?>
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Danh sách danh mục</h4>
            <div class="row">
              <div class="col-lg-9"> <a class="nav-link" href="index.php?controller=category&action=add">Thêm danh mục </a></div>
              <div class="col-lg-3">
                <ul class="navbar-nav ms-auto">
                  <li class="nav-item">
                    <form class="search-form" action="#">
                      
                      <input type="search" id="myInput" class="form-control" placeholder="Search Here" title="Search here">
                    </form>

                  </li>
                </ul>
              </div>
            </div>
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th> ID</th>
                  <th> Tên danh mục </th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody id="myTable">
                <?php foreach ($category as $key => $category) : ?>
                  <tr>
                    <td><?= $category->id ?></td>
                    <td><?= $category->name ?></td>
                    <!-- edit&id -->
                    <td> <a href="index.php?controller=category&action=edit&id=<?= $category->id ?>" class="btn btn-sm btn-primary"><i class="mdi mdi-delete-forever"></i></a>
                      <a href="index.php?controller=category&action=delete&id=<?= $category->id ?>" onclick=" return confirm ('Bạn có chắc muốn xóa <?= $category->name ?> không')" class="btn btn-sm btn-primary"><i class="mdi mdi-credit-card"></i></a>
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