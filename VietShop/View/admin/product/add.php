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
                                <input name="title" type="text" class="form-control" id="exampleInputName1" value="<?= (isset($requests['title'])) ? $requests['title'] : "";  ?>">
                                <small class="form-text text-danger">                                 
                                    <?php
                                     echo (isset($errors['title'])) ? $errors['title'] : ""; 
                                    ?>
                                </small>
                            </div>

                            <div class="form-group">
                                <label>Danh muc sản phẩm</label>
                                <select name="category_id" class="js-example-basic-single w-100">
                                    <?php foreach ($categorys as  $category) : ?>
                                        <option value="<?= $category->id ?>"> <?= $category->name ?> </option>
                                    <?php endforeach; ?>
                                </select>
                                <small class="form-text text-danger">
                                    <?php echo (isset($errors['category_id'])) ? $errors['category_id'] : ""; ?>
                                </small>
                            </div>
                            <div class="form-group">
                                <label for="exampleTextarea1">Mô tả sản phẩm</label>
                                <input name="description" class="form-control" id="exampleTextarea1" rows="4" value="<?= (isset($requests['description'])) ? $requests['description'] : "";  ?>"></input>
                                <small class="form-text text-danger">
                                    <?php echo (isset($errors['description'])) ? $errors['description'] : ""; ?>
                                </small>
                            </div>
                            <div class="form-group">
                                <label>File ảnh</label>
                                <input type="file" name="image" class="form-control "value="<?= (isset($requests['image'])) ? $requests['image'] : "";  ?>">
                                <small class="form-text text-danger">
                                    <?php echo (isset($errors['image'])) ? $errors['image'] : ""; ?>
                                </small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword4">Số Lượng</label>
                                <input type="text" name="quantity" class="form-control" id="exampleInputPassword4"value="<?= (isset($requests['quantity'])) ? $requests['quantity'] : "";  ?>">
                                <small class="form-text text-danger">
                                    <?php echo (isset($errors['quantity'])) ? $errors['quantity'] : ""; ?>
                                </small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Số tiền</label>
                                <input type="text" name="price" class="form-control" id="exampleInputEmail3"value="<?= (isset($requests['price'])) ? $requests['price'] : "";  ?>">
                                <small class="form-text text-danger">
                                    <?php echo (isset($errors['price'])) ? $errors['price'] : ""; ?>
                                </small>
                            </div>
                            <button type="submit" class="btn btn-primary me-2">Submit</button>
                            <button class="btn btn-light"onclick="window.history.go(-1); return false;">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>

            <?php include './View/admin/layout/footer.php' ?>

        </div>
    </div>