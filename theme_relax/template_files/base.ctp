<html>


tesst

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
{templater_start}
{template_version:__TEMPLATEVERSION_HERE__}
{template_name:swretail_relax}
    <meta name="description" content="{meta_description}"/>
    <meta name="keywords"    content="{meta_keywords}" />
    <meta name="title"       content="{meta_title}" />
    <meta name="robots"      content="{meta_seo_tags}">


    <script src="{sw_cdn_url}/js/jquery-3.5.1.min.js?v={version}"></script>


    <!-- bootstrap -->
    <link rel="stylesheet" type="text/css" href="{sw_cdn_url}/plugins/bootstrap/css/bootstrap.min.css?v={version}"/>

    <link rel="stylesheet" type="text/css" href="{static_content}/css/stylesheet.css?v={version}"/>

    <!-- some icons -->
    <link rel="stylesheet" type="text/css" href="{sw_cdn_url}/plugins/fontawesome/css/font_awesome_all.min.css?v={version}"/>

    <!-- this stylesheet handles the configuration from the application -->
    <link rel="stylesheet"  type="text/css" href="/webshop_stylesheet?v={version}"/>

    <script src="{sw_cdn_url}/plugins/bootstrap/js/bootstrap.bundle.min.js?v={version}"></script>

    <!-- The webshop app -->
    <script src="/javascript.js?v={version}"></script>

    <link rel="icon" href="/{favicon}">

    <!-- splider is there for sliders -->
    <script src="{sw_cdn_url}/plugins/splide/splide.min.js"></script>
    <link rel="stylesheet" href="{sw_cdn_url}/plugins/splide/splide.min.css">

    <!-- SW_Retail theme relax -->
    {swretail_plugin_place_head}

</head>

<body>


    {swretail_plugin_place_top}

    <!--  some cart buttons -->
    <div id="cart_putin_confirmation" class="hide">
        <button onclick="swShopHelper.modalHide();"   >Verder winkelen</button>
        <button onclick="swShopHelper.loadCheckout();"><i class="fas fa-shopping-cart"></i> Winkelwagen</button>
    </div>

    <!-- modal dialog  -->
    <div id="modal_ok" class="hide">
        <button onclick="swShopHelper.modalHide();"   >OK</button>
    </div>

    <!-- UI blocking div can be accessed using swShopHelper.blockUI  -->
    <div class="blocked" id="block-ui"> <i class="fas fa-spinner fa-pulse" style="font-size:100px; position:relative;top: calc(50% - 100px);left: 50%;"></i> </div>

    <!-- Modal div, can be handled using swShopHelper.modalShow, better not to delete this-->
    <div class="sw-modal" id="sw-modal-dialog">
        <div class="sw-modal-content">
            <span class="close-button" onclick="swShopHelper.modalHide();">&times;</span>
            <div id="sw-modal-title">
                <h3>Titel</h3>
            </div>
            <div id="sw-modal-text">
                <p>Text</p>
            </div>

            <div id="sw-modal-footer">

            </div>
        </div>
    </div>


    <!-- Message for cookies -->
    <div id="cookie-message"><div id="cookie-message-text"></div><button onclick="swShop.cookieDismiss('ok');return false;" >OK</button></div>


    {block:hook:hook_before_header:page_block}
    {header}
    {block:hook:hook_after_header:page_block}



    {if:current_url:=:/thisistheold344fd82js781k047.html}
        <div class="headerimg">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 col-md-6 offset-md-6 my-auto mob-text-right">
                        <h1 class="d-inline">Zomer</h1><span class="d-inline">deals</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidunt ut labore et dolore magna aliqua.</p>
                        <a class="btn btn-white">Bekijk</a>
                    </div>
                </div>
            </div>
        </div>


        <div class="headergrey usp pt-3 pb-3">
            <div class="container">
                <div class="row text-center">
                    <div class="col-12 col-sm-6 col-md-4 mob-text-center md-text-right"><i class="fas fa-truck d-inline"></i> <p class="d-inline">Altijd gratis verzending</p></div>
                    <div class="col-12 col-sm-6 col-md-4 mob-text-center md-text-left"><i class="fas fa-shopping-cart d-inline"></i> <p class="d-inline">Voordelig winkelen</p></div>
                    <div class="col-12 col-md-4 mob-text-center"><i class="far fa-frown d-inline"></i> <p class="d-inline">Niet tevreden? Geld terug</p></div>
                </div>
            </div>
        </div>
    {if_end}
    <div class="container">
        <!-- main content -->
        <div class="main mt-5" id="main_content">
            <div id="content" >
                <!-- here the content will be inserted -->
                {content}
            </div>
        </div>
    </div>


    {block:hook:hook_above_footer:page_block}
    {footer}
    {block:hook:hook_below_footer:page_block}

    {swretail_plugin_place_bottom}
</body>


</html>

<script>
    // it is very important that this line is preserved in order for the webshop to keep functioning. do not meddle with this
    var shopConfiguration={configuration_json};

    // the additional javascript which will be inlcuded from the configuration
    {additional_javascript}


</script>

{templater_stop}

