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
    <div class="tmplt_base_color tmplt_base_color_text navigationbar" >
        <div class="container">
            <div class="row navigation">
                <div class="col-6">
                    <a href="/"><img class="img-fluid" src="/{shoplogo}" title="{shopname}" style="max-width:300px;"/></a>
                </div>
                <div class="col-12 col-lg-4 d-none d-lg-flex align-items-center">
                    <input class="form-control search-control"  type="text" value="" placeholder="Zoeken..."/>
                </div>
                <div class="col-6 col-lg-2 pr-4 d-flex align-items-center justify-content-end large">
                    <a onclick="swCustomer.loadCustomerLogin()" id="sw_customer_login" class="cursor-pointer"><i class="fas fa-user tmplt_attention_color"></i></a>
                    <div  class="position-relative">
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
                    <div id="checkout_button" class="position-relative pl-3">
                        {block_declare:checkout_button}
                        <a onclick="swShopHelper.loadCheckout();return false;" id="sw_shoppingcart" class="cursor-pointer">
                            <i class="fas fa-shopping-cart tmplt_attention_color" ></i>
                            <span class="shopping-cart-number badge-warning tmplt_sales_color" id="sw_shoppingcart_count">{amount_in_cart}</span>
                        </a>
                        {block_end}
                    </div>
                </div>
                <div class="col-12 mt-3 d-block d-md-none"><i class="fas fa-bars" id="menu-toggler" onclick="swShop.mobileMenuShow()" data-menustyle="fancy"></i></div>
            </div>
            <div class="row main-navigation main-menu menu-mobile" id="sw_menu">
                <div id="navCloser" onclick="swShop.mobileMenuShow(false);"><i class="fas fa-times"></i></div>
                <input class="form-control search-control d-block d-md-none"  type="text" value="" placeholder="Zoeken..."/>
                {block:menu:mainmenu:class=menu-horizontal:class=menu-main}
            </div>
            <div class="row backdrop" id="backdropper">
                <!-- -->
            </div>
        </div>
    </div>
</div>
