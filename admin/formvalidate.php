<?php include 'includes/header.php'; ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
                    Đăng Nhập
                    <a href="./user.php" class="btn btn-danger float-end">Trở Về</a>
                </h4>
            </div>
            <div class="card-body">
                <!-- thông báo  -->
                <?= alertMessage(); ?>

                <form action="code.php" method="post">
                    <div class="mb-3">
                        <label for="">Email: </label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="">Password: </label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <div class="mb-3">
                        <button type="submit" name="login" class="btn btn-primary">Đăng Nhập</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>