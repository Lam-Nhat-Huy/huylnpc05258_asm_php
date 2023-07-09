<div class="container">
    <div class="row">


        <?php
        $query = 'SELECT * FROM products';
        $sql = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_array($sql)) {
        ?>
            <div class="col-sm-3 p-3 ">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"><?= $row['name'] ?></h5>
                        <img class="card-img-top mb-2" src="./assets/img/<?= $row['image'] ?>" alt="Card image cap">
                        <p class="card-text"><?= $row['description'] ?></p>
                        <a href="#" class="btn btn-primary">Xem Khóa Học</a>
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