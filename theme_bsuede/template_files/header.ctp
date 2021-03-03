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
                <!--{block:menu:menutop:class_menu-horizontal}-->
                <a href="/"><img height="80px" src="/{shoplogo}" title="{shopname}" /></a>
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
                <div class="visible-small h-100">
                    <div class="row h-100">
                        <div class="col-8 my-auto">
<!--                            <h3>{shopname}</h3>-->
                        </div>
                        <div class="col-4 my-auto">
                            <a onclick="swCustomer.loadCustomerLogin()" id="sw_customer_login_small" ><i class="fas fa-sign-in-alt tmplt_attention_color"></i></a>
                            <a onclick="swShop.toggleMenu('customer-menu')" id="sw_customer_options_small" > <i class="fas fa-user-alt tmplt_attention_color"></i></a>
                            <a href="/checkout" id="sw_shoppingcart" ><i class="fas fa-shopping-cart tmplt_attention_color"></i> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header tmplt_base_color  tmplt_base_color_text pb-2 pt-2">
        <div class="container">
            <div class="row sub-header visible-small ">
                <div class="grouped pl-3">
                    <input class="form-control search-control visible-small"  type="text" value="" placeholder="Zoeken"/>
                    <button class="menu-collapse" onclick="swShop.toggleMenu();return false;"><i class="fas fa-bars"></i></button>
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
        <div class="container">
            <div class="row">
                <div class="col-12 menu main-menu menu-mobile" id="sw_menu">
                    {block:menu:mainmenu:class=menu-horizontal:class=menu-main}
                </div>
            </div>
        </div>
    </div>
</div>
