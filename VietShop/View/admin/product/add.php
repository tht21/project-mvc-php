<?php include('./View/admin/layout/header.php') ?>
<?php include('./View/admin/layout/sidebar.php') ?>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Thêm mới sản phẩm</h4>
                        <form class="forms-sample" action="" method="POST">
                            <div class="form-group">
                                <label for="exampleInputName1">Tên sản phẩm</label>
                                <input name="title" type="text" class="form-control" id="exampleInputName1">
                            </div>

                            <div class="form-group">
                                <label>Danh muc sản phẩm</label>
                                <select name="category_id" class="js-example-basic-single w-100">                            
                                    <?php foreach ($categorys as  $category) : ?>
                                        <option value="<?= $category->id ?>"> <?= $category->name ?> </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleTextarea1">Mô tả sản phẩm</label>
                                <textarea name="description" class="form-control" id="exampleTextarea1" rows="4"></textarea>
                            </div>
                            <div class="form-group">
                                <label>File ảnh</label>
                                <input type="file" name="image" class="form-control ">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword4">Số Lượng</label>
                                <input type="text" name="quantity" class="form-control" id="exampleInputPassword4">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Số tiền</label>
                                <input type="text" name="price" class="form-control" id="exampleInputEmail3">
                            </div>
                            <button type="submit" class="btn btn-primary me-2">Submit</button>
                            <button class="btn btn-light">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>

            <?php include './View/admin/layout/footer.php' ?>

        </div>
    </div>