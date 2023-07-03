<?php include 'includes/header.php'; ?>

<?php
require '../config/database.php';
$query = 'SELECT * FROM users';
$sql = mysqli_query($conn, $query);
if (mysqli_num_rows($sql) > 0) {
    $countUsers = mysqli_num_rows($sql);
}
?>

<div class="row">
    <div class="card shadow-lg">
        <div class="card-header">
            <h4>Bảng Điều Khiển</h4>
        </div>
        <div class="card-body">
            <h5 class="card-title">Tài khoản hiện có là: </h5>
            <p class="card-text">
            <h5><strong><?php echo $countUsers; ?></strong></h5>
            </p>
            <a href="./user.php " class="btn btn-primary">Kiểm tra</a>
        </div>
    </div>
</div>

<div class="row mt-5">
    <div class="card shadow-lg">
        <div class="card-header">
            <h4>Bảng Điều Khiển</h4>
        </div>
        <div class="card-body">
            <h5 class="card-title">Số lượng sản phẩm: </h5>
            <p class="card-text">
            <h5><strong><?php echo $countUsers;  ?></strong></h5>
            </p>
            <a href="./user.php " class="btn btn-primary">Kiểm tra</a>
        </div>
    </div>
</div>
<?php include 'includes/footer.php'; ?>