<div class="site-header">
    <p class="h-logo">
        <a href="index-2.html"><img src="/assets/front/img/logo.png" alt="MultiShop"></a>
    </p>

    <div class="h-shop">
        <form method="get" action="#" class="h-search" id="h-search">
            <input type="text" placeholder="Search...">
            <button type="submit"><i class="ion-search"></i></button>
        </form>

        <ul class="h-shop-links">
            <li class="h-search-btn" id="h-search-btn"><i class="ion-search"></i></li>
            <li class="h-shop-icon h-wishlist">
                <a title="Wishlist" href="wishlist.html">
                    <i class="ion-heart"></i>
                    <span>5</span>
                </a>
            </li>
            <li class="h-shop-icon h-compare">
                <a title="Compare List" href="compare.html">
                    <i class="ion-arrow-swap"></i>
                    <span>2</span>
                </a>
            </li>
            <li class="h-shop-icon h-profile">
                <a href="auth.html" title="My Account">
                    <i class="ion-android-person"></i>
                </a>
                <ul class="h-profile-links">
                    <li><a href="auth.html">Login / Registration</a></li>
                    <li><a href="cart.html">Cart</a></li>
                    <li><a href="compare.html">Compare</a></li>
                    <li><a href="wishlist.html">Wishlist</a></li>
                </ul>
            </li>

            <li class="h-cart">
                <a class="cart-contents" href="cart.html">
                    <p class="h-cart-icon">
                        <i class="ion-android-cart"></i>
                        <span>3</span>
                    </p>
                    <p class="h-cart-total">$510.00</p>
                </a>
                <div class="widget_shopping_cart">
                    <div class="widget_shopping_cart_content">
                        <ul class="cart_list">
                            <li>
                                <a href="#" class="remove">&times;</a>
                                <a href="#">
                                    <img src="assets/front/img/1/other/cart1.jpg" alt="">
                                    Pneumatic Coil Hose
                                </a>
                                <span class="quantity">1 &times; $180.00</span>
                            </li>

                            <li>
                                <a href="#" class="remove">&times;</a>
                                <a href="#">
                                    <img src="assets/front/img/1/other/cart2.jpg" alt="">
                                    Drill Tool Kit
                                </a>
                                <span class="quantity">1 &times; $115.00</span>
                            </li>

                            <li>
                                <a href="#" class="remove">&times;</a>
                                <a href="#">
                                    <img src="assets/front/img/1/other/cart3.jpg" alt="">
                                    Searchlight Portable
                                </a>
                                <span class="quantity">1 &times; $150.00</span>
                            </li>
                        </ul>
                        <p class="total"><b>Subtotal:</b> $510.00</p>
                        <p class="buttons">
                            <a href="cart.html" class="button">View cart</a>
                            <a href="checkout.html" class="button">Checkout</a>
                        </p>
                    </div>
                </div>
            </li>


            <li class="h-menu-btn" id="h-menu-btn">
                <i class="ion-navicon"></i> Menu
            </li>
        </ul>
    </div>

    <div class="mainmenu">
        <nav id="h-menu" class="h-menu">
            <ul>
                <li>
                    <a href="{{ url('/') }}">Accueil</a>
                </li>

                <li>
                    <a href="{{ route('front.produits.detail') }}">Boutiques</a>
                </li>

                <li class="menu-item-has-children">
                    <a href="catalog-gallery.html">Shop</a>
                    <ul class="sub-menu">
                        <li>
                            <a href="catalog-gallery.html">Catalog - Gallery</a>
                        </li>
                        <li>
                            <a href="catalog-list.html">Catalog - List</a>
                        </li>
                        <li>
                            <a href="catalog-gallery-full.html">Catalog - No Sidebar</a>
                        </li>
                        <li>
                            <a href="product.html">Product Page</a>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="cart.html">Shop Pages</a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="cart.html">Cart</a>
                                </li>
                                <li>
                                    <a href="wishlist.html">Wishlist</a>
                                </li>
                                <li>
                                    <a href="compare.html">Compare</a>
                                </li>
                                <li>
                                    <a href="auth.html">Login</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="menu-item-has-children">
                    <a href="blog.html">Blog</a>
                    <ul class="sub-menu">
                        <li>
                            <a href="blog.html">Blog Posts</a>
                        </li>
                        <li>
                            <a href="post.html">Standard Post</a>
                        </li>
                        <li>
                            <a href="post-slider.html">Slider Post</a>
                        </li>
                    </ul>
                </li>

                <li class="menu-item-has-children">
                    <a href="about.html">Pages</a>
                    <ul class="sub-menu">
                        <li>
                            <a href="about.html">About Us</a>
                        </li>
                        <li>
                            <a href="contacts.html">Contacts</a>
                        </li>
                        <li>
                            <a href="gallery.html">Gallery</a>
                        </li>
                        <li>
                            <a href="404.html">Error 404</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
</div>
</div>
