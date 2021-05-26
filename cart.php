<?php
include_once 'assets/mainHead.php';
$cartIsEmpty = 1;
?>
<link rel="stylesheet" href="css/cart.css">
</head>

<body>
    <?php include_once 'navbarCo.php' ?>
    <div class="wrapp">
        <div class="navbarCart">
            <div class="navbarCartElementWrapper active">
                <div class="navbarCartElement ">
                    <i class="fas fa-shopping-cart "></i>
                    <h5>Panier</h5>
                </div>
                <div class="arrow-right"></div>
            </div>
            <div id="catalogue" class="navbarCartElementWrapper">
                <a  href="shopping.php" class="navbarCartElement">
                    <i class="fas fa-book-open"></i>
                    <h5>Catalogue</h5>
                </a>
                <div class="arrow-right"></div>
            </div>
            <div class="navbarCartElementWrapper">
                <div class="navbarCartElement">
                    <i class="fas fa-hand-holding-heart"></i>
                    <h5>Dons</h5>
                </div>
                <div class="arrow-right"></div>
            </div>
            <div class="navbarCartElementWrapper">
                <div class="navbarCartElement">
                    <i class="fas fa-heart"></i>
                    <h5>Wishlist</h5>
                </div>
                <div class="arrow-right"></div>
            </div>
            <div class="navbarCartElementWrapper">
                <div class="navbarCartElement">
                    <i class="fas fa-shipping-fast"></i>
                    <h5>Orders</h5>
                </div>
                <div class="arrow-right"></div>
            </div> 
       
            
        </div>
        <div>
            <?php if ($cartIsEmpty) { ?>
                <div class="panierVide">

                    <div class="load">
                    <i class="fas fa-shopping-cart "></i>
                    <i class="fas fa-shopping-cart "></i>
                    <i class="fas fa-shopping-cart "></i>
                    <i class="fas fa-shopping-cart "></i>
                    </div>
                    <div><h2 id="visiterCatalogue">Votre panier est vide ... Revenez au catalogue et remplissez le !</h2></div>
                </div>
            <?php } ?>
        </div>
    </div>


    <?php include_once 'assets/scripts.php' ?>
    <?php include_once 'footer.php' ?>
    <script src="js/cart.js"></script>
    <script src="testnav.js"></script>
</body>

</html>