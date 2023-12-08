{templater_start}
{template_version:__TEMPLATEVERSION_HERE__}

<div class="sticky-top headergrey fixed-top">
    {block:hook:hook_before_header:page_block}
    <div class="container pb-3">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    {block:menu:menutop:class=menu-horizontal}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-4 col-md-6">                
                <a href="/" id="shoplogo"><img height="80px" src="/{shoplogo}" title="{shopname}" /></a>
            </div>
            <div class="col-8 col-md-6 col-lg-5">
                <div id="sw_customer_login_button" class="row sub-header h-100 visible-large">
                    <div class="col-10 col-md-9 my-auto">
                        <input class="form-control search-control"  type="text" value="" placeholder="Zoeken"/>
                    </div>
                    <div class="col-1 my-auto">
                        <a onclick="swCustomer.loadCustomerLogin()" id="sw_customer_login" ><i class="fas fa-sign-in-alt tmplt_attention_color"></i></a>
                        <a class='sw_customer-options_button' id="sw_customer_options" > <i class="fas fa-user-alt tmplt_attention_color "></i></a>
                        {block:menu:customer-menu:class=menu_customer}
                    </div>
                    <div class="col-1 my-auto">
                        <div id="wishlist_button" class="position-relative {uitoggle_wishlist_active}">
                            {block_declare:wishlist_button}
                            <a onclick="swShopHelper.loadWishlist();return false;" id="sw_wishlist" class="cursor-pointer">
                                <i class="fas fa-heart tmplt_attention_color" ></i>
                                <span class="wishlist-cart-number badge-warning tmplt_sales_color" id="sw_wishlist_count">{amount_in_wishlist}</span>
                            </a>
                            {block_end}
                        </div>
                    </div>
                    <div class="col-1 my-auto">
                        <div id="checkout_button">
                            {block_declare:checkout_button}
                            <a onclick="swShopHelper.loadCheckout();return false;" id="sw_shoppingcart" >
                                <i class="fas fa-shopping-cart tmplt_attention_color" ></i>
                                <span class="shopping-cart-number badge-warning tmplt_sales_color" id="sw_shoppingcart_count">{amount_in_cart}</span>
                            </a>
                            {block_end}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="header tmplt_base_color  tmplt_base_color_text pb-2 pt-2">
        <div class="container">
            <div class="row sub-header visible-small ">
                <div class="grouped pl-3 mobile-menu">

                    <div class="col-8 "><i class="fas fa-bars" id="menu-toggler" data-menustyle="fancy"  onclick="swShop.mobileMenuShow()"></i></div>
                    <div class="col-3 ">
                        <a onclick="swCustomer.loadCustomerLogin()" id="sw_customer_login_small" ><i class="fas fa-sign-in-alt tmplt_attention_color"></i></a>
                        <a onclick="swShop.toggleMenu('customer-menu')" id="sw_customer_options_small" > <i class="fas fa-user-alt tmplt_attention_color"></i></a>
                        <a href="/checkout" id="sw_shoppingcart" ><i class="fas fa-shopping-cart tmplt_attention_color"></i> </a>
                    </div>

                </div>
            </div>
        </div>
        <div class="header tmplt_base_color  tmplt_base_color_text visible-small">
            <div class="container">
                <div class="row">
                    <div id="customer-menu" class="col-12 menu menu-horizontal menu-mobile">
                        {block:menu:customer-menu:class=menu}
                    </div>
                </div>
            </div>
        </div>


        <div class="tmplt_base_color tmplt_base_color_text navigationbar">
            <div class="container">
                <div class="row main-navigation main-menu menu-mobile " id="sw_menu" >
                    <div class="col-sm-12">
                        <div id="navCloser"  onclick="swShop.mobileMenuShow(false);"><i class="fas fa-times"></i></div>
                        <input class="form-control search-control d-block d-md-none"  type="text" value="" placeholder="Zoeken..."/>
                        {block:menu:mainmenu:class=menu-horizontal:class=menu-main}
                    </div>

                </div>
                <div class="row backdrop" id="backdropper">
                    <!-- -->
                </div>
            </div>
        </div>




    </div>
</div>
