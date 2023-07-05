<?php include 'includes/header.php'; ?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
                    Danh Sách Sản Phẩm
                    <a href="./product-create.php" class="btn btn-primary float-end">Thêm Sản Phẩm</a>
                </h4>
            </div>

            <div class="card-body">
                <!-- thông báo  -->
                <?= alertMessage(); ?>
                <table class="table ">
                    <thead>
                        <tr class="font-weight-bolder">
                            <td>ID</td>
                            <td>Tên Khóa Học</td>
                            <td>Hình Ảnh</td>
                            <td>Giá</td>
                            <td>Mô Tả</td>
                            <td>Tùy Chọn</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include '../config/database.php';
                        $query = "SELECT * FROM products";
                        $sql = mysqli_query($conn, $query);

                        while ($row = mysqli_fetch_array($sql)) {
                        ?>
                            <tr>
                                <td><?= $row['id'] ?></td>
                                <td><?= $row['name'] ?></td>
                                <td>
                                    <img src="./assets/img/<?= $row['image'] ?>" alt="" width="100px">
                                </td>
                                <td><?= $row['price'] ?></td>
                                <td><?= $row['description'] ?></td>
                                <td class="d-flex justify-content-evenly">
                                    <a href="./product-update.php?id=<?= $row['id'] ?>" class="btn btn-success btn-sm"><i class="fas fa-pencil-alt"></i>
                                    </a>
                                    <form action="code.php" method="post">
                                        <button type="submit" class="btn btn-danger btn-sm" name="deleteProduct" value="<?= $row['id'] ?>"><i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        <?php
                        }

                        ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>
<?php include 'includes/footer.php'; ?>