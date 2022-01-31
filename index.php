<?php
    require("./header.php");
    require "./php/connection.php";
    function getNewBooks(){
        $pdo = db::getInstance(); 
        $sql = "SELECT price,name,image,book.book_id FROM new_books INNER JOIN book ON new_books.book_id = book.book_id";
        $statement = $pdo-> prepare($sql);
        $statement-> execute();

        $data = $statement-> fetchAll();
        echo
        '<div id="NewBooksCarousel" class="carousel slide new-books" data-ride="carousel" data-interval="false">
        <div class="carousel-inner">
            <h2 class="new-books-text">Check New Books.</h2>
           <div class="carousel-item active">
               <div class="products-gird">';
        $counter = 0;
        foreach($data as $row){
            $counter++;
            if($counter == 7){
                echo
                ' </div>
                </div>
                <div class="carousel-item">
                    <div class="products-gird">';
                $counter = 1;
            }
            echo 
            '<div class="card product-card">
                <img class="card-img-top p-1 product-img" src="'.$row["image"].'"+alt="'.$row["name"].'">
                    <div class="card-body">
                    <a href="./product.php?id='.$row["book_id"].'" class="card-title">'.$row["name"].'</a>
                    <p class="card-text">Price: '.$row["price"].' JD</p>
                    </div>
                <form method="POST" action="./php/addToCart.php">
                    <button name="bookID" method="POST" class="add-toCart-btn btn" type="submit" value="'.$row["book_id"].'"><i class="fas fa-shopping-cart"></i> Add to
                        cart</button>
                </form>
            </div>';
        }
        echo
        '</div>
        </div>
        </div>
        <a class="carousel-control-prev" style="width:100px" href="#NewBooksCarousel" role="button" data-slide="prev">
              <span class="carousel-control" aria-hidden="true"></span>
              <img class="carousal-btn" src="./images/previous-icon.png">
          </a>
          <a class="carousel-control-next" style="width:100px" href="#NewBooksCarousel" role="button" data-slide="next">
              <span class="carousel-control" aria-hidden="true"></span>
              <img class="carousal-btn" src="./images/next-icon.png" >
          </a>
      </div>';
        $pdo = null;
    }
    function getBestSeller(){
        $pdo = db::getInstance();
        $sql = "SELECT price,name,image,book.book_id FROM best_seller INNER JOIN book ON best_seller.book_id = book.book_id";
        $statement = $pdo-> prepare($sql);
        $statement-> execute();

        $data = $statement-> fetchAll();
        echo '<div class="products-gird pb-0">';
        $counter = 0;
        foreach($data as $row){
            echo 
            '<div class="card product-card">
                <img class="card-img-top p-1 product-img" src="'.$row["image"].'"+alt="'.$row["name"].'">
                    <div class="card-body">
                    <a href="./product.php?id='.$row["book_id"].'" class="card-title">'.$row["name"].'</a>
                    <p class="card-text">Price: '.$row["price"].' JD</p>
                    </div>
                    <form method="POST" action="./php/addToCart.php">
                    <button name="bookID" method="POST" class="add-toCart-btn btn" type="submit" value="'.$row["book_id"].'"><i class="fas fa-shopping-cart"></i> Add to
                        cart</button>
                </form>
            </div>';
        }
        echo
        '</div>';
        $pdo = null;
    }
    function getDeals(){
        $pdo = db::getInstance();
        $sql = "SELECT price,name,image,book.book_id FROM deals INNER JOIN book ON deals.book_id = book.book_id";
        $statement = $pdo-> prepare($sql);
        $statement-> execute();

        $data = $statement-> fetchAll();
        echo
        '<div id="dealsCarousel" class="carousel slide new-books" data-ride="carousel" data-interval="false">
        <div class="carousel-inner">
            <h2 class="new-books-text">Deals.</h2>
           <div class="carousel-item active">
               <div class="products-gird">';
        $counter = 0;
        foreach($data as $row){
            $counter++;
            if($counter == 7){
                echo
                ' </div>
                </div>
                <div class="carousel-item">
                    <div class="products-gird">';
                $counter = 1;
            }
            echo 
            '<div class="card product-card">
                <img class="card-img-top p-1 product-img" src="'.$row["image"].'" alt="'.$row["name"].'">
                    <div class="card-body">
                    <a href="./product.php?id='.$row["book_id"].'" class="card-title">'.$row["name"].'</a>
                    <p class="card-text">Price: '.$row["price"].' JD</p>
                    </div>
                <form method="POST" action="./php/addToCart.php">
                    <button name="bookID" method="POST" class="add-toCart-btn btn" type="submit" value="'.$row["book_id"].'"><i class="fas fa-shopping-cart"></i> Add to
                        cart</button>
                </form>
            </div>';
        }
        echo
        '</div>
        </div>
        </div>
        <a class="carousel-control-prev" style="width:100px" href="#dealsCarousel" role="button" data-slide="prev">
              <span class="carousel-control" aria-hidden="true"></span>
              <img class="carousal-btn" src="./images/previous-icon.png" alt="">
          </a>
          <a class="carousel-control-next" style="width:100px" href="#dealsCarousel" role="button" data-slide="next">
              <span class="carousel-control" aria-hidden="true"></span>
              <img class="carousal-btn" src="./images/next-icon.png" alt="">
          </a>
      </div>';
        $pdo = null;
    }
?>
<section class="colored-section" id="title">
      <div class="container-fluid">
          <div class="row">
              <div class="col-lg-6">
                  <form class="search-box" action="./php/search.php" method="GET">
                      <input class="search-input" placeholder="Search" name="book_name">
                      <button class="search-img" type="submit"><img src="./images/search.png" alt=""></button>
                  </form>
                  <h1 class="big-heading">Find Your Favourite Book</h1>
              </div>
              <div class="col-lg-6">
                  <img class="title-image" src="./images/main-book.jpg" alt="The bookstore">
              </div>
          </div>
      </div>
  </section>
  <!-- new-books -->
    <section class="white-section">
        <?php
            getNewBooks();
        ?>    
    </section>

  <!-- Best Seller -->
  <section class="best-seller colored-section">
      <h2 class="best-seller-text">Best Seller.</h2>
      <?php
        getBestSeller();
      ?>
  </section>

  <!-- Deals Section -->

  <section class="white-section">
     <?php
      getDeals();
     ?>
  </section>
<?php
  include("./footer.php")
?>