<?php
    session_start();
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] == false){
        header("location: ./login.php");
        exit;
    }
    include("./header.php");
    // var_dump($_SESSION);
    require "./php/connection.php";
    
    function getCartItems(){
        $pdo = db::getInstance();
        $sql = "SELECT * FROM customer INNER JOIN cart ON customer.customer_id = cart.customer_id
        INNER JOIN book ON book.book_id = cart.book_id 
        INNER JOIN author ON author.author_id = book.author_id
        WHERE customer.customer_id = :customer_id AND cart.confirmed = false";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(":customer_id",$_SESSION["id"]);
        $stmt-> execute();
        $items = $stmt->fetchAll();
        foreach($items as $item){
            echo
            '
            <div class="cart-product-card p-4 m-2">
            <div>
            <img class="cart-products-img" src="'.$item["image"].'" alt="">
            </div>
            <div class="cart-products-info">
            <h4 class="font-weight-bold">'.$item["name"].'</h4>
            <div class="quantity-section">
            <h6 class="font-weight-bold">Quantity</h6>
            <div class="d-flex quantity-box align-items-baseline">
            <form action="./php/quantity.php" method="post" style="width:max-content">
                <button type="submit" class="btn-sm btn minus-btn circle mr-2" id="m'.$item["book_id"].'" value = '.$item["book_id"].' name="book">
                <i class="fa fa-minus" aria-hidden="true"></i>
                </button>
                <input class="quantity" value="'.$item["quantity"].'" id="v'.$item["book_id"].'" name="quantity"></input>
                <button  type="submit" class="btn btn-sm plus-btn circle ml-2" id="p'.$item["book_id"].'" value = '.$item["book_id"].' name="book">
                <i class="fa fa-plus" aria-hidden="true"></i>
            </button>
            </form>
            </div>
            </div>
            <div class="cart-btns d-flex">
            <form action="./php/removeFromCart.php" method="POST">
            <button type="submit" class="btn remove-btn btn-dark" value="'.$item["book_id"] .'" name="bookID">Remove</button>
            </form>
            </div>
            </div>
            <div class="product-details">
            <h5>Price :'.$item["price"].' JD</h5>
            <hr>
            <p>'.$item["author_first_name"].' '.$item["author_last_name"].'(Author)</p>
            <hr>
            <h5 class="cart-description">Description</h5>
            <p class="cart-description">'.$item["description"].'</p>
            </div>
            </div>
            ';
        }
        if(!empty($items)){
            echo
            '
            </div>
            <div class="cart-info">
            <div class="invoice">
            <h5 class="font-weight-bold"> Delivery Details</h5>
            <p>'.$item["city"].' - '.$item["place"].' - '.$item["street_name"].' - '.$item["building_number"].'</p>
            <p class="note text-right   ">*Expected to arrive in 2 days</p>
            <hr>
            <h5 class="font-weight-bold mb-3">Price Details</h5>
            ';
            $subtotal = 0;
            $itemsCount = 0;
            foreach($items as $item){
                $itemsCount++;
                $subtotal += $item["price"]*$item["quantity"];
                echo
                '
                <p>'.$item["name"].' : '.$item["price"].' JD x'.$item["quantity"].' </p>
                <hr>
                ';
            }
            if($item["city"] != "Amman"){
                echo'<p>Delivery : 4 JD</p>';
                $subtotal+=4;
            }
            else{
                echo'<p>Delivery : 2 JD</p>';
                $subtotal+=2;
            }
            echo'
            <h6 class="font-weight-bold">Subtotal('.$itemsCount.' Items): '.$subtotal.' JD</h6>      
            <form action="./php/placeOrder.php" method = "POST">
            	<button type="submit" class="btn btn-primary mt-5">Place Order</button>
            </form>
            ';
        }
        else{
            if(isset($_SESSION["confirmed"]))
                $message = "Your order has been placed successfully";
            else 
                $message = "Your Cart is Empty";
            echo'
            <div class="alert alert-primary" role="alert" style="height : 175px;">
            <p style="color:black; font-size :1.2em" class="mt-4">'.$message.'</p>
            </div>
            ';
        }
        unset($_SESSION["confirmed"]);
    }
    
?>
<h4 class="font-weight-bold text-left mt-3 ml-4">My Cart Items</h4>
<div class="d-flex cartPage">
    <div class="cart-products" style="width:75%">
        <?php
            getCartItems();
        ?>
        </div>
    </div>
</div>
<script>
    document.querySelectorAll('.plus-btn').forEach(element => {
        element.addEventListener('click', (e) => {
            var quantityID = "#v";
          	for(let i = 1 ; i<element.id.length ; i++){
            	quantityID += element.id[i];
            }
            var value = parseInt(document.querySelector(quantityID).value);
            if(value < 10) 
                document.querySelector(quantityID).value = value+1;
        });
    });
    document.querySelectorAll('.minus-btn').forEach(element => {
        element.addEventListener('click', (e) => {
            var quantityID = "#v";
          	for(let i = 1 ; i<element.id.length ; i++){
            	quantityID += element.id[i];
            }
            // alert(quantityID);
            var value = parseInt(document.querySelector(quantityID).value);
            if(value > 1) 
                document.querySelector(quantityID).value = value-1;
        });
    });
</script>
<?php
  include("./footer.php")
?>