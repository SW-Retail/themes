{templater_start}
{template_version:__TEMPLATEVERSION_HERE__}


<div class="sticky-top headergrey">
    {block:hook:hook_before_header:page_block}
    <!-- Socials or USP header -->
    <div class="headertop">
        <div class="container">
            <div class="row">
                <div class="col-12 text-right">
                    {block:menu:menutop:class=menu-horizontal}
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation -->
    <div class=" tmplt_base_color tmplt_base_color_text">
        <div class="container">
            <div class="row navigation">
                <div class="col-12 col-lg-6">
                    <a href="/"><img class="img-fluid" src="/{shoplogo}" title="{shopname}" style="max-width:300px;"/></a>
                </div>
                <div class="col-12 col-lg-4 d-none d-lg-block">
                    <input class="form-control search-control"  type="text" value="" placeholder="Zoeken..."/>
                </div>
                <div class="col-12 col-lg-2">
                    <a onclick="swCustomer.loadCustomerLogin()" id="sw_customer_login" ><i class="fas fa-sign-in-alt tmplt_attention_color"></i></a>
                    <a class='sw_customer-options_button' id="sw_customer_options" > <i class="fas fa-user-alt tmplt_attention_color "></i></a>
                    {block:menu:customer-menu:class=menu_customer}
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
            <div class="row main-navigation">

            </div>
        </div>
    </div>