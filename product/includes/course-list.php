<div class="container">
    <div class="row">
        <?php
        if (isset($_POST['saveCourse'])) {
            $product_name = validate($_POST['product_name']);
            $product_image = validate($_POST['product_image']);
            $product_description = validate($_POST['product_description']);

            $select_cart = mysqli_query($conn, "INSERT INTO `cart` (name, image, description) VALUES ('$product_name','$product_image', '$product_description')")  or die('query failed');
        }
        ?>

        <?php
        $query = 'SELECT * FROM products';
        $sql = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_array($sql)) {
        ?>
            <div class="col-sm-3 p-3 ">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <form action="" method="post">
                            <h5 class="card-title"><?= $row['name'] ?></h5>
                            <img class="card-img-top mb-2" src="./assets/img/<?= $row['image'] ?>" alt="Card image cap">
                            <p class="card-text"><?= $row['description'] ?></p>

                            <input type="hidden" name="product_name" value="<?php echo $row['name'] ?>">
                            <input type="hidden" name="product_image" value="<?php echo $row['image'] ?>">
                            <input type="hidden" name="product_description" value="<?php echo $row['description'] ?>">
                            <button type="submit" class="btn btn-danger" name="saveCourse">Lưu khóa học</button>
                        </form>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>




    </div>
</div>

</body>

</html>