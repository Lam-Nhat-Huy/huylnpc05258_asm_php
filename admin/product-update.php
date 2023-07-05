<?php
include 'includes/header.php';
include '../config/database.php';

?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
                    Chỉnh Sửa Sản Phẩm
                    <a href="./product.php" class="btn btn-danger float-end">Trở Về</a>
                </h4>
            </div>
            <div class="card-body">
                <?php
                $product_id = mysqli_real_escape_string($conn, $_GET['id']);
                $query = "SELECT * FROM products WHERE id = $product_id";
                $sql = mysqli_query($conn, $query);
                if (mysqli_num_rows($sql) > 0) {
                    $product = mysqli_fetch_array($sql);
                ?>
                    <form action="code.php" method="post">
                        <input type="hidden" name="product_id" value="<?= $product['id'] ?>">
                        <form action="code.php" method="post" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="">Name: </label>
                                <input type="text" class="form-control" name="name" value="<?= $product['name'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="">Hình Ảnh: </label>
                                <input type="file" class="form-control" name="image" value="<?= $product['image'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="">Price: </label>
                                <input type="number" class="form-control" name="price" value="<?= $product['price'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="">Description: </label>
                                <input type="text" class="form-control" name="description" value="<?= $product['description'] ?>">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="updateProduct" class="btn btn-primary">Lưu</button>
                            </div>
                        </form>
                    <?php
                }
                    ?>


            </div>
        </div>
    </div>
</div>
<?php include 'includes/footer.php'; ?>