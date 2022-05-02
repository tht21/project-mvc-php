<?php include('./View/admin/layout/header.php') ?>
<?php include('./View/admin/layout/sidebar.php') ?>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Thêm mới danh mục</h4>
                        <form class="forms-sample" action=""method="POST">
                            <div class="form-group">
                                <label for="exampleInputName1">Tên danh mục </label>
                                <input name="name" type="text" class="form-control" id="exampleInputName1">
                            </div>                 
                            <button type="submit" class="btn btn-primary me-2">Submit</button>
                            <button class="btn btn-light">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include './View/admin/layout/footer.php' ?>