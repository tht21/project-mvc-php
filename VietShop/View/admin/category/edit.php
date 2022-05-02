<?php include('./View/admin/layout/header.php') ?>
<?php include('./View/admin/layout/sidebar.php') ?>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Sửa  danh mục</h4>
                        <form class="forms-sample" method="POST"action="index.php?controller=category&action=edit&id=<?=$category->id ?>">
                            <div class="form-group">
                                <label for="exampleInputName1">Tên danh mục </label>
                                <input name="name" type="text" class="form-control" id="exampleInputName1" value='<?=$category->name ?>'>
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