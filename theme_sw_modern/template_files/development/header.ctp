{templater_start}
{template_version:swretail_r5_9_34}

<div class="headergrey" style="z-index:1049">

    {if:{menu_count:menutop}:<>:0}
        <!-- Socials or USP header -->
        <div class="headertop">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        {block:menu:menutop:class=menu-horizontal}
                    </div>
                </div>
            </div>
        </div>
    {if_end}

    <!-- Navigation -->

    <nav class="navigation">
        <div class="container h-100 position-relative z-2">
            <div class="row h-100">
                <div class="col-6 h-100 d-flex align-items-center navigation__logo">
                    <a href="/"><img class="img-fluid" src="/{shoplogo}" title="{shopname}" /></a>
                </div>
            </div>
        </div>
        <div class="fixed-nav container fixed-top d-flex justify-content-end align-items-center column-gap-3">

            <div class="navigation__control">
                <a onclick="swCustomer.loadCustomerLogin()" id="sw_customer_login" class="navigation__control bg-black rounded-circle d-flex justify-content-center align-items-center text-white">
                    <i class="fas fa-user-lock"></i>
                </a>
            </div>

            <div class="navigation__control position-relative" id="checkout_button">
                {block_declare:checkout_button}    
                    <a class="bg-black rounded-circle d-flex justify-content-center align-items-center text-white" onclick="swShopHelper.loadCheckout();return false;" id="sw_shoppingcart">
                        <i class="fas fa-shopping-cart"></i>
                        <span class="shopping-cart-number tmplt_sales_color" id="sw_shoppingcart_count">{amount_in_cart}</span>
                    </a>
                {block_end}
            </div>

            <div class="navigation__control">
                <button class="bg-black rounded-circle d-flex justify-content-center align-items-center text-white" id="menu-toggler" onclick="swShop.mobileMenuShow()">
                    <i class="fas fa-bars"></i>
                </button>
                <button class="bg-black rounded-circle d-flex justify-content-center align-items-center text-white" id="navCloser" onclick="swShop.mobileMenuShow(false);">
                    <i class="fas fa-times"></i>
                </button>
            </div>

            <div class="row position-absolute top-100 start-4 end-4 start-lg-0 end-lg-0 bg-white shadow p-4 rounded-lg" id="sw_menu">
                <div class="col-12">
                    <input class="form-control search-control"  type="text" value="" placeholder="Zoeken..."/>
                </div>

                <div class="col-12 position-relative main-menu">
                    {block:menu:mainmenu:class=menu-horizontal:class=main-menu}
                </div>
            </div>
        </div>
    </nav>

    <!-- <div class="navigationbar" >
        <div class="container">
            <div class="row navigation">
                <div class="col-3">
                    <a href="/"><img class="img-fluid" src="/{shoplogo}" title="{shopname}" style="max-width:225px;"/></a>
                </div>
                <div class="col-9">
                    <a onclick="swCustomer.loadCustomerLogin()" id="sw_customer_login" class="cursor-pointer"><i class="fas fa-user tmplt_attention_color"></i></a>
                    <div class="position-relative">
                        <a class='sw_customer-options_button position-relative hide' id="sw_customer_options" > <i class="fas fa-user-check tmplt_attention_color "></i></a>
                        {block:menu:customer-menu:class=menu_customer}
                    </div>
                    <div id="wishlist_button" class="position-relative pl-3 {uitoggle_wishlist_active}">
                        {block_declare:wishlist_button}
                        <a onclick="swShopHelper.loadWishlist();return false;" id="sw_wishlist" class="cursor-pointer">
                            <i class="fas fa-heart tmplt_attention_color" ></i>
                            <span class="wishlist-cart-number badge-warning tmplt_sales_color" id="sw_wishlist_count">{amount_in_wishlist}</span>
                        </a>
                        {block_end}
                    </div>
                    
                </div>
                <div class="col-12 mt-3"><i class="fas fa-bars"  data-menustyle="fancy"></i></div>
            </div> -->
            <!-- <div class="row main-navigation main-menu menu-mobile" id="sw_menu">
                <div id="navCloser" onclick="swShop.mobileMenuShow(false);"><i class="fas fa-times"></i></div>
                 -->
            <!-- </div>
        </div>
    </div> -->
</div>