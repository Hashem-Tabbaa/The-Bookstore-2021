<?php
  include("./header.php")
?>
<h4 class="font-weight-bold text-left mt-3 ml-4">My Cart Items</h4>
<div class="d-flex cartPage">
    <div class="cart-products">
        <div class="cart-product-card p-4 m-2">
            <div>
                <img class="cart-products-img" src="../images/booksImages/1.jpg" alt="">
            </div>
            <div class="cart-products-info">
                <h4 class="font-weight-bold">Angela Davis</h4>
                <div class="quantity-section">
                    <h6 class="font-weight-bold">Quantity</h6>
                    <div class="d-flex quantity-box align-items-baseline">
                        <button type="button" class="btn-sm btn minus-btn circle mr-2" id="m1">
                            <i class="fa fa-minus" aria-hidden="true"></i>
                        </button>
                        <input class="quantity" value="1" id="v1" disabled></input>
                        <button type="button" class="btn btn-sm plus-btn circle ml-2" id="p1">
                            <i class="fa fa-plus" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
                <div class="cart-btns d-flex">
                    <button type="submit" class="btn remove-btn btn-dark">Remove</button>
                    <button type="submit" class="btn btn-info">Move To Wishlist</button>
                </div>
            </div>
            <div class="product-details">
                <h5>Price : 10 JD</h5>
                <hr>
                <p>John Koenig (Author)</p>
                <hr>
                <h5 class="cart-description">Description</h5>
                <p class="cart-description">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos
                    adipisci rerum,</p>
            </div>
        </div>
        <div class="cart-product-card p-4 m-2">
            <div>
                <img class="cart-products-img" src="../images/booksImages/2.jpg" alt="">
            </div>
            <div class="cart-products-info">
                <h4 class="font-weight-bold">Atlas of The Heart</h4>
                <div class="quantity-section">
                    <h6 class="font-weight-bold">Quantity</h6>
                    <div class="d-flex quantity-box align-items-baseline">
                        <button type="button" class="btn-sm btn minus-btn circle mr-2" id="m2">
                            <i class="fa fa-minus" aria-hidden="true"></i>
                        </button>
                        <input class="quantity" value="1" id="v2" disabled></input>
                        <button type="button" class="btn btn-sm plus-btn circle ml-2" id="p2">
                            <i class="fa fa-plus" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
                <div class="cart-btns d-flex">
                    <button type="submit" class="btn remove-btn btn-dark">Remove</button>
                    <button type="submit" class="btn btn-info">Move To Wishlist</button>
                </div>
            </div>
            <div class="product-details">
                <h5>Price : 5 JD</h5>
                <hr>
                <p>John Koenig (Author)</p>
                <hr>
                <h5 class="cart-description">Description</h5>
                <p class="cart-description">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos
                    adipisci rerum,</p>
            </div>
        </div>
    </div>
    <div class="cart-info">
        <div class="invoice">
            <h5 class="font-weight-bold"> Delivery Details</h5>
            <p>Jordan - Amman - Tlaa Al Ali - Riffaa Al Ansari - 25</p>
            <p class="note text-right   ">*Expected to arrive in 2 days</p>
            <hr>
            <h5 class="font-weight-bold mb-3">Price Details</h5>
            <p>Angela Davis : 10 JD</p>
            <p>Atlas of The Heart : 5 JD</p>
            <p>Delivery : 2 JD</p>
            <hr>
            <h6 class="font-weight-bold">Subtotal(2 Items): 17 JD</h6>
            <button type="submit" class="btn btn-primary mt-5">Place Order</button>
        </div>
    </div>
</div>
<script>
    document.querySelectorAll('.plus-btn').forEach(element => {
        element.addEventListener('click', (e) => {
            e.preventDefault();
            var quantityID = "#v" + element.id[1];
            // alert(quantityID);
            var value = parseInt(document.querySelector(quantityID).value);
            if(value < 10) 
                document.querySelector(quantityID).value = value+1;
        });
    });
    document.querySelectorAll('.minus-btn').forEach(element => {
        element.addEventListener('click', (e) => {
            e.preventDefault();
            var quantityID = "#v" + element.id[1];
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