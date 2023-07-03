<!-- Phần header  -->
<header>
    <div class="header_logo">
        <a href="" class="header_logo-link">
            <img src="./assets/img/logo.png.webp" alt="" class="header_logo-img">
        </a>
    </div>
    <nav>
        <ul class="nav_list mt-3">
            <li class="nav_list-item">
                <a href="" class="nav_list-link">HOME</a>
            </li>
            <li class="nav_list-item">
                <a href="./assets/src/package.main.html" class="nav_list-link">PACKAGES</a>
            </li>
            <li class="nav_list-item">
                <a href="./assets/src/help.main.html" class="nav_list-link">HELP</a>
            </li>
            <li class="nav_list-item">
                <a href="./assets/src/contact.main.html" class="nav_list-link">CONTACT</a>
            </li>
        </ul>
    </nav>
    <div class="login">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Sign Up
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Sign Up</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="POST">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1"
                                    class="form-label font-weight-bolder">Username</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1"
                                    placeholder="Enter your name" name="username">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1"
                                    class="form-label font-weight-bolder">Email</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1"
                                    placeholder="name@example.com" name="email">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1"
                                    class="form-label font-weight-bolder">Password</label>
                                <input type="password" class="form-control" id="exampleFormControlInput1" placeholder=""
                                    name="password_repeat">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label font-weight-bolder">Password
                                    Repeat</label>
                                <input type="password" class="form-control" id="exampleFormControlInput1" placeholder=""
                                    name="password">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="signup" class="btn btn-primary">Sign up</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>