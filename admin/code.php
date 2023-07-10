<?php
include '../config/database.php';
include '../config/function.php';


// Thêm người dùng

if (isset($_POST['saveUser'])) {
    $name = validate($_POST['name']);
    $phone = validate($_POST['phone']);
    $email = validate($_POST['email']);
    $password = validate($_POST['password']);
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $is_ban = validate($_POST['is_ban']) == true ? 1 : 0;
    $role = validate($_POST['role']);

    if ($name != '' && $email != '' && $phone != '' && $password != '') {
        $query = "INSERT INTO users (name, phone, email, password, is_ban, role) VALUES ('$name','$phone', '$email','$hash', '$is_ban','$role')";
        $sql = mysqli_query($conn, $query);
        if ($sql) {
            redirect('user.php', 'Thêm thông tin thành công');
        } else {
            redirect('user-create.php', 'Lỗi');
        }
    } else {
        redirect('user-create.php', 'Vui lòng nhập tất cả trường');
    }
}


// Thay đổi thông tin user

if (isset($_POST['updateUser'])) {
    $user_id = validate($_POST['user_id']);
    $name = validate($_POST['name']);
    $phone = validate($_POST['phone']);
    $email = validate($_POST['email']);
    $role = validate($_POST['role']);
    $query = "UPDATE users SET name='$name', phone='$phone', email='$email', role='$role' WHERE id= $user_id ";
    $sql = mysqli_query($conn, $query);
    if ($sql) {
        redirect('user.php', 'Chỉnh sửa thông tin thành công');
    } else {
        redirect('user.php', 'Lỗi');
    }
}

// Xóa dữ liệu người dùng

if (isset($_POST['deleteUser'])) {
    $user_id = mysqli_real_escape_string($conn, $_POST['deleteUser']);
    $query = "DELETE FROM users WHERE id = $user_id";
    $sql = mysqli_query($conn, $query);
    if ($sql) {
        redirect('user.php', 'Xóa người dùng thành công');
    } else {
        redirect('user.php', 'Lỗi');
    }
}

// Chức năng đăng nhập
if (isset($_POST['login'])) {
    $email = validate($_POST['email']);
    $password = validate($_POST['password']);
    $query = "SELECT * FROM users WHERE email='$email'";
    $reusult = mysqli_query($conn, $query);
    $user = mysqli_fetch_array($reusult, MYSQLI_ASSOC);
    if ($user) {
        if (password_verify($password, $user['password'])) {
            header('Location: ../../../product/index.php');
            die();
        }
    } else {
        header('Location: login.php');
        redirect('login.php', 'Tên Tài Khoản Hoặc Mật Khẩu Không Đúng');
    }
}


// Thêm khóa học

if (isset($_POST['addProduct'])) {
    $name = validate($_POST['name']);

    $image = validate($_FILES['image']['name']);
    $image_tmp = validate($_FILES['image']['tmp_name']);

    $price = validate($_POST['price']);
    $description = validate($_POST['description']);
    $query = "INSERT INTO products (name, image, price, description) VALUES ('$name', '$image', '$price', '$description')";
    $sql = mysqli_query($conn, $query);

    move_uploaded_file($image_tmp, './assets/img' . $image);


    if ($sql) {
        redirect('product.php', 'Sản Phẩm Đã Được Thêm Thành Công');
    }
}


// Chỉnh sửa khóa học

if (isset($_POST['updateProduct'])) {
    $product_id = validate($_POST['product_id']);
    $name = validate($_POST['name']);
    $image = validate($_POST['image']);
    $price = validate($_POST['price']);
    $description = validate($_POST['description']);
    $query = "UPDATE products SET name='$name',image='$image', price='$price', description='$description'  WHERE id= $product_id ";
    $sql = mysqli_query($conn, $query);

    if ($sql) {
        redirect('product.php', 'Sản Phẩm Đã Được Chỉnh Sửa Thành Công');
    }
}

// Xóa khóa học

if (isset($_POST['deleteProduct'])) {
    $product_id = mysqli_real_escape_string($conn, $_POST['deleteProduct']);
    $query = "DELETE FROM products WHERE id = $product_id";
    $sql = mysqli_query($conn, $query);
    if ($sql) {
        redirect('product.php', 'Khóa học đã được xóa thành công');
    } else {
        redirect('product.php', 'Lỗi');
    }
}
