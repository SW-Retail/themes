{templater_start}
{template_version:__TEMPLATEVERSION_HERE__}


<div class="sticky-top headergrey fixed-top">
    {block:hook:hook_before_header:page_block}
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

    <!-- Navigation -->
    <div class="navigationbar">
        <div class="container">
            <div class="row navigation">
                <div class="col-6">
                    <a href="/"><img class="img-fluid" src="/{shoplogo}" title="{shopname}" style="max-width:300px;height:40px;"/></a>
                </div>
                <div class="col-12 col-lg-4 d-none d-lg-flex align-items-center">
                    <input class="form-control search-control"  type="text" value="" placeholder="Zoeken..."/>
                </div>
                <div class="col-6 col-lg-2 pr-4 d-flex align-items-center justify-content-end visible-lg">

                         <a onclick="swCustomer.loadCustomerLogin()" id="sw_customer_login" class="cursor-pointer  visible-large"><i class="fas fa-sign-in-alt tmplt_attention_color"></i></a>
                        <div>
                            <a class='sw_customer-options_button position-relative visible-large' id="sw_customer_options" class="cursor-pointer"> <i class="fas fa-user-alt tmplt_attention_color "></i></a>
                            {block:menu:customer-menu:class=menu_customer}
                        </div>
                        <div id="checkout_button" class="position-relative pl-3  visible-large">
                            {block_declare:checkout_button}
                                <a onclick="swShopHelper.loadCheckout();return false;" id="sw_shoppingcart" class="cursor-pointer"><i class="fas fa-shopping-cart tmplt_attention_color" ></i><span class="shopping-cart-number badge-warning tmplt_sales_color" id="sw_shoppingcart_count">{amount_in_cart}</span></a>
                            {block_end}
                        </div>

                </div>


            </div>
        </div>
    </div>


            <!-- Navigation -->
     <div class="tmplt_base_color tmplt_base_color_text navigationbar">



         <div class="container">


             <div class="visible-small main-menu">
                 <div class="row mobile tmplt_base_color_text ">


                         <div class="col-8 "><i class="fas fa-bars  " id="menu-toggler" data-menustyle="fancy"></i></div>
                         <div class="col-4">
                             <div class="pull-right">
                                 <a onclick="swCustomer.loadCustomerLogin()" id="sw_customer_login_small" ><i class="fas fa-sign-in-alt tmplt_attention_color"></i></a>
                                 <a onclick="swShop.toggleMenu('customer-menu')" id="sw_customer_options_small" > <i class="fas fa-user-alt tmplt_attention_color"></i>asdfasdf</a>
                                 <a href="/checkout" id="sw_shoppingcart" ><i class="fas fa-shopping-cart tmplt_attention_color"></i> </a>
                             </div>
                         </div>
                 </div>

             </div>




             <div class="row main-navigation main-menu " id="sw_menu" >
                <div class="col-sm-12">
                    <div id="navCloser"><i class="fas fa-times"></i></div>
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
