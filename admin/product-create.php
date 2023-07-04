<?php include 'includes/header.php'; ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
                    Thêm Sản Phẩm
                    <a href="./user.php" class="btn btn-danger float-end">Trở Về</a>
                </h4>
            </div>
            <div class="card-body">
                <!-- thông báo  -->
                <?= alertMessage(); ?>

                <form action="code.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="">Họ Và Tên: </label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="">Giá: </label>
                        <input type="number" class="form-control" name="price">
                    </div>
                    <div class="mb-3">
                        <label for="">Mô Tả: </label>
                        <input type="text" class="form-control" name="description">
                    </div>
                    <div class="mb-3">
                        <button type="submit" name="addProduct" class="btn btn-primary">Thêm</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>