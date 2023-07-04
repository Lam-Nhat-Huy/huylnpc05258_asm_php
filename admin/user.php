<?php include 'includes/header.php'; ?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
                    Danh Sách Người Dùng
                    <a href="./user-create.php" class="btn btn-primary float-end">Thêm Người Dùng</a>
                </h4>
            </div>

            <div class="card-body">
                <!-- thông báo  -->
                <?= alertMessage(); ?>
                <table class="table ">
                    <thead>
                        <tr class="font-weight-bolder">
                            <td>ID</td>
                            <td>Họ Và Tên</td>
                            <td>Email</td>
                            <td>Điện Thoại</td>
                            <td>Vài Trò</td>
                            <td>Chức Năng</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include '../config/database.php';
                        $query = "SELECT * FROM users";
                        $sql = mysqli_query($conn, $query);
                        if (mysqli_num_rows($sql) > 0) {
                            foreach ($sql as $row) {
                        ?>
                                <tr>
                                    <td><?= $row['id'] ?></td>
                                    <td><?= $row['name'] ?></td>
                                    <td><?= $row['email'] ?></td>
                                    <td><?= $row['phone'] ?></td>
                                    <td><?= $row['role'] ?></td>
                                    <td class="d-flex justify-content-evenly">
                                        <a href="./user-update.php?id=<?= $row['id'] ?>" class="btn btn-success btn-sm"><i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <form action="code.php" method="post">
                                            <button type="submit" class="btn btn-danger btn-sm" name="deleteUser" value="<?= $row['id'] ?>"><i class="fas fa-trash-alt"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                        <?php
                            }
                        }

                        ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>
<?php include 'includes/footer.php'; ?>