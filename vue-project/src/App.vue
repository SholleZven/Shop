<template>
    <div>
        <div class="awe-page-loading">
         <div class="awe-loading-wrapper">
            <div class="awe-loading-icon">
               <img src="./assets/images/logo.png" alt="images">
            </div>
            <div class="progress">
               <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
         </div>
      </div>
    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content popup-search">
                <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i></button>
                <div class="modal-body">
                    <div class="input-group">
                        <input type="text" class="form-control control-search" placeholder="Search and hit enter...">
                        <button class="button_search" type="button">Search</button>
                    </div><!-- /input-group -->

                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
    <!-- End pushmenu -->
    <!-- End pushmenu -->
    <div class="wrappage">
        <header id="header" class="header-v1">
            <div class="header-top">
                    <div class="container">
                    <div class="box">
                        <p class="icon-menu-mobile"><i class="fa fa-bars" ></i></p>
                        <div class="logo"><a href="#" title="Uno">
                        <img src="./assets/images/logo.png" alt="images">
                        </a></div>
                        <div class="logo-mobile"><a href="#" title="Xanadu"><img src="./assets/images/logo.png" alt="Xanadu-Logo"></a></div>

                        <div class="box-right">
                            <div class="cart hover-menu">
                                 <p class="icon-cart" title="Add to cart">
                                        <i class="icon"></i>
                                        <span class="cart-count">2</span>
                                    </p>
                                    <div class="cart-list list-menu">
                                        <ul class="list">
                                            <li>
                                                <a href="#" title="" class="cart-product-image"><img src="./assets/images/products/1.jpg" alt="Product"></a>
                                                <div class="text">
                                                    <p class="product-name">Union Bed</p>
                                                    <p class="product-price"><span class="price-old">$700.00</span><span class="price">$350.00</span></p>
                                                    <p class="qty">QTY:01</p>
                                                </div>
                                                <a class="close" href="#" title="close"><i class="fa fa-times-circle"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" title="" class="cart-product-image"><img src="./assets/images/products/1.jpg" alt="Product"></a>
                                                <div class="text">
                                                    <p class="product-name">Union Bed</p>
                                                    <p class="product-price"><span class="price-old">$700.00</span><span class="price">$350.00</span></p>
                                                    <p class="qty">QTY:01</p>
                                                </div>
                                                <a class="close" href="#" title="close"><i class="fa fa-times-circle"></i></a>
                                            </li>
                                        </ul>
                                        <p class="total"><span class="left">Total:</span> <span class="right">$1121.98</span></p>
                                        <div class="bottom">
                                            <a class="link-v1" href="#" title="viewcart">View Cart</a>
                                            <a class="link-v1 rt" href="#" title="checkout">Check out</a>
                                        </div>
                                    </div>
                            </div>
                            <div class="settings hover-menu">
                                <a href="#" title="settings">
                                    <span class="icons-setting"></span>
                                </a>
                                <ul class="submenu list-menu align-left">
                                    <li>
                                        <div class="container-fluid">
                                            <h3>Select Language</h3>
                                            <ul class="language">
                                                <li class="active"><a href="#" title="language"><img src="./assets/images/lg-1.jpg" alt="language"></a></li>
                                                <li><a href="#" title="language"><img src="./assets/images/lg-2.jpg" alt="language"></a></li>
                                                <li><a href="#" title="language"><img src="./assets/images/lg-3.jpg" alt="language"></a></li>
                                                <li><a href="#" title="language"><img src="./assets/images/lg-4.jpg" alt="language"></a></li>
                                            </ul>
                                            <h3>Select Currency</h3>
                                            <ul class="currency">
                                                <li class="active"><a href="#" title="$"><span class="fa fa-dollar"></span></a></li>
                                                <li><a href="#" title="$"><span class="fa fa-euro"></span></a></li>
                                                <li><a href="#" title="$"><span class="fa fa-cny"></span></a></li>
                                            </ul>
                                            <ul class="infor">
                                                <li><span class="fa fa-unlock-alt"></span><a id="openLogin" href="#" title="login">Login / Register</a></li>
                                                <li><span class="fa fa-user"></span><a href="#" title="My Account">My Account</a></li>
                                                <li><span class="fa fa-heart"></span><a href="#" title="My Wishlist">My Wishlist</a></li>
                                                <li><span class="fa fa-check-circle"></span><a href="#" title="Checkout">Checkout</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="search dropdown" data-toggle="modal" data-target=".bs-example-modal-lg">
                                <i class="icon"></i>
                            </div>
                        </div>
                        <nav class="mega-menu">
                        <!-- Brand and toggle get grouped for better mobile display -->
                          <ul class="nav navbar-nav" id="navbar">
                            <li class="level1 active dropdown"><a href="#" title="Home"><RouterLink to="/home">Home</RouterLink></a>
                            </li>
                            <li class="level1 dropdown">
                                <a href="#" title="men">Shop</a>
                                <div class="sub-menu sub-menu-v2 dropdown-menu">
                                  <ul class="menu-level-1">
                                    <li class="level2"><a href="#">Living Room</a>
                                        <ul class="menu-level-2">
                                            <li class="level3"><a href="#" title="Seatings">Seatings</a></li>
                                            <li class="level3"><a href="#" title="Tables">Tables</a></li>
                                            <li class="level3"><a href="#" title="Accessories">Accessories</a></li>
                                            <li class="level3"><a href="#" title="Series">Series</a></li>
                                        </ul>
                                    </li>
                                    <li class="level2"><a href="#">BATH Room</a>
                                        <ul class="menu-level-2">
                                            <li class="level3"><a href="#" title="Lighting">Lighting</a></li>
                                            <li class="level3"><a href="#" title="Storage">Storage</a></li>
                                            <li class="level3"><a href="#" title="Accessories">Accessories</a></li>
                                            <li class="level3"><a href="#" title="Beds">Beds</a></li>
                                        </ul>
                                    </li>
                                     <li class="level2"><a href="#">KITCHEN Room</a>
                                        <ul class="menu-level-2">
                                            <li class="level3"><a href="#" title="Cleaning Tools">Cleaning Tools</a></li>
                                            <li class="level3"><a href="#" title="Waste Bins">Waste Bins</a></li>
                                            <li class="level3"><a href="#" title="Pots & Pans">Pots & Pans</a></li>
                                            <li class="level3"><a href="#" title="Beds">Beds</a></li>
                                        </ul>
                                    </li>
                                    <li class="level2"><a href="#">Living Room</a>
                                        <ul class="menu-level-2">
                                            <li class="level3"><a href="#" title="Seatings">Seatings</a></li>
                                            <li class="level3"><a href="#" title="Tables">Tables</a></li>
                                            <li class="level3"><a href="#" title="Accessories">Accessories</a></li>
                                            <li class="level3"><a href="#" title="Series">Series</a></li>
                                        </ul>
                                    </li>
                                    <li class="level2"><a href="#">BATH Room</a>
                                        <ul class="menu-level-2">
                                            <li class="level3"><a href="#" title="Lighting">Lighting</a></li>
                                            <li class="level3"><a href="#" title="Storage">Storage</a></li>
                                            <li class="level3"><a href="#" title="Accessories">Accessories</a></li>
                                            <li class="level3"><a href="#" title="Beds">Beds</a></li>
                                        </ul>
                                    </li>
                                     <li class="level2"><a href="#">KITCHEN Room</a>
                                        <ul class="menu-level-2">
                                            <li class="level3"><a href="#" title="Cleaning Tools">Cleaning Tools</a></li>
                                            <li class="level3"><a href="#" title="Waste Bins">Waste Bins</a></li>
                                            <li class="level3"><a href="#" title="Pots & Pans">Pots & Pans</a></li>
                                        </ul>
                                    </li>
                                  </ul>
                                  <div class="right-submenu">
                                        <a href="#" title="images"><img class="img-responsive" src="./assets/images/right-submenu.jpg" alt="Sub-Menu" /></a>
                                  </div>
                                  <!-- End RightSubMenu -->
                              </div>
                              <!-- End Dropdow Menu -->
                            </li>
                            <li class="level1 dropdown"><a href="#" title="collections">collections</a>
                                <ul class="menu-level-1 dropdown-menu">
                                    <li class="level2"><a href="lookbook_v2.html" title="Lookbook Style 1" target="_blank">Lookbook Style 1</a>
                                        <ul class="menu-level-2">
                                            <li class="level3"><a href="lookbook_v2.html" title="Lookbook Style 1" target="_blank">Lookbook Style 1</a></li>
                                            <li class="level3"><a href="lookbook_v3.html" title="Lookbook Style 2" target="_blank">Lookbook Style 2</a></li>
                                            <li class="level3"><a href="lookbook_v4.html" title="Lookbook Style 3" target="_blank">Lookbook Style 3</a></li>
                                            <li class="level3"><a href="lookbook_v5.html" title="Lookbook Style 4" target="_blank">Lookbook Style 4</a></li>
                                        </ul>
                                    </li>
                                    <li class="level2"><a href="lookbook_v3.html" title="Lookbook Style 2" target="_blank">Lookbook Style 2</a></li>
                                    <li class="level2"><a href="lookbook_v4.html" title="Lookbook Style 3" target="_blank">Lookbook Style 3</a></li>
                                    <li class="level2"><a href="lookbook_v5.html" title="Lookbook Style 4" target="_blank">Lookbook Style 4</a></li>

                                </ul>
                            </li>
                            <li class="level1 dropdown"><a href="#" title="Page">Page</a>
                                <div class="sub-menu dropdown-menu">
                                    <div class="top-sub-menu">
                                        <img src="./assets/images/top-submenu.jpg" alt="images">
                                    </div>
                                  <ul class="menu-level-1">
                                    <li class="level2"><a href="#">Living Room</a>
                                        <ul class="menu-level-2">
                                            <li class="level3"><a href="#" title="Seatings">Seatings</a></li>
                                            <li class="level3"><a href="#" title="Tables">Tables</a></li>
                                            <li class="level3"><a href="#" title="Accessories">Accessories</a></li>
                                            <li class="level3"><a href="#" title="Series">Series</a></li>
                                        </ul>
                                    </li>
                                    <li class="level2"><a href="#">BATH Room</a>
                                        <ul class="menu-level-2">
                                            <li class="level3"><a href="#" title="Lighting">Lighting</a></li>
                                            <li class="level3"><a href="#" title="Storage">Storage</a></li>
                                            <li class="level3"><a href="#" title="Accessories">Accessories</a></li>
                                            <li class="level3"><a href="#" title="Beds">Beds</a></li>
                                        </ul>
                                    </li>
                                     <li class="level2"><a href="#">KITCHEN Room</a>
                                        <ul class="menu-level-2">
                                            <li class="level3"><a href="#" title="Cleaning Tools">Cleaning Tools</a></li>
                                            <li class="level3"><a href="#" title="Waste Bins">Waste Bins</a></li>
                                            <li class="level3"><a href="#" title="Pots & Pans">Pots & Pans</a></li>
                                        </ul>
                                    </li>
                                     <li class="level2"><a href="#">LOOKBOOK</a>
                                        <ul class="menu-level-2">
                                            <li class="level3"><a href="#" title="Decorative Pillows">Decorative Pillows</a></li>
                                            <li class="level3"><a href="#" title="Picture Frames">Picture Frames</a></li>
                                            <li class="level3"><a href="#" title="Clocks">Clocks</a></li>
                                            <li class="level3"><a href="#" title="Baskets & Bins">Baskets & Bins</a></li>
                                        </ul>
                                    </li>
                                  </ul>
                              </div>
                              <!-- End Dropdow Menu -->
                            </li>
                            <li class="level1 dropdown"><a href="single-post.html" title="ShortCode" target="_blank">ShortCode</a>
                                <ul class="menu-level-1 dropdown-menu">
                                    <li class="level2"><a href="accordion.html" title="accordion" target="_blank">accordion</a></li>
                                    <li class="level2"><a href="box_content.html" title="box_content" target="_blank">box content</a></li>
                                    <li class="level2"><a href="button.html" title="button" target="_blank">button</a></li>
                                    <li class="level2"><a href="countdown.html" title="countdown" target="_blank">countdown</a></li>
                                    <li class="level2"><a href="gmap.html" title="gmap" target="_blank">gmap</a></li>
                                    <li class="level2"><a href="iconbox.html" title="iconbox" target="_blank">iconbox</a></li>
                                    <li class="level2"><a href="social.html" title="social" target="_blank">social</a></li>
                                    <li class="level2"><a href="tabs.html" title="tabs" target="_blank">tabs</a></li>
                                    <li class="level2"><a href="post_shortcode.html" title="post shortcode" target="_blank">post shortcode</a></li>
                                </ul>
                            </li>
                          </ul>
                        </nav>
                    </div>
                    </div>
                    <!-- End container -->
                </div>
                <!-- End header-top -->
        </header><!-- /header -->


        <router-view></router-view>
        <!-- End newsletter -->
        <footer id="footer" class="footer-v1">
          <div class="container">
                <div class="footer-top">
                    <div class="logo-footer">
                        <a href="#" title="Logo">
                            <img src="./assets/images/logo.png" alt="Logo">
                        </a>
                        <p>&copy; Xanadu 2016 | Site by EngoCreative</p>
                    </div>
                    <div class="menu-footer">
                        <ul>
                            <li><a href="#" title="About Us">About Us</a></li>
                            <li><a href="#" title="Advertise">Advertise</a></li>
                            <li><a href="#" title="Press">Press</a></li>
                            <li><a href="#" title="Contact Us">Contact Us</a></li>
                            <li><a href="#" title="Store">Store</a></li>
                            <li><a href="#" title="Careers">Careers</a></li>
                        </ul>
                    </div>
                    <!-- End menu-footer -->
                    <div class="social">
                        <a class="active" title="twitter" href="#"><i class="fa fa-twitter"></i></a>
                        <a title="facebook" href="#"><i class="fa fa-facebook"></i></a>
                        <a title="youtube" href="#"><i class="fa fa-youtube-play"></i></a>
                        <a title="google plus" href="#"><i class="fa fa-google-plus"></i></a>
                    </div>
                    <!-- End social -->
                </div>
                <!-- End footer-top -->
          </div>
          <!-- End container -->
        </footer>
        </div>
    </div>
</template>

<script>
import { RouterLink } from 'vue-router';


export default {
    name: 'App',
}

</script>


<style></style>
