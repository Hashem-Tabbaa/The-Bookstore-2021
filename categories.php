    <?php
        include("./header.php");
        require "./php/connection.php";
        function getCategory($category_id, $category_name){
            $pdo = db::getInstance();
            $sql = "SELECT price,name,image,book_id FROM book WHERE category_id = $category_id";
            $stmt = $pdo->prepare($sql);
            $stmt-> execute();

            $data = $stmt->fetchAll();
            echo
            '
            <div class="category '.$category_name.'">
            <h4 class="font-weight-bold text-left p-4">'.$category_name.'</h4>
            <div class="products-gird">
            ';
            foreach($data as $row){
                echo
                '
                <div class="card product-card ">
                    <img class="card-img-top p-1 product-img" src="'.$row["image"].'" alt="'.$row["name"].'">
                    <div class="card-body">
                        <a href="./product.php?id='.$row["book_id"].'" class="card-title">'.$row["name"].'</a>
                        <p class="card-text">Price: '.$row["price"].' JD</p>
                    </div>
                    <form method="POST" action="./php/addToCart.php">
                        <button name="bookID" class="add-toCart-btn btn" type="submit" value="'.$row["book_id"].'"><i class="fas fa-shopping-cart"></i> Add to
                            cart</button>
                    </form>
                </div>
                ';
            }
            echo'</div><hr></div>';
            
            $pdo = null;
        }

    ?>  
    <div class="categories-container d-flex">
            <aside class="categories-checkbox sticky-top">
                <div>
                    <input type="checkbox" value="Historical" id="Historical" checked>
                    <label for="Historical">Historical</label>
                </div>

                <div>
                    <input type="checkbox" value="Scientific" id="Scientific">
                    <label for="Scientific">Scientific</label>
                </div>

                <div>
                    <input type="checkbox" value="Biography" id="Biography">
                    <label for="Biography">Biography</label>
                </div>

                <div>
                    <input type="checkbox" value="For-Children" id="For-Children">
                    <label for="For-Children">For Children</label>
                </div>

                <div>
                    <input type="checkbox" value="Humor-games" id="Humor-games">
                    <label for="Humor-games">Humor & Games</label>
                </div>

                <div>
                    <input type="checkbox" value="Poetry" id="Poetry">
                    <label for="Poetry">Poetry</label>
                </div>

                <div>
                    <input type="checkbox" value="Romance" id="Romance">
                    <label for="Romance">Romance</label>
                </div>
            </aside>
            <div class="categories">
                <?php
                    getCategory(2,"Historical");
                    getCategory(4,"Scientific");
                    getCategory(5,"Biography");
                    getCategory(3,"For-Children");
                    getCategory(6,"Humor-games");
                    getCategory(7,"Poetry");
                    getCategory(1,"Romance");
                    ?>        
            </div>
    </div>
    <script>
        document.querySelectorAll('input').forEach(element => {
            if (element.checked === false) {
                var categoryClass = "." + element.value;
                document.querySelector(categoryClass).style.display = "none";
            }
            element.addEventListener('click', (e) => {
                var categoryClass = "." + element.value;
                if (element.checked === false) {
                    document.querySelector(categoryClass).style.display = "none";
                } else {
                    document.querySelector(categoryClass).style.display = "inherit";
                }
            })
        });
    </script>
    <?php
    include("./footer.php")
    ?>