<!-- Phần header  -->
<header>
    <div class="header_logo">
        <a href="" class="header_logo-link">
            Fullstack
        </a>
    </div>
    <nav>
        <ul class="nav_list mt-3">
            <li class="nav_list-item">
                <a href="" class="nav_list-link">Trang Chủ</a>
            </li>
            <li class="nav_list-item">
                <a href="./assets/src/package.main.html" class="nav_list-link">Khóa Học</a>
            </li>
            <li class="nav_list-item">
                <a href="./assets/src/help.main.html" class="nav_list-link">Hỗ Trợ</a>
            </li>
            <li class="nav_list-item">
                <a href="./assets/src/contact.main.html" class="nav_list-link">Liên Hệ</a>
            </li>
        </ul>
    </nav>
    <div class="login">
        <!-- Button trigger modal -->
        <a type="button" class="cart" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Khóa Học Của Tôi
        </a>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Khóa Học Của Tôi</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="signup" class="btn btn-primary">Sign up</button>
                    </div>
                </div>
            </div>
        </div>
        <a type="button" class="cart" href="../../product/includes/logout.php">
            Đăng Xuất
        </a>
    </div>


</header>