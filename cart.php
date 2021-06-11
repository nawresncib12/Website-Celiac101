<?php
include_once 'assets/mainHead.php';
$cartIsEmpty = 0;
?>
<link rel="stylesheet" href="css/cart.css">

</head>

<body>
    
    <?php include_once 'preloader.php' ?>
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
                <a href="shopping.php" class="navbarCartElement">
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
        <div class="cart">
            <?php if ($cartIsEmpty) { ?>
                <div class="panierVide">

                    <div class="load">
                        <i class="fas fa-shopping-cart "></i>
                        <i class="fas fa-shopping-cart "></i>
                        <i class="fas fa-shopping-cart "></i>
                        <i class="fas fa-shopping-cart "></i>
                    </div>
                    <div>
                        <h2 id="visiterCatalogue">Votre panier est vide ... Revenez au catalogue et remplissez le !</h2>
                    </div>
                </div>
            <?php } else { ?>
                <div class="cartElements">
                    <div class="cartElementWrapper">
                        <div class="cartElement">
                            <div class="info">
                                <h6>12345 -</h6>
                                <h4>Farine schar</h4>
                                <div class="details">
                                    <h6>Prix : 5</h6>
                                    <h6>Quantité : 3</h6>
                                    <h6>Total : 15</h6>
                                </div>
                            </div>
                            <div class="gestion">
                                <span>
                                    <i class="fas fa-eye"></i>
                                </span>
                                <span class="shopped">
                                    <i class="fas fa-shopping-cart"></i>
                                    <h4>1</h4>
                                    <span>
                                        <i class="fas fa-plus addCart"></i>
                                        <i class="fas fa-minus removeCart"></i>
                                    </span>
                                </span>
                                <span>
                                    <i class="removeElement fas fa-times-circle"></i>
                                </span>
                            </div>
                        </div>
                        <div class="details">
                            <h6>Prix : 5</h6>
                            <h6>Quantité : 3</h6>
                            <h6>Total : 15</h6>
                        </div>
                    </div>
                    <div class="cartElementWrapper">
                        <div class="cartElement">
                            <div class="info">
                                <h6>12345 -</h6>
                                <h4>Farine schar</h4>
                                <div class="details">
                                    <h6>Prix : 5</h6>
                                    <h6>Quantité : 3</h6>
                                    <h6>Total : 15</h6>
                                </div>
                            </div>
                            <div class="gestion">
                                <span>
                                    <i class="fas fa-eye"></i>
                                </span>
                                <span class="shopped">
                                    <i class="fas fa-shopping-cart"></i>
                                    <h4>1</h4>
                                    <span>
                                        <i class="fas fa-plus addCart"></i>
                                        <i class="fas fa-minus removeCart"></i>
                                    </span>
                                </span>
                                <span>
                                    <i class="removeElement fas fa-times-circle"></i>
                                </span>
                            </div>
                        </div>
                        <div class="details">
                            <h6>Prix : 5</h6>
                            <h6>Quantité : 3</h6>
                            <h6>Total : 15</h6>
                        </div>
                    </div>
                    <div class="cartElementWrapper">

                        <div class="cartElement">
                            <div class="info">
                                <h6>12345 -</h6>
                                <h4>Farine schar</h4>
                                <div class="details">
                                    <h6>Prix : 5</h6>
                                    <h6>Quantité : 3</h6>
                                    <h6>Total : 15</h6>
                                </div>
                            </div>
                            <div class="gestion">
                                <span>
                                    <i class="fas fa-eye"></i>
                                </span>
                                <span class="shopped">
                                    <i class="fas fa-shopping-cart"></i>
                                    <h4>1</h4>
                                    <span>
                                        <i class="fas fa-plus addCart"></i>
                                        <i class="fas fa-minus removeCart"></i>
                                    </span>
                                </span>
                                <span>
                                    <i class="removeElement fas fa-times-circle"></i>
                                </span>
                            </div>
                        </div>
                        <div class="details">
                            <h6>Prix : 5</h6>
                            <h6>Quantité : 3</h6>
                            <h6>Total : 15</h6>
                        </div>
                    </div>
                    <div class="total">
                        <img src="images/totalCart.jpg" alt="">
                        <span>Total:</span>
                        <span>15.00 Dt</span>
                    </div>
                    <div class="tel">
                        <img src="images/telCart.png" alt="">
                        <span>Telephone: </span>
                        <input type="text" value="97782808">
                    </div>
                    <div class="adresse">
                        <img src="images/adresseCart.png" alt="">
                        <span>Adresse: </span>
                        <span>73 rue du Général Ailleret

                            <button id="changeLocation" class="btn btn3">Changer Adresse</button>
                        </span>
                        <!-- if has adress in profile show it as default-->

        <!-- if not
                        <button class="btn btn3">Add Location</button>
                        -->
       
                    </div>

                    <div class="confirm">
                        <input id="confirmCart" type="submit" value="Valider mes achats">
                    </div>
                </div>

                <div class=" locationPopUp">
                    <h1 class="closeLocationPopUp"> &times;</h1>
                    <span>Veuillez choisir une adresse </span>
                    <div id="mapAddress">
                    </div>
                    <div class="saveAdress">
                        <label for="saveAdrs">Ajouter cette adresse à mes adresses</label>
                        <input id="saveAdrs" type="checkbox">
                    </div>
                    <button class="btn btn3 " id="mybtn1">Confirmer</button>
                </div>
                <div class="paymentPopUp ">
                    <h1 class="closePaymentPopUp"> &times;</h1>
                    <div class="payElements">
                        <div class="payElement">
                            <div class="infoElement">
                                <h6>12345 -</h6>
                                <h4>Farine schar</h4>
                            </div>
                            <div class="detailsElement">
                                <h6>Prix : 5</h6>
                                <h6>Quantité : 3</h6>
                                <h6>Total : 15</h6>
                            </div>
                        </div>
                        <div class="payElement">
                            <div class="infoElement">
                                <h6>12345 -</h6>
                                <h4>Farine schar</h4>
                            </div>
                            <div class="detailsElement">
                                <h6>Prix : 5</h6>
                                <h6>Quantité : 3</h6>
                                <h6>Total : 15</h6>
                            </div>
                        </div>
                        <div class="payElement">
                            <div class="infoElement">
                                <h6>12345 -</h6>
                                <h4>Farine schar</h4>
                            </div>
                            <div class="detailsElement">
                                <h6>Prix : 5</h6>
                                <h6>Quantité : 3</h6>
                                <h6>Total : 15</h6>
                            </div>
                        </div>
                        <div class="payElement">
                            <div class="infoElement">
                                <h6>12345 -</h6>
                                <h4>Farine schar</h4>
                            </div>
                            <div class="detailsElement">
                                <h6>Prix : 5</h6>
                                <h6>Quantité : 3</h6>
                                <h6>Total : 15</h6>
                            </div>
                        </div>
                    </div>
                    <div class="paymentInfo">
                        <div class="paymentTotal">
                            <img src="images/totalCart.jpg" alt="">
                            <span>Total:</span>
                            <span>15.00 Dt</span>
                        </div>

                        <div class="paymentAdress">
                            <img src="images/adresseCart.png" alt="">
                            <span>Adresse: </span>
                            <span>73 rue du Général Ailleret </span>
                        </div>
                        <div class="paymentTel">
                            <img src="images/telCart.png" alt="">
                            <span>Téléphone: </span>
                            <span>97 782 808 </span>
                        </div>

                        <div class="paymentDelivery">
                            <img src="images/deliveryCart.png" alt="">
                            <span>La livraison sera dans 48 heures :</span>
                            <span>12-12-2021 </span>
                        </div>
                    </div>
                    <div class="payment">
                        <input class="pay" type="submit" value="Payer à la livraison">
                        <input class="pay" type="submit" value="Payer maintenant">
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

    <div id="overlayCart" class=""></div>
    <div class="sendPost"></div>




       <!-- <div class="orders">
            <div class="payElement">
                <div class="infoElement">
                    <h6>12345 -</h6>
                    <h4>Farine schar</h4>
                </div>
                <div class="detailsElement">
                    <h6>Prix : 5</h6>
                    <h6>Quantité : 3</h6>
                    <h6>Total : 15</h6>
                </div>
            </div>
        </div>
    </div>-->
        <?php include_once 'assets/scripts.php' ?>
        <?php include_once 'footer.php' ?>
        <!--script pour map-->


        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCQpw0VdM_Cpj50OfKTRMJbP1SK7wzYcAE&callback=initMap" type="text/javascript"></script>
        <script src="js/cart.js"></script>
        <script src="testnav.js"></script>
        
</body>

</html>